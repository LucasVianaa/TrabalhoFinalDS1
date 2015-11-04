<div id='container'>
	<h1>
		<?php echo $titulo; ?>
	</h1>
<?php
    /*
    * Criação de Formulário utilizando o Form Helper do Code Igniter
    * https://codeigniter.com/user_guide/helpers/form_helper.html?highlight=form
    */

	$style = array('class' => 'form-horizontal');

    echo form_open('Pessoa/inserirPessoa',$style);
    
    echo br();

    $data = array(
        'name'  		=> 'nome',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',
        'class'			=> 'form-control'        
	);
	echo form_label('Nome ', 'nome');
	echo form_input($data);
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

    echo form_submit('mysubmit', 'Cadastrar');

    echo form_close();
?>

</div>