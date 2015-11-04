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
		foreach ($pessoas as $pessoa) {
	?>
		<table>
			<tr>
				<td>
					<?php echo $pessoa->nome." - ".$pessoa->email;?>	
				</td>
				<td>
					Excluir
				</td>
				<td>
					Editar
				</td>
			</tr>		
		</table>
	<?php	
		}
	?>
</div>