<?php

        namespace App\Controllers;

        //RECURSOS DO PROJETO
        use MF\Controller\Action;
        use MF\Model\Container;

        //RECURSOS DO MODEL
        use App\Models\Produto;
        use App\Models\Info;

        class IndexController extends Action {

                public function index() {

                        $produto  = Container:: getModel('Produto');
                        $produtos = $produto->getProdutos();
                        $this->view->dados = $produtos;

                        $this->render('index', 'layout1');
                }

                public function sobreNos() {

                        $info  = Container:: getModel('Info');
                        $infos = $info->getInfo();
                        $this->view->dados = $infos;

                        $this->render('sobreNos', 'layout2');
                }

        }


?>