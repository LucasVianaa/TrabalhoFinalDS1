<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conferencia
 *
 * @author Thiago
 */
class Conferencia extends CI_CONTROLLER {
    function telaCriarConferencias(){
        $data['titulo'] = 'Cadastrar';
        
        $this->load->model('Conferencia_model');

        $data['areaConhecimento'] = $this->Conferencia_model->listarAreasConhecimento();
        
        $this->load->view('header');
        $this->load->view('criarConferencia', $data);
         $this->load->view('footer');
    }
    
    function criarConferencia(){
        
        if ($this->input->post()) {
            
            $data['nome'] = $this->input->post('nome');
            $data['pais'] = $this->input->post('pais');
            $data['cidade'] = $this->input->post('cidade');
            $data['data_inicio'] = $this->input->post('data_inicio');
            $data['data_fim'] = $this->input->post('data_fim');
            $data['data_inicio_inscricao'] = $this->input->post('data_inicio_inscricao');
            $data['data_fim_inscricao'] = $this->input->post('data_fim_inscricao');
            $data['area_conhecimento'] = $this->input->post('area_conhecimento');

            
            $id;
            
            $this->load->model('Conferencia_model');
            
            // criar a conf
            try {
                   $id = $this->Conferencia_model->inserirConferencia($data);
                    
            } catch (Exception $e) {
                    echo $e; 
                    die();
            }
            
            // TOPICOS
            foreach ($this->input->post('interesses') as $interesse) {
                $dataInteresse['conferencia'] =  $id;
                $dataInteresse['topico'] =  $interesse;
                
                try {
                    $this->Conferencia_model->inserirTopico($dataInteresse);
                    
                } catch (Exception $e) {
                        echo $e; 
                        die();
                }
            }
            
            // PRECOS
            try {
                $dataPreco['conferencia'] =  $id;
                $dataPreco['preco_estudante'] =  $this->input->post('preco_estudante');
                $dataPreco['preco_professor'] =  $this->input->post('preco_professor');
                $dataPreco['preco_outros'] =  $this->input->post('preco_outros');
                $this->Conferencia_model->inserirPrecos($dataPreco);
                    
            } catch (Exception $e) {
                    echo $e; 
                    die();
            }
            
            // AUTOR
            try {
                $dataAutor['conferencia'] =  $id;
                $dataAutor['usuario'] =  $this->session->all_userdata()['codigo'];
                $dataAutor['autor'] =  true;
                
                $this->Conferencia_model->inserirUsuarioEmConferencia($dataAutor);
                    
            } catch (Exception $e) {
                    echo $e; 
                    die();
            }


            
            $data['titulo'] = 'Menu';
            
            $this->load->view('header');
            $this->load->view('menu', $data);
            $this->load->view('footer');
        }
        
    }
    
    function listarMinhasConferencias(){
        $data['titulo'] = 'Minhas conferencias';
        
        $this->load->model('Conferencia_model');

        $data['conferencias'] = $this->Conferencia_model->listarConferenciasAtuaisPorUsuario();
        
        $this->load->view('header');
        $this->load->view('listarMinhasConferencias', $data);
        $this->load->view('footer');
    }
    
    function listarConferenciasDisponiveis(){
        $data['titulo'] = 'Conferencias Disponiveis';
        
        $this->load->model('Conferencia_model');
            
        $data['conferencias'] = $this->Conferencia_model->listarConferenciasAtuais();
        
        $this->load->view('header');
        $this->load->view('listarConferenciasDisponiveis', $data);
        $this->load->view('footer');
    }
}
