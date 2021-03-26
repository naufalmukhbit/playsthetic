<?php
class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Complete your profile',
			'filename' => 'profile',
			'name' => $this->session->flashdata('name'),
			'userid' => $this->session->userdata('userid')
		);
		$this->load->view('profile',$data);
	}

	public function add_profile()
	{
		$data = $this->input->post(null,TRUE);
        $add_profile = $this->Profile_model->add_profile($data);
        if($add_profile) {
            redirect('Home/index');
        } else {
            $this->session->set_flashdata('message','insert_error');
            $this->session->set_flashdata('name',$data['name']);
            redirect('Profile/index');
        }
	}

	public function add_address()
	{
		$data = $this->input->post(null,TRUE);
        $add_address = $this->Profile_model->add_address($data);
        if($add_profile) {
        	$this->session->set_flashdata('message','address_success');
        	$this->session->set_flashdata('name',$data['name']);
            redirect('Profile/index');
        } else {
            $this->session->set_flashdata('message','address_failed');
            $this->session->set_flashdata('name',$data['name']);
            redirect('Profile/index');
        }
	}
}
?>