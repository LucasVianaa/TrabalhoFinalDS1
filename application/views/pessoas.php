<h1>
	<?php
		
		echo $titulo;

	?>
</h1>
<div id='container'>
	<?php
		echo $detalhes;
		echo "<br><br>";
	?>
</div>
<div id='container'>
	<?php
	/*
	* Para criar tabelas:
	* Biblioteca HTML Tables
	* https://codeigniter.com/user_guide/libraries/table.html?highlight=table
	*/
		$table_property = array('table_open' => '<table width="50%" class="table-stripped">');
		$this->table->set_template($table_property);

		$this->table->set_caption('Usuários');

		$this->table->set_heading(array('Nome', 'Email'));

		foreach ($pessoas as $pessoa) {
			$this->table->add_row($pessoa->nome, $pessoa->email, 
				anchor(base_url().'index.php/Pessoa/editarPessoa?id='.$pessoa->id, 'Editar'), 
				anchor(base_url().'index.php/Pessoa/excluirPessoa?id='.$pessoa->id, 'Excluir'));
		}
		
		echo $this->table->generate();

		echo br(2);
		echo anchor(base_url().'index.php/Pessoa/inserirPessoa', 'Adicionar Pessoa');
	?>
</div>
