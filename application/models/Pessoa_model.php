<?php
/**
* Classe Pessoa
*/
class Pessoa_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function listarPessoas() {

		$query = $this->db->get('pessoa');

		$this->db->order_by('nome', 'DESC');

		return $query->result();
	}

	function buscaPessoaPorId($id) {
		$query = $this->db->get('pessoa', array('id' => $id));

		return $query->result();
	}

	function inserirPessoa($data) {

		$this->db->insert('pessoa', $data);

	}

	function excluirPessoa($id) {

		$this->db->delete('pessoa', array('id' => $id));			
	}

	function editarPessoa($data) {
		$this->db->where('id', $data['id']);
    	$this->db->set($data);
    	$this->db->update('pessoa');
	}
}
?>