<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Usuario extends CI_CONTROLLER{
    
    function __construct()
	{
		parent::__construct();
	}
        
        
    function index() {
        $data['titulo'] = 'Login e - conferences';


        $this->load->view('header');
        $this->load->view('login', $data);
         $this->load->view('footer');
    }
    
    function telaCadastroUsuario() {
        $data['titulo'] = 'Cadastrar';


        $this->load->view('header');
        $this->load->view('cadastroUsuario', $data);
         $this->load->view('footer');
    }
    
    function telaEditarCadastro() {
        $data['titulo'] = 'Editar usuario';
        if ($this->input->get()) {
            $this->load->model('Usuario_model');
            $data['usuario'] = $this->Usuario_model->getUserById($this->session->all_userdata()['codigo']);
            
            $this->load->view('header');
            $this->load->view('editarUsuario', $data);
            $this->load->view('footer');
        }
        
    }
    
    function login() {
       
        if ($this->input->post()) {
            
           
            $this->load->model('Usuario_model');
            if($this->Usuario_model->login($this->input->post('email'), $this->input->post('senha'))){
                $codigo = $this->Usuario_model->getUserCodeByEmail($this->input->post('email'));
                $newdata = array('codigo' => $codigo[0]->codigo);
                $this->session->set_userdata($newdata);
                $data['titulo'] = 'Menu';

                $this->load->view('header');
                $this->load->view('menu', $data);
                $this->load->view('footer');
                
            }else{
                redirect('Pessoa');
            }    

        }
    
    }
    
    function cadastrarUsuario(){
        if ($this->input->post()) {
            
            $data['nome'] = $this->input->post('nome');
            $data['email'] = $this->input->post('email');
            $data['instituicao'] = $this->input->post('instituicao');
            $data['data_nascimento'] = $this->input->post('data_nascimento');
            $data['senha'] = $this->input->post('senha');
            $data['cpf'] = $this->input->post('cpf');
            $data['telefone'] = $this->input->post('telefone');
            $data['endereco'] = $this->input->post('endereco');
            $this->load->model('Usuario_model');
            
            $id;
          

            try {
                   $id = $this->Usuario_model->inserirUsuario($data);
                    
            } catch (Exception $e) {
                    echo $e; 
                    die();
            }
            
            foreach ($this->input->post('interesses') as $interesse) {
                $dataInteresse['usuario'] =  $id;
                $dataInteresse['interesse'] =  $interesse;
                
                try {
                    $this->Usuario_model->inserirInteresse($dataInteresse);
                    
                } catch (Exception $e) {
                        echo $e; 
                        die();
                }
            }
            redirect('Usuario');
            
            

        } else {

            $data['titulo'] = 'Cradastrar Nova Pessoa';

            $this->load->view('header');
            $this->load->view('cadastroUsuario', $data);
        }		
    }
}
