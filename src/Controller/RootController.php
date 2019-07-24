<?php
namespace App\Controller;

use App\Controller\AppController;
class RootController extends AppController
{
    public function index()
    {
      $this->autoRender = false;
      $this->loadModel('Test');
      $result = $this->Test->find()
	->all();
      debug($result);
    }
}

