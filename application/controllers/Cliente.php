<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
  
  public function __construct()
	{
		parent::__construct();
		$this->load->model('cliente_model');
	}

	public function index()
	{
    if($this->input->post()):
        $paciente = $this->input->post();
        if($this->cliente_model->adicionar($paciente)):
          return true;
        else:
          return false;
        endif;
    endif;

    $data['clientes'] = $this->cliente_model->buscar();
    $this->load->view('header', $data);
    $this->load->view('cliente/cliente', $data);
	}
}
