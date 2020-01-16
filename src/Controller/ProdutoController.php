<?php
// src/Controller/ProdutoController.php

namespace App\Controller;

use App\Controller\AppController;

class ProdutoController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
	
    public function index()
    {
        $this->set('produto', $this->Produto->find('all'));
    }
	
	public function view($CodProduto)
    {
        $produto = $this->Produto->get($CodProduto);
        $this->set(compact('produto'));
    }
	
	public function add()
    {
        $produto = $this->Produto->newEmptyEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produto->patchEntity($produto, $this->request->getData());
            if ($this->Produto->save($produto)) {
                $this->Flash->success(__('Produto criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel criar o produto.'));
        }
        $this->set('produto', $produto);
    }
	
	public function edit($CodProduto = null)
	{
		$produto = $this->Produto->get($CodProduto);
		if ($this->request->is(['post', 'put'])) {
			$this->Produto->patchEntity($produto, $this->request->getData());
			if ($this->Produto->save($produto)) {
				$this->Flash->success(__('Produto editado com sucesso.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Não foi possivel editar o produto.'));
		}

		$this->set('produto', $produto);
	}
	
	public function delete($CodProduto)
	{
		$this->request->allowMethod(['post', 'delete']);

		$produto = $this->Produto->get($CodProduto);
		if ($this->Produto->delete($produto)) {
			$this->Flash->success(__('O produto de id: {0} foi apagado.', h($CodProduto)));
			return $this->redirect(['action' => 'index']);
		}
	}
}
?>