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
        $user = $this->Login_model->dados_usuario($this->session->userdata('uid'));
        $dados['titulo'] = "Grupos";
        $dados['pg_header'] = "Grupos";
        $dados['_view'] = 'painel/grupo/info';
        $dados['tb_grupo'] = $this->Info_model->tabela_usuarios($id_grupo);
        $dados['usuario'] = $this->Login_model->dados_usuario($this->session->userdata('uid'));
        $this->load->view('painel/index', $dados);
        print_r($dados['tb_grupo']);
    }
}
