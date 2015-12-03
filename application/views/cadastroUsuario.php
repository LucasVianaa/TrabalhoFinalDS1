<div id='container'>
	<h1>
		<?php echo $titulo; ?>
	</h1>

<?php

/*
 * Código, CPF, Email, Nome, Data de Nascimento, Endereço, Telefone, senha, Instituição a qual está vinculado, por exemplo, uma empresa, ou universidade. Além disso o usuário pode cadastrar várias áreas de interesse.




 *  */
    
	$style = array('class' => 'form-horizontal', 'id' => 'teste');
    echo form_open('Usuario/cadastrarUsuario',$style);
    
    echo br();

    $data = array(
        'name'  		=> 'email',
        'class'			=> 'form-control'   
	);
	echo form_label('Email ', 'email');
	echo form_input($data);
	echo br();
    
     $data = array(
        'name'  		=> 'data_nascimento',
        'class'			=> 'form-control'   ,
        'type' => 'date'
	);
	echo form_label('Data nascimento ', 'dta_nascimento');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'cpf'   ,
        'class'			=> 'form-control'   
	);
	echo form_label('Cpf ', 'cpf');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'nome'   ,
        'class'			=> 'form-control'   
	);
	echo form_label('Nome ', 'nome');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'endereco'   ,
        'class'			=> 'form-control'   
	);
	echo form_label('Endereco ', 'endereco');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'telefone'   ,
        'class'			=> 'form-control'   
	);
	echo form_label('Telefone ', 'telefone');
	echo form_input($data);
	echo br();
        
    $data = array(
        'name'  		=> 'instituicao'   ,
        'class'			=> 'form-control'   
	);
	echo form_label('Instituicao ', 'instituicao');
	echo form_input($data);
	echo br();
  
    
    
    

    $data = array(
        'name'  		=> 'senha',
        'maxlength'     => '6'   ,
        'class'			=> 'form-control'   
	);	
	echo form_label('Senha ', 'senha');
    echo form_password($data);
    
    $data = array(
        'onClick'     => 'addInteresse()'   
          
	);	
    
    echo form_button($data, "Adicionar interesses");

    echo br();

    echo form_submit('mysubmit', 'Cadastrar');

    echo form_close();
 
?>

</div>
