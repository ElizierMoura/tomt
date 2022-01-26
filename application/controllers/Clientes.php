<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {


    // Iniciar model
    public function __construct() {
        parent::__construct();
        $this->load->model('Clientes_model');
    }

    // Listar clientes - gerar tela
	public function index()
	{   
        $data['clientes'] = $this->Clientes_model->listarClientes();
		
        $this->load->view('clientes', $data);
	}

    //  Controller para armazenar um novo cliente e gerar a tela
    public function cadastrar()
    {   
        // recuperar dados
        $dados['nome'] = $this->input->post('nome');
        $dados['telefone'] = $this->input->post('telefone');
        $dados['email'] = $this->input->post('email');
        $dados['identificador'] = $this->input->post('cpf');
        $dados['sub'] = $this->input->post('sub');

        // Verificar para validar dados 
        if ($dados['sub'] != "") {
            if($dados['nome'] == "" || $dados['telefone'] == "" || $dados['email'] == "" || $dados['identificador'] == "") {
                $this->load->view('cadastrar', ['erro' => "Verifique os campos"]);
                return;
            }else {
                $data['data'] = $this->Clientes_model->cadastrarCliente($dados);
                $this->load->view('cadastrar',$data);
                return;
            }
        }

        $this->load->view('cadastrar');
    }
}


