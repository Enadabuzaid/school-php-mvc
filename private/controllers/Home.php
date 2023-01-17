<?php

/**
 * Home
 */
class Home extends Controller 
{
  
  public function index()
  {
    // $user = $this->load_model('User');

    $user = new User();
    $arr= array();
    // $arr = [
    //   'firstname' => 'enadtest2',
    //   'lastname' => 'abuzaidtest2',
    //   'date' => date('d-m-y h:i:s')
    // ];

     $arr = [
      'firstname' => 'updated',
      // 'lastname' => 'abuzaidtest2',
      // 'date' => date('d-m-y h:i:s')
    ];
    // $arr['lastname'] = 'updated name2';


    $user->delete(1);
    $data = $user->findAll();


    $this->view('home' , ['rows' => $data]);
  }
}

