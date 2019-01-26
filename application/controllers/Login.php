<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function __construct(){
			parent::__construct();
			$this->load->model("Usuarios_model");
		}

			public function index()
			{
				$this->load->view('login/login');
			}

			public function login()
			{
							$nombre_cliente    = $this->input->post("nombre_cliente");
							$dni_cliente       = $this->input->post("dni_cliente");


					     	$this->form_validation->set_rules("nombre_cliente","Nombre del Usuario","required");
							$this->form_validation->set_rules("dni_cliente","Contrase&ntilde;a","required");

							if ($this->form_validation->run()) {
										$res = $this->Usuarios_model->login($nombre_cliente, $dni_cliente);

										if (!$res) {
											$this->session->set_flashdata("error","El usuario y/o contrase&ntilde;a son incorrectos");
											$this->index();
										}else{
											$data  = array(												
												'nombre_cliente'     => $res->nombre_cliente,
												'login'              => TRUE
											);
											$this->session->set_userdata($data);
											redirect(base_url()."dashboard");
										}
						}else{
							$this->index();
						}
			}

			public function logout()
			{
				$this->session->sess_destroy();
				redirect(base_url()."login");
			}
}
