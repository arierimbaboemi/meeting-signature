<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signature extends CI_Controller {

	public function index()
	{
		$this->form_meeting();
	}
	
	public function form_meeting()
	{
		$data['meeting_id'] = 0;
    	$data['main_view'] = 'form_meeting';

		$this->load->view('app', $data);
	}

	public function existing_meeting($meeting_id)
	{
		$data['meeting_id'] = $meeting_id;
    	$data['main_view'] = 'form_meeting';

		$this->load->view('app', $data);
	}
}
