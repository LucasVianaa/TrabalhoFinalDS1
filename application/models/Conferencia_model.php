<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conferencia_model
 *
 * @author aluno
 */
class Conferencia_model extends CI_Model{
    private $codigo, $cidade, $precoEstudante, $precoProfessor, $precoOutros,
            $pais, $dataInicio, $dataFim, $topicosInteresse, $areaConhecimento,
            $dataInicioInscricao, $dataFimInscricao, $autores;
    
    function __construct()
	{
		parent::__construct();
	}
    
    function getCodigo() {
        return $this->codigo;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getPrecoEstudante() {
        return $this->precoEstudante;
    }

    function getPrecoProfessor() {
        return $this->precoProfessor;
    }

    function getPrecoOutros() {
        return $this->precoOutros;
    }

    function getPais() {
        return $this->pais;
    }

    function getDataInicio() {
        return $this->dataInicio;
    }

    function getDataFim() {
        return $this->dataFim;
    }

    function getTopicosInteresse() {
        return $this->topicosInteresse;
    }

    function getAreaConhecimento() {
        return $this->areaConhecimento;
    }

    function getDataInicioInscricao() {
        return $this->dataInicioInscricao;
    }

    function getDataFimInscricao() {
        return $this->dataFimInscricao;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setPrecoEstudante($precoEstudante) {
        $this->precoEstudante = $precoEstudante;
    }

    function setPrecoProfessor($precoProfessor) {
        $this->precoProfessor = $precoProfessor;
    }

    function setPrecoOutros($precoOutros) {
        $this->precoOutros = $precoOutros;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    function setTopicosInteresse($topicosInteresse) {
        $this->topicosInteresse = $topicosInteresse;
    }

    function setAreaConhecimento($areaConhecimento) {
        $this->areaConhecimento = $areaConhecimento;
    }

    function setDataInicioInscricao($dataInicioInscricao) {
        $this->dataInicioInscricao = $dataInicioInscricao;
    }

    function setDataFimInscricao($dataFimInscricao) {
        $this->dataFimInscricao = $dataFimInscricao;
    }
    
    function getAutores() {
        return $this->autores;
    }

    function setAutores($autores) {
        $this->autores = $autores;
    }

    
    function listarConferenciasAtuaisPorUsuario() {
        $this->db->select('conferencia.*');
        $this->db->join('conferencia_usuario', 'conferencia.codigo = conferencia_usuario.conferencia');
        $this->db->where('conferencia.data_fim >', date("d-m-y"));
        $this->db->where('conferencia_usuario.usuario =', $this->session->all_userdata()['codigo']);
        $query = $this->db->get('conferencia');

        return $query->result();
    }
    
    
    function listarAreasConhecimento() {
        $query = $this->db->get('area_conhecimento');

        return $query->result();
    }
    
    function listarConferenciasAtuais() {
        $this->db->select('*');
        $this->db->where('conferencia.data_fim >', date("d-m-y"));
        $query = $this->db->get('conferencia');

        return $query->result();
    }
    
    function inserirConferencia($conferencia) {
        $this->db->insert('conferencia', $conferencia);
        return $this->db->insert_id();
        /*
         * $conferenciaAutor, $topicos, $preco
        $this->db->insert('conferencia_usuario', $conferenciaAutor);
        $this->db->insert('conferencia_topicos', $topicos);
        $this->db->insert('preco_conferencia', $preco);
         * 
         */

    }
    
    function inserirTopico($topico) {
        $this->db->insert('conferencia_topicos', $topico);

    }
    
    function inserirPrecos($preco) {
        $this->db->insert('preco_conferencia', $preco);

    }
    
    
    
    function inserirUsuarioEmConferencia($conferenciaUsuario) {
        $this->db->insert('conferencia_usuario', $conferenciaUsuario);

    }


}
