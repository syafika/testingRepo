<?php

class TopicsController extends AppController {

	public $components = array('Session');

	public function beforeFilter()
	{
		$this->Auth->allow('index');
	}

	public function index() {

		//$this->set('framework', 'CakePHP');

		// $data = $this->Topic->find('all');
		// $this->set('topics', $data);

		$this->Topic->recursive = 0;
		$this->paginate = array('limit' => 2);
		$this->set('topics', $this->paginate());

		$this->set('categories',$this->Topic->Category->generateTreeList(null, null, null, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'));
	}

	public function add() {

		if($this->request->is('post')) {

			$this->Topic->create();

			//echo $this->Html->script('ckeditor/ckeditor');

			if(Authcomponent::user('role') ==1) {
				$this->request->data['Topic']['visible'] = 2;
			} 

			$this->request->data['Topic']['user_id'] = Authcomponent::user('id');
			
			if($this->Topic->save($this->request->data)){
				print_r($this->request->data);
				$this->Session->setFlash('The topic has been created!');
				$this->redirect('index');

			}
		}

		// $this->set('categories',$this->Topic->Category->find('list',array('fields' => array('Category.id', 'Category.name'))));

		$this->set('categories',$this->Topic->Category->generateTreeList(null, null, null, '->'));

	}

	public function view($id) {

		$data = $this->Topic->findById($id);
		$this->set('topic',$data);

	}

	public function edit($id) {

		if(Authcomponent::user('role') ==1) {

			$this->redirect('index');

		}

		$data = $this->Topic->findById($id);
		
		if ($this->request->is(array('post', 'put'))) {

			$this->Topic->id = $id;
			if ($this->Topic->save($this->request->data)) {

				$this->Session->setFlash('The topic has been edited!');
				$this->redirect('index');

			}

		}

		// $this->set('categories',$this->Topic->Category->find('list',array('fields' => array('Category.id', 'Category.name'))));

		$this->set('categories',$this->Topic->Category->generateTreeList(null, null, null, '->'));

		$this->request->data=$data;
		
	}

	public function delete($id)
	{

		if(Authcomponent::user('role') ==1) {

			$this->redirect('index');

		}

		$this->Topic->id = $id;
		
		if ($this->request->is(array('post', 'put'))) {

			//$this->Topic->id = $id;
			if ($this->Topic->delete()) {
				$this->Session->setFlash('The topic has been deleted!');
				$this->redirect('index');
			}

		}

		$this->set('categories',$this->Topic->Category->generateTreeList(null, null, null, '->'));

	}
}

?>