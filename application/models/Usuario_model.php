<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_model
 *
 * @author aluno
 */
class Usuario_model extends CI_Model{
    private $codigo, $nome, $login, $senha, $dataNascimento, $endereco, $telefone,
            $cpf, $email, $instituicao, $conferencias, $areasConhecimento;
    
    function __construct()
	{
		parent::__construct();
	}
    
    function getAreasConhecimento() {
        return $this->areasConhecimento;
    }

    function setAreasConhecimento($areasConhecimento) {
        $this->areasConhecimento = $areasConhecimento;
    }

        
    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getInstituicao() {
        return $this->instituicao;
    }

    function getConferencias() {
        return $this->conferencias;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }

    function setConferencias($conferencias) {
        $this->conferencias = $conferencias;
    }
    
    function editarUsuario($data) {
        $this->db->where('codigo', $data['codigo']);
        $this->db->set($data);
        $this->db->update('usuario');
    }
    
    function inserirUsuario($dataUsuario, $dataConhecimentos) {
        $this->db->insert('usuario', $dataUsuario);
        $this->db->insert('usuario_areas_conhecimento', $dataConhecimentos);
    }
    
    function login($login, $senha) {
            $query = $this->db->get('usuario', array('login' => $login, 'senha' => $senha));
            $resultado = $query->result();
            if(empty($resultado) || !isset($resultado) || is_null($resultado) ){
                return false;
            }else{
                return true;
            }
    }
    

}
