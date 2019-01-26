<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."login");
		}
		$this->load->model('Usuarios_model');
	}

	public function index()
	{
		
		$this->layout->view("pagina_inicio");

	}

	


}
