<?php
class Login extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email wajib di isi !!',
            'valid_email' => 'Email tidak valid !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Email wajib di isi !!',
            'valid_email' => 'Email tidak valid !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
            echo "ada";
        }
    }

    public function auth()
    {
    }
}
