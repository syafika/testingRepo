<?php

class CategoriesController extends AppController {

    public $components = array('Session');

    public function beforeFilter()
    {
        $this->Auth->allow('index');
    }

    var $name = 'Categories';   
              
    public function index() {

        $categories = $this->Category->generateTreeList(null, null, null, '&nbsp;&nbsp;&nbsp;');
        $this->set(compact('categories')); 

    } 

    public function add() {

        if (!empty($this -> data) ) {

            $this->Category->save($this -> data);
            $this->Session->setFlash('A new category has been added');
            $this->redirect(array('controller' => 'topics','action' => 'index'));

        } else {

            $parents[0] = "Select category";
            $categories = $this->Category->generateTreeList(null,null,null," - ");
            if($categories) {

                foreach ($categories as $key=>$value)
                $parents[$key] = $value;

        }

            $this->set(compact('parents'));

        }

    }

    public function edit($id = null) {

        if(Authcomponent::user('role') ==1) {

            $this->redirect('index');

        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Category->id = $id;
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Category has been save');
                $this->redirect(array('controller' => 'topics','action' => 'index'));
            } else {
                $this->Session->setFlash('Error saving Category');
            }

        } else {

            if ($id != null) {
                $this->request->data = $this->Category->findById($id);
                $categories = $this->Category->generateTreeList(null,null,null," - ");

                foreach ($categories as $key=>$value)
                    $parents[$key] = $value;
                    $this->set(compact('parents'));

                if (empty($this->request->data)) {
                    $this->Session->setFlash('category was not found');
                    $this->redirect(array('controller' => 'topics','action'=> 'index'));
                }
            }

        }
    }

    public function delete($id) {

        if(Authcomponent::user('role') ==1) {

            $this->redirect('index');

        }

        $this->Category->id = $id;
        
        if ($this->request->is(array('post', 'put'))) {

            //$this->Topic->id = $id;
            if ($this->Category->delete()) {
                $this->Session->setFlash('The category has been deleted!');
                $this->redirect(array('controller' => 'topics','action'=> 'index'));
            }

        }

    }
}