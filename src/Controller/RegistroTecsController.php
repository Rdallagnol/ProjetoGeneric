<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Model\Entity\RegistroTec;
use Cake\Core\Configure;
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
     
        $id = $this->request->getParam('pass.0');
        
        $registroTec = $this->RegistroTecs->get($id);
        if ($registroTec->user_id == $user['id']) {
            return true;
        }
        return parent::isAuthorized($user);
    }
    
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        /* 
         * SE FICAR PESADO ARRUMAR PAGINAÇÃO
         * $this->paginate = [
            'conditions' => [
                'RegistroTecs.user_id' => $this->Auth->user('user_id')
            ]
        ];
         */
        $this->set('registroTec', $this->RegistroTecs->find('all', array( 'conditions' => [
                                                                'RegistroTecs.user_id' => $this->Auth->user('user_id')] )));
    }
    /**
     * View method
     *
     * @param string|null $id RegistroTec id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      
        $registroTec = $this->RegistroTecs->get($id, [
            'contain' => ['Users'],
            'conditions' => [
                'RegistroTecs.user_id' => $this->Auth->user('user_id')
            ]
        ]);
        
       
        
        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'portrait',
                'filename' => 'RegistroTec_' . $id . '.pdf'
            ]
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
            $registroTec->user_id = $this->Auth->user('user_id');
            if ($this->RegistroTecs->save($registroTec)) {
                $this->Flash->success('Relatório técnico registrado com sucesso.');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Não foi possível registrar Relatório.');
        }
        $this->set(compact('registroTec'));
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
        $registroTec = $this->RegistroTecs->get($id,[   
            'conditions' => [
                'RegistroTecs.user_id' => $this->Auth->user('user_id')
            ]
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registroTec = $this->RegistroTecs->patchEntity($registroTec, $this->request->getData());
            $registroTec->user_id = $this->Auth->user('user_id');
            
            if ($this->RegistroTecs->save($registroTec)) {
                $this->Flash->success('Relatório técnico alterado com sucesso.');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Não foi possível registrar Relatório.');
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
        
        $registroTec = $this->RegistroTecs->get($id,[
            'conditions' => [
                'RegistroTecs.user_id' => $this->Auth->user('user_id')
            ]
        ]);
        if ($this->RegistroTecs->delete($registroTec)) {
            $this->Flash->success(__('Relatório técnico removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível remover o Relatório.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    
    
    
}