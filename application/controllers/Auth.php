<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $data = array(
            'title' => 'Sign In'
        );
        check_already_login();
        $this->load->view('login', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                echo '<script>alert("Login Success!");window.location.href="' . site_url('dashboard') . '";</script>';
            } else {
                echo '<script>alert("Login Failed, Check your username & password!");window.location.href="' . site_url('auth/login') . '";</script>';
            }
        }
    }

    public function logout()
    {
        $params = array('userid', 'level');
        $this->session->unset_userdata($params);

        redirect('auth/login');
    }
}
