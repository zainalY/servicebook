<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index()
    {
        check_not_login();
        $data = array(
            'title' => 'Profile'
        );
        $this->template->load('template', 'profile', $data);
    }
}
