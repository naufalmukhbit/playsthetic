<?php
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');	
	}

	public function index()
	{
		$data = array(
			'title' => 'Login to Playsthetic',
			'filename' => 'login'
		);
		$this->load->view('login',$data);
	}

	public function validate_data()
	{
		$data = $this->input->post(null,TRUE);
		$login_data = $this->Login_model->validate_data($data);
		if($login_data) {
            $this->session->set_userdata('userid',$login_data->userid);
            redirect('Home/index');
        } else {
            $this->session->set_flashdata('message','login_failed');
            redirect('Login/index');
        }
	}
}
?>