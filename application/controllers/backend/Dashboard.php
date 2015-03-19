<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		if (!$this->session->userdata('email')) {
			// not logged in
			redirect(base_url());
		}
	}

	public function index() {
		$data['user_email'] = $this->session->userdata('email');
		$data['user_id'] = $this->session->userdata('id');
		$data['page_title'] = 'Gestão de abastecimentos';

		// vai verificar se o user tem carros
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/dashboard', $data);
		$this->load->view('backend/templates/footer');
	}
}