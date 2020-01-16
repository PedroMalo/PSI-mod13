<?php
// src/Controller/EmpregadoController.php

namespace App\Controller;

use App\Controller\AppController;

class EmpregadoController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
	
    public function index()
    {
        $this->set('empregado', $this->Empregado->find('all'));
    }
	
	public function view($id_empregado)
    {
        $empregado = $this->Empregado->get($id_empregado);
        $this->set(compact('empregado'));
    }
	
	public function add()
    {
        $empregado = $this->Empregado->newEmptyEntity();
        if ($this->request->is('post')) {
            $empregado = $this->Empregado->patchEntity($empregado, $this->request->getData());
            if ($this->Empregado->save($empregado)) {
                $this->Flash->success(__('Empregado criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel criar o empregado.'));
        }
        $this->set('empregado', $empregado);
    }
	
	public function edit($Id_empregado = null)
	{
		$empregado = $this->Empregado->get($Id_empregado);
		if ($this->request->is(['post', 'put'])) {
			$this->Empregado->patchEntity($empregado, $this->request->getData());
			if ($this->Empregado->save($empregado)) {
				$this->Flash->success(__('Empregado editado com sucesso.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Não foi possivel editar o empregado.'));
		}

		$this->set('empregado', $empregado);
	}
	
	public function delete($Id_empregado)
	{
		$this->request->allowMethod(['post', 'delete']);

		$empregado = $this->Empregado->get($Id_empregado);
		if ($this->Empregado->delete($empregado)) {
			$this->Flash->success(__('O empregado de id: {0} foi apagado.', h($Id_empregado)));
			return $this->redirect(['action' => 'index']);
		}
	}
}
?>