<h3> Lista de Usuários </h3>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Ações</th>
		<tr/>
	</thead>
	<tbody>
		<?php foreach($usuarios as $usuario): ?>
			<tr>
				<th> <?php echo $usuario->id; ?> </th>
				<th> <?php echo $usuario->nome; ?> </th>
				<th> <?php echo $usuario->email; ?> </th>
				<th> 
					<?php 
					echo $this->Html->link(('Editar'), ['action' => 'edit', $usuario->id])
					?> 
					<?php
					echo $this->Form->postLink(('Apagar'), ['action' => 'delete', $usuario->id], ['confirm' => __('Realmente quer apagar o usuário?', $usuario->id)]);
					?>

				</th>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php

echo $this->Html->link( ('Cadastrar'), ['action'=>'add']);

//var_dump($usuarios);