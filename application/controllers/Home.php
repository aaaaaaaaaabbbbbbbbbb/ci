<?php

class Home extends CI_Controller
{
    public function index(){
        $this->load->view('layout/header_view');
        $this->load->view('home_view');
        $this->load->view('body');
        $this->load->view('html');
    }

    public function test()
    {
        $this->load->view('layout/header_view');
        $this->load->view('test_view');
    }
}