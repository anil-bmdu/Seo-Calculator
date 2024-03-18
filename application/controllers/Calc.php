<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Controller {

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
        $this->load->library('form_validation');
	    $data = $this->input->post();
	//   echo "<pre>";
	//   print_r($data);exit;
	  if (!empty($_POST)) {
		$this->form_validation->set_rules('name', "Name", 'trim|required');
		$this->form_validation->set_rules('email', "Email", 'trim|required|valid_email|is_unique[calc.email]');
		$this->form_validation->set_rules('number', "Phone Number", 'trim|required');
		$this->form_validation->set_rules('url', "Website Links", 'trim|required');
        $this->form_validation->set_rules('industryName', "Name", 'trim|required');
		$this->form_validation->set_rules('numberOfKeywords', "Email", 'trim|required');
		$this->form_validation->set_rules('numberOfBacklinks', "Phone Number", 'trim|required');
		$this->form_validation->set_rules('levelOfOnPage', "Website Links", 'trim|required');
        $this->form_validation->set_rules('total', "Total Price", 'trim|required');
		if (!$this->form_validation->run()) {
			// echo "Validation Not work";
            $this->session->set_flashdata('success_message', 'Please Enter Correct Entry!');
			// $this->load->view('welcome_message', $data);
			echo "<script>alert('Please Enter Correct Entry!');</script>";
			redirect("/", 'refresh');
		//   $this->mapTemplate('/dashboard/services/services', $data);
		  return;
		} else {
			$this->load->model('calcmodel');
			// print_r($this->input->post('email'));exit;
			$this->calcmodel->add_calc($this->input->post());
			$this->load->library('email');
			$msg = "Message Send Successfully!";
			$this->email->from('anilbmdu@gmail.com', 'Name');
			$this->email->to($this->input->post('email'));
			$this->email->subject('Email Test');
			$this->email->message($msg);
			echo "<script>alert('Calculation added successfully');</script>";
			$this->session->set_flashdata('success_message', 'Data added Successfully!');
			redirect("/", 'refresh');
			// $this->email->send();
			// echo "stop";
			// if($this->email->send()){
			// 	$this->session->set_flashdata('success_message', 'Data added Successfully!');
			// 	redirect("/", 'refresh');
			// }
			// echo "<pre>";
			// print_r($this->input->post());
			
			// $this->load->view('welcome_message', 'refresh');
		}
  
  
	  } else {
		$this->mapTemplate('/dashboard/services/services', $data);
	  }
  
	}
}
