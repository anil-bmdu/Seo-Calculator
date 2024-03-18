<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model('calcmodel');
		$this->data['calc'] =$this->calcmodel->calc_List();
		// echo "<pre>";
		// print_r($this->data['calc']);exit;
		$this->load->view('welcome_message', $this->data);
	}

	public function formSubmit()
	{
	  $data = $this->input->post();
	//   echo "<pre>";
	//   print_r($data);exit;
	  if (!empty($_POST)) {
		$this->form_validation->set_rules('name', "Name", 'trim|required');
		$this->form_validation->set_rules('email', "Email", 'trim|required');
		$this->form_validation->set_rules('number', "Phone Number", 'trim|required');
		$this->form_validation->set_rules('url', "Website Links", 'trim|required');
		if (!$this->form_validation->run()) {
			$this->load->view('welcome_message', $data);
		//   $this->mapTemplate('/dashboard/services/services', $data);
		  return;
		} else {
			$this->load->model('calcmodel');
			$this->calcmodel->add_calc($this->input->post());
	
			// $this->flashMessgae('success', "Video Links added!");
			$this->session->set_flashdata('success_message', 'Data added Successfully!');
			redirect("welcome/index", 'refresh');
			// $this->load->view('welcome_message', 'refresh');
		}
  
  
	  } else {
		$this->mapTemplate('/dashboard/services/services', $data);
	  }
  
	}
}
