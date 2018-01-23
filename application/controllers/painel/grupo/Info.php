<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('grupo/Info_model');
        $this->load->model('inicio/Login_model');
        $login_status = $this->session->userdata('login');
        if ($login_status != TRUE) {
            redirect('inicio');
        }

        // $user = $this->Login_model->dados_usuario($this->session->userdata('uid'));
        // if ($user[0]->tipo == 1) {
        //     redirect('painel_controle');

        //}


    }

    public

    function index($id_grupo)
    {
        // Regras de validação do Formulario de registro de usuário no grupo

        $this->form_validation->set_rules('user', 'Usuário', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $dados['form_erro'] = validation_errors();
        } else {
            $dados['parametros'] = [
                'id_grupo' => $id_grupo,
                'id_user' => $this->input->post('user'),
                // Status  / 0 - inativo / 1 - ativo
                'user_status' => 1,
            ];

            $this->Info_model->ins_user_grupo($dados['parametros']);
        }

        $user = $this->Login_model->dados_usuario($this->session->userdata('uid'));
        $dados['titulo'] = "Grupos";
        $dados['pg_header'] = "Grupos";
        $dados['_view'] = 'painel/grupo/info';
        $dados['id_grupo'] = $id_grupo;
        $dados['tb_grupo'] = $this->Info_model->tabela_usuarios($id_grupo);
        $dados['tb_user'] = $this->Info_model->lista_usuarios();
        $dados['usuario'] = $this->Login_model->dados_usuario($this->session->userdata('uid'));
        $this->load->view('painel/index', $dados);
        //print_r($dados['tb_grupo']);
        //print_r($dados['tb_user']);
    }

    
}
