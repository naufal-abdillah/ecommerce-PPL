<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    // LOGIN PAGE
    public function index(){
        
        
        $this->load->library('form_validation');
        $this->load->helper('url');
        // FORM VALIDATION
        $this->form_validation->set_rules('name','Name',array('required','trim'));
        $this->form_validation->set_rules('email','Email',array('required', 'valid_email', 'trim'));

        if($this->form_validation->run() == false){
            $this->load->view('Auth/login'); //disini masih ada masalah kalo login response validationnya salah
        } else{
            $this->_log();
        }
    }

    private function _log(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',['email' => $email ]);

        if ($user){
            if (password_verify($password, $user['password'])){
                echo ("yay");
            } else{
                echo('nay');
            }
        } else {
            echo('nay');
        }
    }


    // REGISTRATION PAGE
    public function registration(){
        $this->load->helper('url');
        $this->load->library('form_validation');
        // FORM VALIDATION
        $this->form_validation->set_rules('name','Name',array('required','trim'));
        $this->form_validation->set_rules('email','Email',array('required', 'valid_email', 'trim'));
        $this->form_validation->set_rules('password','Password',array('required'));
        $this->form_validation->set_rules('phone', 'Telephone number', array('required', 'integer', 'trim'));
        
        if($this->form_validation->run() == false){
            $this->load->view('Auth/registration');
            
        } else{

            
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' =>password_hash( $this->input->post('password'), PASSWORD_DEFAULT),
                'gender' =>$this->input->post('gender'),
                'phone' => $this->input->post('phone')
            ];
            $this->db->insert('users', $data); // ini tablenya nanti diganti
            redirect('auth/login'); //nanti ini langsung redirect ke store 
                    
        }
    }
}
