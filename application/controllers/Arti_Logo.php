<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arti_Logo extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('arti_logo');
		$this->load->view('template/footer');
	}
}