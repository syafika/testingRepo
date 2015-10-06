<?php

class NodesController extends AppController {

    function index() {
        $nodelist = $this->Node->generatetreelist(null,null,null," - ");
        $this->set(compact('nodelist'));
    }

    function add() {
        if (!empty($this->data)) {
            $this->Node->save($this->data);
            $this->redirect(array('action'=>'index'));
        } else {
            $parents[0] = "[ No Parent ]";
            $nodelist = $this->Node->generatetreelist(null,null,null," - ");
            if($nodelist) {
                foreach ($nodelist as $key=>$value)
                    $parents[$key] = $value;
            }
            $this->set(compact('parents'));
        }
    }
}

?>