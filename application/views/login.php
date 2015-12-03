<div id='container'>
	<h1>
		<?php echo $titulo; ?>
	</h1>
<?php


	$style = array('class' => 'form-horizontal');

    echo form_open('Usuario/login',$style);
    
    echo br();

    $data = array(
        'name'  		=> 'email',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',
        'class'			=> 'form-control'        
	);
	echo form_label('Email ', 'email');
	echo form_input($data);
	echo br();

    $data = array(
        'name'  		=> 'senha',
        'maxlength'     => '6',
        'size'          => '50',
        'style'         => 'width:50%',     
        'class'			=> 'form-control'    
	);	
	echo form_label('Senha ', 'senha');
    echo form_password($data);

    echo br();

    echo form_submit('mysubmit', 'Login');

    echo form_close();
    
    echo anchor(base_url().'index.php/Usuario/telaCadastroUsuario', 'Cadastrar - se');
?>

</div>