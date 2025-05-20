<?php
class Users extends Controller {
    private $userModel;

    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function register() {

        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = array_map(function($item) {
                return htmlspecialchars(strip_tags($item));
            }, $_POST);

            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z-' ]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";


            if (empty($data['username'])) {
                $data['usernameError'] = 'User name cannot be empty.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }



            if (empty($data['email'])) {
                $data['emailError'] = 'email cannot be empty.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'please enter the correct email.';
            } else {
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already Registered.';
                }
            }



            if (empty($data['password'])) {
                $data['passwordError'] = 'password cannot be empty';
            } elseif (strlen($data['password'] < 6)) {
                $data['passwordError'] = 'password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'password must have 1 numeric value.';
            }



            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'please confirm password';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'passwords do not match, please try again. ';
                }
            }



            if (empty($data['usernameError']) && empty($data['emailError']) &&
                empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);                if ($this->userModel->register($data)) {
                    flash('You are now registered! Please log in', 'You are now registered! Please log in', 'success');
                    header('location:' . URLROOT . '/users/login');
                    exit();
                } else {
                    die('something went wrong');
                }
            }
        }

        $this->view('users/register', $data);
    }

    public function login(){

        $data = [
                'username' =>'' ,
                'password' =>'' ,
                'usernameError' =>'' ,
                'passwordError' =>''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = array_map(function($item) {
                return htmlspecialchars(strip_tags($item));
            }, $_POST);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => ''
            ];

            if (empty($data['username'])) {
                $data['usernameError'] = 'User name cannot be empty.';
            } elseif (!$this->userModel->findUserByUsername($data['username'])) {
                $data['usernameError'] = 'Username does not exist.';
            }

            if (empty($data['password'])) {
                $data['passwordError'] = 'password cannot be empty';
            }

            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
 
                } else {
                    $data['passwordError'] = 'Password is incorrect, please try again.';
                }
            }
        }
        
        $this->view('users/login', $data);
    }    public function createUserSession($user){
        $_SESSION ['user_id'] = $user->id;
        $_SESSION ['username'] = $user->username;
        $_SESSION ['email'] = $user->email;
        flash('Welcome back, ' . $user->username . '!', 'Welcome back, ' . $user->username . '!', 'success');
        header('location:' . URLROOT . '/pages/profile');
        exit();
    }    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        flash('You have been logged out successfully', 'You have been logged out successfully', 'info');
        header('location:'. URLROOT . '/users/login');
        exit();
    }




}

