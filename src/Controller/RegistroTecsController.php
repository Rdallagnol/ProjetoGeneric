<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookmarks Controller
 *
 * @property \App\Model\Table\RegistroTecsTable $RegistroTec
 *
 * @method \App\Model\Entity\Bookmark[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistroTecsController extends AppController
{

    public function isAuthorized($user)
    {     
        return parent::isAuthorized($user);
    }
    
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'conditions' => [
                'RegistroTecs.user_id' => $this->Auth->user('users_id')
            ]
        ];
        $this->set('registroTec', $this->paginate($this->RegistroTecs)); 
    }

    /**
     * View method
     *
     * @param string|null $id Bookmark id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registroTec = $this->RegistroTecs->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('registroTec', $registroTec);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registroTec = $this->RegistroTecs->newEntity();
        if ($this->request->is('post')) {
            $registroTec = $this->RegistroTecs->patchEntity($registroTec, $this->request->getData());
            $registroTec->user_id = $this->Auth->user('id');
            if ($this->RegistroTecs->save($registroTec)) {
                $this->Flash->success('The bookmark has been saved.');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The bookmark could not be saved. Please, try again.');
        }
        $tags = $this->Bookmarks->Tags->find('list');
        $this->set(compact('bookmark', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id RegistroTec id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registroTec = $this->RegistroTecs->get($id, [
            'contain' => ['Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registroTec = $this->RegistroTecs->patchEntity($registroTec, $this->request->getData());
            $registroTec->user_id = $this->Auth->user('id');
            if ($this->RegistroTecs->save($registroTec)) {
                $this->Flash->success('The bookmark has been saved.');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The bookmark could not be saved. Please, try again.');
        }
   
        $this->set(compact('registroTec'));
    }

    /**
     * Delete method
     *
     * @param string|null $id RegistroTec id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registroTec = $this->RegistroTecs->get($id);
        if ($this->RegistroTecs->delete($registroTec)) {
            $this->Flash->success(__('The bookmark has been deleted.'));
        } else {
            $this->Flash->error(__('The bookmark could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
      
}
