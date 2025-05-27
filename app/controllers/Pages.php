<?php
class Pages extends Controller {
    public function __construct() {

    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About Us'
        ];

        $this->view('about', $data);
    }

    public function projects() {
        $data = [
            'title' => 'Our Projects'
        ];

        $this->view('projects', $data);
    }

    public function contact() {
        $data = [
            'title' => 'Contact Us',
            'name' => '',
            'email' => '',
            'subject' => '',
            'message' => '',
            'error' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'Contact Us',
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'subject' => trim($_POST['subject']),
                'message' => trim($_POST['message']),
                'error' => ''
            ];

            // Validate name
            if (empty($data['name'])) {
                $data['error'] = 'Please enter your name';
            } elseif (strlen($data['name']) > 50) {
                $data['error'] = 'Name is too long (maximum 50 characters)';
            }

            // Validate email
            if (empty($data['email'])) {
                $data['error'] = 'Please enter your email address';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['error'] = 'Please enter a valid email address';
            }

            // Validate subject
            if (empty($data['subject'])) {
                $data['error'] = 'Please enter a subject';
            } elseif (strlen($data['subject']) > 100) {
                $data['error'] = 'Subject is too long (maximum 100 characters)';
            }

            // Validate message
            if (empty($data['message'])) {
                $data['error'] = 'Please enter your message';
            } elseif (strlen($data['message']) > 2000) {
                $data['error'] = 'Message is too long (maximum 2000 characters)';
            }

            if (empty($data['error'])) {
                // Store the message or handle it as needed
                // For now, just show a success message
                flash('contact_success', 'Thank you for your message! We\'ll get back to you soon.', 'success');
                header('location: ' . URLROOT . '/pages/contact');
                exit();
            }
        }

        $this->view('contact', $data);
    }

    public function profile() {
        // Check if user is logged in
        if (!isLoggedIn()) {
            header('location: ' . URLROOT . '/users/login');
            exit();
        }

        $data = [
            'title' => 'My Profile'
        ];

        $this->view('profile', $data);
    }
}
