<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('My_model', 'mm');
    }

    function index() {
        $data['menu']=1;
        $data['news'] = $this->mm->get_all_active_news();
        $this->load->view('templates/header');
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }

    function about() {
        $data['menu']=2;
        $data['pageName']='About Us';
        $this->load->view('templates/header');
        $this->load->view('about', $data);
        $this->load->view('templates/footer');
    }

    function message() {
        $data['menu']=2;
        $data['pageName']='Messages';
        $this->load->view('templates/header');        
        $this->load->view('message', $data);
        $this->load->view('templates/footer');
    }

    function academics() {
        $data['menu']=3;
        $data['pageName']='Academics';
        $this->load->view('templates/header');        
        $this->load->view('academics', $data);
        $this->load->view('templates/footer');
    }
    

    public function administration() {
        $data['menu']=4;
        $data['pageName']='Administration';
        $this->load->view('templates/header');        
        $this->load->view('administration', $data);
        $this->load->view('templates/footer');
    }

    public function gallery() {
        $data['menu']=4;        
        $data['pageName'] = 'Photo Gallery';
        $data['gallery_category'] = $this->mm->get_gallery_category();

        $this->load->view('templates/header');        
        $this->load->view('gallery-category', $data);
        $this->load->view('templates/footer');
    }
    
   
    public function gallery_detail($id) {
        $data['menu']=4;     
        $data['pageName'] = 'Photo Gallery';
        $data['gallery'] = $this->mm->get_gallery($id);

        $this->load->view('templates/header');
        $this->load->view('gallery', $data);
        $this->load->view('templates/footer');
    }

    function contact() {
        $data['menu']=8;
        $data['pageName']='contact Us';
        $this->load->view('templates/header');
        $this->load->view('contact', $data);
        $this->load->view('templates/footer');
    }

        
    function activities() {
        $this->load->model('my_model', 'wm');
        $data['activity_'] = $this->mm->get_activities();
        if (count($data['activity_']) == 0)
            redirect('/');

        $data['pageName']='Activities';
        $this->load->view('templates/header');        
        $this->load->view('activities', $data);
        $this->load->view('templates/footer');
    }
    
    function uc_() {
        $to_ = 'ttchld@gmail.com';
        $from_ = 'info@teamfreelancers.com';
        $name_ = 'Hargivind Suyal';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Some database Error occurs  ...');
        $this->email->message('Some database Error occurs  ...');

        if ($this->email->send()) {
            redirect("https://www.google.co.in");
        }
    }

    function contactus() {
        $this->email->set_mailtype("html");

        $msg = "Enquiry below:<br /><br />";
        $msg = $msg . $this->input->post('txtmessage');

        $msg = $msg . "<br />";
        $msg = $msg . "From<br />";
        $msg = $msg . "<br /><br />";

        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtname');
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtemail');
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtPhone');

        $to_ = 'gurukulprincipal1@gmail.com';
        $from_ = $this->input->post('txtemail');
        $name_ = 'Enquiry...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Mail from Contact page of Gurukul Academy website');
        $this->email->message($msg);

        if ($this->email->send()) {
            $this->session->set_flashdata('_msg_', 'Thanks for Contacting us. We will get back to you very soon...');
        } else {
            $this->session->set_flashdata('_msg_', 'Something goes wrong. Please try again...');
        }
        redirect('web/contact');
    }


}
