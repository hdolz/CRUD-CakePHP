<?php

namespace App\Controller;

use App\Controller\AppController;

class UsuariosController extends AppController {

	public function index(){
		//$usuario = "Henrique";
		//$this->set(['usuarios' => $usuario]);
		$usuarios = $this->Usuarios->find()->all();
		//$this->set(['usuarios' => $usuarios]);
		$this->set(compact('usuarios'));
	}

	public function add(){

		$user = $this->Usuarios->newEntity();

		if($this->request->is('post')){
			$user = $this->Usuarios->patchEntity($user,$this->request->data);

			if($this->Usuarios->save($user)){
				$this->Flash->success('Usuário cadastrado com sucesso!');
				return $this->redirect(['action'=>'index']);
			}else{
				$this->Flash->error('Erro ao cadastrar usuário');
			}
		}
		$this->set(compact('user'));
	}

	public function edit($id = null)
	{
		$user = $this->Usuarios->get($id);
		if($this->request->is(['post', 'put'])){
			$user = $this->Usuarios->patchEntity($user, $this->request->data);
			if($this->Usuarios->save($user)){
				$this->Flash->success('usuário editado com sucesso');
				return $this->redirect(['action' => 'index']);
			}else{
				$this->Flash->error('usuário não foi editado com sucesso');
			}

		}

		$this->set(compact('user'));
	}

	public function delete($id = null) {
		$this->request->allowMethod(['post', 'delete']);
		$user = $this->Usuarios->get($id);
		if($this->Usuarios->delete($user)){
			$this->Flash->success(('Usuário apagado com sucesso'));
		}else{
			$this->Flash->error(('O Usuário não foi apagado com sucesso'));
		}
		return $this->redirect(['action' => 'index']);
	}


}