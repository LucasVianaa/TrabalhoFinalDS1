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
            $dataInicioInscricao, $dataFimInscricao;
    
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


}
