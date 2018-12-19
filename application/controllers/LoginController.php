<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/11/2018
 * Time: 5:33 PM
 */

class LoginController extends MY_Controller
{


	public function index()
	{
		$this->load->model('Admin_model');
		if ($this->Admin_model->is_admin_loged_in())
		{
			redirect('Admindashboard');
		}
		else{
			$this->load->view('admin/login_page');
		}
	}
}
