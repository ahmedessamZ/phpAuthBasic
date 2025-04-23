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

    public function profile() {
        $data = [
            'title' => 'profile page'
        ];

        $this->view('profile', $data);
    }

}
