<div id='container'>
	<h1>
		<?php echo $titulo; ?>
	</h1>
<?php

    $table_property = array('table_open' => '<table width="50%" class="table">');
    $this->table->set_template($table_property);

    $this->table->set_caption('Conferencia');

    $this->table->set_heading(array('Nome', 'Pais', 'Cidade', 'Data inicio', 'Data Fim', 'Data inicio inscricao', 'Data fim inscricao', 'Area do conhecimento'));


    foreach ($conferencias as $conferencia) {
            $this->table->add_row($conferencia->nome, $conferencia->pais, $conferencia->cidade, $conferencia->data_inicio,
                    $conferencia->data_fim, $conferencia->data_inicio_inscricao, $conferencia->data_fim_inscricao,
                    $conferencia->area_conhecimento);
    }

    echo $this->table->generate();
    
    echo br(2);
    
    echo anchor(base_url().'index.php/Usuario/menu', 'Ir para o menu');

?>

</div>
