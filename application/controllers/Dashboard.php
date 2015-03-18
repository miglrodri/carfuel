<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$this->load->library('session');
		$data['user_email'] = $this->session->userdata('email');
		$data['user_id'] = $this->session->userdata('id');
		$data['page_title'] = 'Gestão de abastecimentos';
		$this->load->view('templates/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
}