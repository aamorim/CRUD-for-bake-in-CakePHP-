<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Noticia Controller
 *
 * @property \App\Model\Table\NoticiaTable $Noticia
 */
class NoticiaController extends AppController
{


    public $paginate = [
        'limit' => 5,
    ];
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $noticia = $this->paginate($this->Noticia);

        $this->set(compact('noticia'));
        $this->set('_serialize', ['noticia']);
    }

    /**
     * View method
     *
     * @param string|null $id Noticium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $noticium = $this->Noticia->get($id, [
            'contain' => []
        ]);

        $this->set('noticium', $noticium);
        $this->set('_serialize', ['noticium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $noticium = $this->Noticia->newEntity();
        if ($this->request->is('post')) {
            $noticium = $this->Noticia->patchEntity($noticium, $this->request->data);
            if ($this->Noticia->save($noticium)) {
                $this->Flash->success(__('The noticium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The noticium could not be saved. Please, try again.'));
        }
        $this->set(compact('noticium'));
        $this->set('_serialize', ['noticium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Noticium id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $noticium = $this->Noticia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $noticium = $this->Noticia->patchEntity($noticium, $this->request->data);
            if ($this->Noticia->save($noticium)) {
                $this->Flash->success(__('The noticium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The noticium could not be saved. Please, try again.'));
        }
        $this->set(compact('noticium'));
        $this->set('_serialize', ['noticium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Noticium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noticium = $this->Noticia->get($id);
        if ($this->Noticia->delete($noticium)) {
            $this->Flash->success(__('The noticium has been deleted.'));
        } else {
            $this->Flash->error(__('The noticium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
