<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		if($this->session->userdata('userid') == 1) {
            	//redirect to admin page
        }
		$data = array(
			'title' => 'Playsthetic - Style by You',
			'filename' => 'home',
			'products' => $this->home_model->get_data()
		);
		$this->load->view('home',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home/index');
	}
}