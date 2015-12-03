<div id='container'>
	<h1>
		<?php echo $titulo; ?>
	</h1>
<?php
    	$style = array('class' => 'form-horizontal', 'id' => 'teste');
    echo form_open('Usuario/editarUsuario',$style);
    
    echo br();

    $data = array(
        'name'  		=> 'email',
        'class'			=> 'form-control'   ,
        'value' => $usuario[0]->email
	);
	echo form_label('Email ', 'email');
	echo form_input($data);
	echo br();
    
     $data = array(
        'name'  		=> 'data_nascimento',
        'class'			=> 'form-control'   ,
        'type' => 'date' ,
        'value' => $usuario[0]->data_nascimento
         
	);
	echo form_label('Data nascimento ', 'dta_nascimento');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'cpf'   ,
        'class'			=> 'form-control'   ,
        'value' => $usuario[0]->cpf
	);
	echo form_label('Cpf ', 'cpf');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'nome'   ,
        'class'			=> 'form-control'  ,
        'value' => $usuario[0]->nome
	);
	echo form_label('Nome ', 'nome');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'endereco'   ,
        'class'			=> 'form-control'   ,
        'value' => $usuario[0]->endereco
	);
	echo form_label('Endereco ', 'endereco');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'telefone'   ,
        'class'			=> 'form-control'   ,
        'value' => $usuario[0]->telefone
	);
	echo form_label('Telefone ', 'telefone');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'instituicao'   ,
        'class'			=> 'form-control'   ,
        'value' => $usuario[0]->instituicao
	);
	echo form_label('Instituicao ', 'instituicao');
	echo form_input($data);
	echo br();
    

    $data = array(
        'name'  		=> 'senha',
        'maxlength'     => '6'   ,
        'class'			=> 'form-control' ,
        'value' => $usuario[0]->senha
	);	
	echo form_label('Senha ', 'senha');
    echo form_password($data);
    
    $data = array(
        'type'  => 'hidden',
        'name'  => 'codigo',
        'value' => $usuario[0]->codigo
	);

	echo form_input($data);
  
    echo br();

    echo form_submit('mysubmit', 'Editar');

    echo form_close();
 
?>

</div>

