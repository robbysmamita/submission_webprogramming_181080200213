<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Kafeins - Coffee etc.";
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('home/index');
        $this->load->view('home/contact');
        $this->load->view('layouts/footer');
    }

    public function gallery()
    {
        $data['title'] = "Gallery | Kafeins - Coffee etc.";
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('home/gallery');
        $this->load->view('home/contact');
        $this->load->view('layouts/footer');
    }

    public function order()
    {
        $data['title'] = "Order | Kafeins - Coffee etc.";
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('home/order');
        $this->load->view('home/contact');
        $this->load->view('layouts/footer');
    }

    public function detail()
    {
        $data['title'] = "Detail Products | Kafeins - Coffee etc.";
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('home/product_detail');
        $this->load->view('home/contact');
        $this->load->view('layouts/footer');
    }
}