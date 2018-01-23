<?php

class Info_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
    }

    // Select All

    function tabela($user_id)
    {
        $this->db->select(['user.nome admin', 'grupo.id', 'grupo.status', 'grupo.nome grupo']);
        $this->db->from('user');
        $this->db->join('grupo', 'user.id = grupo.id_user_admin');
        $result = $this->db->get()->result_array();
        for ($i=0; $i < count($result) ; $i++) { 
            $ts = $this->consulta_grupo($user_id,$result[$i]['id']);
            if ($ts) {
                $result[$i] = $result[$i] + ['pertence' => '1'];
            } else {
                $result[$i] = $result[$i] + ['pertence' => '0'];
            }
        }
        return  $result;

    }

    function tabela_usuarios($grupo_id){
        $this->db->select(['user.nome','user.id', 'user_grupo.id_grupo', 'user_grupo.user_status']);
        $this->db->from('user');
        $this->db->join('user_grupo', 'user.id = user_grupo.id_user ');
        $this->db->where('id_grupo', $grupo_id);
        //$this->db->group_by('id_grupo');
        $result = $this->db->get()->result_array();
        //print_r($result);   
        return $result;
    }

    function lista_usuarios()
    {   $grupo = $this->tabela_usuarios(1);
        $list = [];
        $this->db->select(['user.id', 'user.nome']);
        $this->db->from('user');
        $user = $this->db->get()->result_array();
        $user_dim = count($user);
        $grupo_dim = count($grupo);
        for($i=0; $i<$user_dim; $i++ ){
            for($j=0; $j<$grupo_dim; $j++ ){
                if($user[$i]['id'] == $grupo[$j]['id']){
                    unset($user[$i]);
                    break;
                }
            }
        }
        return $user;
    }

    function ins_user_grupo($parametros){
        return $this->db->insert('user_grupo', $parametros);

    }

    
}
