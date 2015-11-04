<?php
/**
* Controller inicial definido em config/routes.php
* 
*/
class Pessoa extends CI_CONTROLLER
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index() {
		$data['titulo'] = 'CRUD com CodeIgniter';
		$data['detalhes'] = 'Nesta página inicial teremos uma listagem das pessoas cadastradas';

		$this->load->model('Pessoa_model');
		$data['pessoas'] = $this->Pessoa_model->listarPessoas();


		$this->load->view('header');
		$this->load->view('pessoas', $data);
		 $this->load->view('footer');
	}

	function inserirPessoa() {

		/*
		*  Exemplo de como pegar dados vindos dos formulários via post
		*/
		if ($this->input->post()) {

			$data['nome'] = $this->input->post('nome');
			$data['email'] = $this->input->post('email');
	 
			$this->load->model('Pessoa_model');
	 
			try {
				$this->Pessoa_model->inserirPessoa($data);
				redirect('Pessoa');
			} catch (Exception $e) {
				echo $e; 
				die();
			}

		} else {

				$data['titulo'] = 'Cradastrar Nova Pessoa';

				$this->load->view('header');
				$this->load->view('inserir_pessoa', $data);
		}		
	}

	function editarPessoa() {

		if ($this->input->post()) {

			$data['id'] = $this->input->post('id');
			$data['nome'] = $this->input->post('nome');
			$data['email'] = $this->input->post('email');
	 
			try {
				$this->load->model('Pessoa_model');
				$this->Pessoa_model->editarPessoa($data);
				redirect('Pessoa');
			} catch (Exception $e) {
				echo $e;
			}
		} else {
			$id = $this->input->get('id');

			$this->load->model('Pessoa_model');

			$data['dados_pessoa'] = $this->Pessoa_model->buscaPessoaPorId($id);

			$data['titulo'] = 'Editar Pessoa';

			$this->load->view('header');
			$this->load->view('editar_pessoa', $data);
		}		
	}

	function excluirPessoa() {

		$this->load->model('Pessoa_model');

		$id = $this->input->get('id');

		try {
			$this->Pessoa_model->excluirPessoa($id);

			redirect('Pessoa');			
		
		} catch (Exception $e) {
			
			echo $e;

			die();
		}
	}
}
?>