<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
        $this->load->model('model_seller');
    }

    public function index()
    {
        $this->load->library('form_validation');
        $this->load->view('Auth/login');
    }

    // LOGIN PAGE USER
    public function user()
    {
        $this->load->library('form_validation');
        $this->load->view('Auth/login');
    }
    // LOGIN PAGE SELLER
    public function seller()
    {
        $this->load->library('form_validation');
        $this->load->view('Auth/loginSeller');
    }

    // REGISTER PAGE USER
    public function regUser()
    {
        $this->load->library('form_validation');
        $this->load->view('Auth/registration');
    }
    // REGISTER PAGE SELLER
    public function regSeller()
    {
        $this->load->library('form_validation');
        $this->load->view('Auth/registrationSeller');
    }


    public function login()
    {
        $this->load->library('form_validation');
        $this->load->helper('url');
        // FORM VALIDATION
        $this->form_validation->set_rules('email', 'Email', array('required', 'valid_email', 'trim'));
        $this->form_validation->set_rules('password', 'Password', array('required'));

        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/login'); //disini masih ada masalah kalo login response validationnya salah
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->model_user->find($email);

            if ($user) {
                if (password_verify($password, $user->password)) {
                    $newdata = array(
                        'email'     => $user->email,
                        'namaUser'  => $user->namaUser,
                        'idUser'    => $user->idUser,
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('success', 'Incorrect Password');
                    redirect(base_url('Auth'));
                }
            } else {
                $this->session->set_flashdata('success', 'Incorrect Email');
                redirect(base_url('Auth'));
            }
        }
    }

    // REGISTRATION PAGE
    public function registration()
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        // FORM VALIDATION
        $this->form_validation->set_rules('name', 'Name', array('required', 'trim'));
        $this->form_validation->set_rules('email', 'Email', array('required', 'valid_email', 'trim'));
        $this->form_validation->set_rules('password', 'Password', array('required'));
        $this->form_validation->set_rules('phone', 'Telephone number', array('required', 'integer', 'trim'));

        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/registration');
        } else {


            $data = [
                'namaUser' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'gender' => $this->input->post('gender'),
                'telepon' => $this->input->post('phone'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->db->insert('user', $data); // ini tablenya nanti diganti
            redirect('Auth/login'); //nanti ini langsung redirect ke store 

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function loginSeller()
    {
        $this->load->library('form_validation');
        $this->load->helper('url');
        // FORM VALIDATION
        $this->form_validation->set_rules('email', 'Email', array('required', 'valid_email', 'trim'));
        $this->form_validation->set_rules('password', 'Password', array('required'));

        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/loginSeller'); //disini masih ada masalah kalo login response validationnya salah
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $seller = $this->model_seller->find($email);

            if ($seller) {
                if (password_verify($password, $seller->password)) {
                    $newdata = array(
                        'email'     => $seller->email,
                        'namaSeller'  => $seller->namaSeller,
                        'idSeller'    => $seller->idSeller,
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);
                    redirect(base_url('Seller'));
                } else {
                    $this->session->set_flashdata('success', 'Incorrect Password');
                    redirect(base_url('Auth/loginSeller'));
                }
            } else {
                $this->session->set_flashdata('success', 'Incorrect Email');
                redirect(base_url('Auth/loginSeller'));
            }
        }
    }

    public function registrationSeller()
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        // FORM VALIDATION
        $this->form_validation->set_rules('name', 'Name', array('required', 'trim'));
        $this->form_validation->set_rules('email', 'Email', array('required', 'valid_email', 'trim'));
        $this->form_validation->set_rules('password', 'Password', array('required'));
        $this->form_validation->set_rules('phone', 'Telephone number', array('required', 'integer', 'trim'));

        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/registrationSeller');
        } else {


            $data = [
                'namaSeller' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'telepon' => $this->input->post('phone'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->db->insert('seller', $data); // ini tablenya nanti diganti
            redirect('Auth/loginSeller'); //nanti ini langsung redirect ke store 

        }
    }
}
