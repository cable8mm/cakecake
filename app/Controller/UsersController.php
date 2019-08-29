<?php

class UsersController extends AppController
{
    public $scaffold;

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('install');
    }

    public function login()
    {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }

            return $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
