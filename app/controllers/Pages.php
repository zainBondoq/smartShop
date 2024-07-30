<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){

      $data = [];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [];

      $this->view('pages/about', $data);
    }
      public function contact(){
          $data = [];

          $this->view('pages/contact', $data);
      }
      public function blog(){
          $data = [];

          $this->view('pages/blog', $data);
      }
      public function shop(){
          $data = [];

          $this->view('pages/shop', $data);
      }
      public function cart(){
          $data = [];

          $this->view('pages/cart', $data);
      }
      public function checkout(){
          $data = [];

          $this->view('pages/checkout', $data);
      }
  }