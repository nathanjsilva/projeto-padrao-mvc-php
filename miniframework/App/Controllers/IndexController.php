<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController  extends Action{

	public function index() {
        $this->view->dados = array('sofa', 'cadeira', 'cama', 'mesa');
        $this-> render("index");
	}

	public function sobreNos() {
        $this->view->dados = array('sofa', 'cadeira', 'cama', 'mesa');
        $this-> render("index");
	}

}


?>