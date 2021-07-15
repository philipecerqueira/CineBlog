<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    public $components = array(
        'Flash',
        'Auth' => array(
        'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
        'logoutRedirect' => array('controller' => 'pages', 'action' => 'display','home')
        ),
        'authorize' => array('Controller')
    );

    public function isAuthorized($user) {
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true; // Admin pode acessar todas actions
        }
        return false; // Os outros usuários não podem
        }
        

    function beforeFilter() {
        $this->Auth->allow('index', 'view');
    }   

}
