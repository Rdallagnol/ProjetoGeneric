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



class ClientesController extends AppController
{
    public function isAuthorized($user)
    {
     
        $id = $this->request->getParam('pass.0');
        
        $clientes = $this->Clientes->get($id);
        if ($clientes->user_id == $user['id']) {
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
        $this->set('clientes', $this->Clientes->find('all', array( 'conditions' => [
                                                                'Clientes.user_id' => $this->Auth->user('user_id')] )));
    }
    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Users'],
            'conditions' => [
                'Clientes.user_id' => $this->Auth->user('user_id')
            ]
        ]);
               
        $this->set('cliente', $cliente);
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            $cliente->user_id = $this->Auth->user('user_id');
            $cliente->status = 1;
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success('Cliente registrado com sucesso.');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Não foi possível registrar cliente.');
        }
        $this->set(compact('cliente'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id,[   
            'conditions' => [
                'Clientes.user_id' => $this->Auth->user('user_id')
            ]
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            $cliente->user_id = $this->Auth->user('user_id');
            
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success('Cliente alterado com sucesso.');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Não foi possível registrar Cliente.');
        }
        
        $this->set(compact('cliente'));
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

    }
    
    
    
    
}