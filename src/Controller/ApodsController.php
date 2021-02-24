<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Apods Controller
 *
 * @method \App\Model\Entity\Apod[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApodsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $apods = $this->paginate($this->Apods);

        $this->set(compact('apods'));

        $this->viewBuilder()->setOption('serialize', ['apods']);

    }


    /**
     * View method
     *
     * @param string|null $id Apod id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $apod = $this->Apods->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('apod'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $apod = $this->Apods->newEmptyEntity();
        if ($this->request->is('post')) {
            $apod = $this->Apods->patchEntity($apod, $this->request->getData());
            if ($this->Apods->save($apod)) {
                $this->Flash->success(__('The apod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The apod could not be saved. Please, try again.'));
        }
        $this->set(compact('apod'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Apod id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $apod = $this->Apods->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $apod = $this->Apods->patchEntity($apod, $this->request->getData());
            if ($this->Apods->save($apod)) {
                $this->Flash->success(__('The apod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The apod could not be saved. Please, try again.'));
        }
        $this->set(compact('apod'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Apod id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $apod = $this->Apods->get($id);
        if ($this->Apods->delete($apod)) {
            $this->Flash->success(__('The apod has been deleted.'));
        } else {
            $this->Flash->error(__('The apod could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
