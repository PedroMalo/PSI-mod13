<?php
// src/Controller/FornecedorController.php

namespace App\Controller;

use App\Controller\AppController;

class FornecedorController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
	
    public function index()
    {
        $this->set('fornecedor', $this->Fornecedor->find('all'));
    }
	
	public function view($Id_fornecedor)
    {
        $fornecedor = $this->Fornecedor->get($Id_fornecedor);
        $this->set(compact('fornecedor'));
    }
	
	public function add()
    {
        $fornecedor = $this->Fornecedor->newEmptyEntity();
        if ($this->request->is('post')) {
            $fornecedor = $this->Fornecedor->patchEntity($fornecedor, $this->request->getData());
            if ($this->Fornecedor->save($fornecedor)) {
                $this->Flash->success(__('Fornecedor criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel criar o fornecedor.'));
        }
        $this->set('fornecedor', $fornecedor);
    }
	
	public function edit($Id_fornecedor = null)
	{
		$fornecedor = $this->Fornecedor->get($Id_fornecedor);
		if ($this->request->is(['post', 'put'])) {
			$this->Fornecedor->patchEntity($fornecedor, $this->request->getData());
			if ($this->Fornecedor->save($fornecedor)) {
				$this->Flash->success(__('Fornecedor editado com sucesso.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Não foi possivel editar o Fornecedor.'));
		}

		$this->set('fornecedor', $fornecedor);
	}
	
	public function delete($Id_fornecedor)
	{
		$this->request->allowMethod(['post', 'delete']);

		$fornecedor = $this->Fornecedor->get($Id_fornecedor);
		if ($this->Fornecedor->delete($fornecedor)) {
			$this->Flash->success(__('O fornecedor de id: {0} foi apagado.', h($Id_fornecedor)));
			return $this->redirect(['action' => 'index']);
		}
	}
}
?>