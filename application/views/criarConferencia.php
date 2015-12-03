<div id='container'>
	<h1>
		<?php echo $titulo; ?>
	</h1>

<?php
    /*
     *   
        area_conhecimento integer,

     */
    $style = array('class' => 'form-horizontal', 'id' => 'teste');
    echo form_open('Conferencia/criarConferencia',$style);
    
    echo br();

    $data = array(
        'name'  		=> 'nome',
        'class'			=> 'form-control'   
	);
	echo form_label('Nome ', 'nome');
	echo form_input($data);
	echo br();
    
     $data = array(
        'name'  		=> 'data_inicio',
        'class'			=> 'form-control'   ,
        'type' => 'date'
	);
	echo form_label('Data inicio evento ', 'dta_inicio');
	echo form_input($data);
	echo br();
    
    $data = array(
        'name'  		=> 'data_fim',
        'class'			=> 'form-control'   ,
        'type' => 'date'
	);
	echo form_label('Data fim evento ', 'dta_fim');
	echo form_input($data);
	echo br();
     
    $data = array(
        'name'  		=> 'data_inicio_inscricao',
        'class'			=> 'form-control'   ,
        'type' => 'date'
	);
	echo form_label('Data inicio inscricao ', 'dta_inicio_inscricao');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'data_fim_inscricao',
        'class'			=> 'form-control'   ,
        'type' => 'date'
	);
	echo form_label('Data fim inscricao ', 'dta_fim_inscricao');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'pais'   ,
        'class'			=> 'form-control'   
	);
	echo form_label('Pais ', 'pais');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'cidade'   ,
        'class'			=> 'form-control'   
	);
	echo form_label('Cidade ', 'cidade');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'preco_estudante'   ,
        'class'			=> 'form-control'   ,
        'step' => '0.01',
        'type' => 'number'
	);
	echo form_label('Preco para estudante ', 'preco_estudante');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'preco_professor'   ,
        'class'			=> 'form-control'   ,
        'step' => '0.01',
        'type' => 'number'
	);
	echo form_label('Preco para professor ', 'preco_professor');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'preco_outros'   ,
        'class'			=> 'form-control'   ,
        'step' => '0.01',
        'type' => 'number'
	);
	echo form_label('Preco para outros ', 'preco_outros');
	echo form_input($data);
	echo br();
        
        
    $data = array(
        'name'  		=> 'area_conhecimento'   ,
        'class'			=> 'form-control'   
	);
    $option = array();
    foreach($areaConhecimento as $area){
        $option[$area->codigo] = $area->nome;
    }
    
    echo form_label('Area do conhecimento ', 'area_conhecimento');
    echo form_dropdown($data, $option);
    echo br();

    
    $data = array(
        'onClick'     => 'addInteresse()'   
          
	);	
    
    echo form_button($data, "Adicionar topicos");

    echo br();

    echo form_submit('mysubmit', 'Cadastrar');

    echo form_close();
?>

</div>
