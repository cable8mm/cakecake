<?php
class CakecakeController extends AppController
{
    public $uses = ['User'];

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('install');
    }

    public function install()
    {
        if ($this->User->find('count') > 0) {
            return $this->redirect($this->Auth->loginAction);
        }

        if ($this->request->is('post')) {
            $this->User->create();

            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The User has been saved.'));
                return $this->redirect(['controller' => 'users', 'action' => 'index']);
            } else {
                $this->Flash->error(__('The User could not be saved. Please, try again.'));
            }
        }
    }

    public function home()
    {
    }
}
