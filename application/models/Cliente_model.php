<?php

class Cliente_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function buscar($where = false)
  {
    $this->db->select('*');
    $this->db->from('tb_clientes');
    $this->db->order_by('nome');
    if($where != false):
      $this->db->where($where);
    endif;
    $data = $this->db->get()->result();
    return $data;
  }
  
  public function adicionar($data)
  {
    if($this->db->insert('tb_clientes', $data)):
      return $this->db->insert_id();
    endif;
    return false;
  }
}