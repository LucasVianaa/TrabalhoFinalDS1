<div id='container'>
	<h1>
		<?php echo $titulo; ?>
	</h1>
<?php

   echo anchor(base_url().'index.php/Conferencia/telaConferenciasDisponiveis', 'Conferencias Disponiveis');
   echo br();
   
   echo anchor(base_url().'index.php/Conferencia/minhasConferencias?id='.$this->session->all_userdata()['codigo'], 'Minhas Conferencias');
   echo br();
   
   echo anchor(base_url().'index.php/Conferencia/telaCriarConferencias?id='.$this->session->all_userdata()['codigo'], 'Criar conferencias');
   echo br();
   
   echo anchor(base_url().'index.php/Usuario/telaEditarCadastro?id='.$this->session->all_userdata()['codigo'], 'Alterar cadastro');
   echo br();
?>



</div>
