<h3> Cadastrar Usuário </h3>

<?php
echo $this->Form->create($user);
echo $this->Form->input('nome');
echo $this->Form->input('email');
echo $this->Form->button('Cadastrar');
echo $this->Form->end();
echo $this->Html->link( ('Voltar'), ['action'=>'index']);