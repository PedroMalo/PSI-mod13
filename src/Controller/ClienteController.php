<?php
// src/Controller/ClienteController.php

namespace App\Controller;

use App\Controller\AppController;

class ClienteController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
	
    public function index()
    {
        $this->set('cliente', $this->Cliente->find('all'));
    }
	
	public function view($NIF)
    {
        $cliente = $this->Cliente->get($NIF);
        $this->set(compact('cliente'));
    }
	
	public function add()
    {
        $cliente = $this->Cliente->newEmptyEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Cliente->patchEntity($cliente, $this->request->getData());
            if ($this->Cliente->save($cliente)) {
                $this->Flash->success(__('Cliente criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel adicionar o cliente.'));
        }
        $this->set('cliente', $cliente);
    }
	
	public function edit($NIF = null)
	{
		$cliente = $this->Cliente->get($NIF);
		if ($this->request->is(['post', 'put'])) {
			$this->Cliente->patchEntity($cliente, $this->request->getData());
			if ($this->Cliente->save($cliente)) {
				$this->Flash->success(__('Cliente editado com sucesso.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Não foi possivel editar o cliente.'));
		}

		$this->set('cliente', $cliente);
	}
	
	public function delete($NIF)
	{
		$this->request->allowMethod(['post', 'delete']);

		$cliente = $this->Cliente->get($NIF);
		if ($this->Cliente->delete($cliente)) {
			$this->Flash->success(__('O cliente de id: {0} foi apagado.', h($NIF)));
			return $this->redirect(['action' => 'index']);
		}
	}
}
?>