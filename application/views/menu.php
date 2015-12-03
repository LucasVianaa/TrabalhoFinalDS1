<div id='container'>
	<h1>
		<?php echo $titulo; ?>
	</h1>
<?php

   echo anchor(base_url().'index.php/Conferencia/listarConferenciasDisponiveis', 'Conferencias Disponiveis');
   echo br();
   
   echo anchor(base_url().'index.php/Conferencia/listarMinhasConferencias', 'Minhas Conferencias');
   echo br();
   
   echo anchor(base_url().'index.php/Conferencia/telaCriarConferencias', 'Criar conferencias');
   echo br();
   
   echo anchor(base_url().'index.php/Usuario/telaEditarCadastro', 'Alterar cadastro');
   echo br();
?>



</div>
