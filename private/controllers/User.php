<?php

/**
 * users controller
 */
class Users extends Controller
{
	
	function index()
	{
		// code...
		// if(!Auth::logged_in())
		// {
		// 	$this->redirect('login');
		// }

		$user = new User();

		// $this->view('users',['rows'=>$data]);
	}
}