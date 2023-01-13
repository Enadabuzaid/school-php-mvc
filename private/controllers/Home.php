<?php

/**
 * Home
 */
class Home extends Controller 
{
  
  public function index()
  {
    $user = $this->load_model('User');
    
    $this->view('home' , ['rows' => ""]);
  }
}

