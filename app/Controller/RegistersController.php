<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistersController
 *
 * @author Administrator
 */
class RegistersController extends AppController {
    //put your code here
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
    var $uses = array('Register','Option','Checkbox');
    public function index() {
        $this->set('registers', $this->Register->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Register->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('registers', $registers);
    }

    
 
    public function add() {
        //debug($this->request->data);
        $options1 = $this->Option->getOptionGroups('1');
        $this->set(compact('options1'));
        
        $options2 = $this->Option->getOptionGroups('2');
        $this->set(compact('options2'));
        
        $options3 = $this->Option->getOptionGroups('3');
        $this->set(compact('options3'));
        
        $options4 = $this->Option->getOptionGroups('4');
        $this->set(compact('options4'));
        
        $this->set('checkboxs', $this->Checkbox->find('all'));
        $this->set(compact('checkboxs'));
        
        $checkboxs1 = $this->Checkbox->getCheckboxGroups('1');
        $this->set(compact('checkboxs1'));
        
        $checkboxs2 = $this->Checkbox->getCheckboxGroups('2');
        $this->set(compact('checkboxs2'));
        
        $checkboxs3 = $this->Checkbox->getCheckboxGroups('3');
        $this->set(compact('checkboxs3'));
        $checkboxs4 = $this->Checkbox->getCheckboxGroups('4');
        $this->set(compact('checkboxs4'));
        
        $checkboxs5 = $this->Checkbox->getCheckboxGroups('5');
        $this->set(compact('checkboxs5'));
        
        $checkboxs6 = $this->Checkbox->getCheckboxGroups('6');
        $this->set(compact('checkboxs6'));
        $checkboxs7 = $this->Checkbox->getCheckboxGroups('7');
        $this->set(compact('checkboxs7'));
        
        $checkboxs8 = $this->Checkbox->getCheckboxGroups('8');
        $this->set(compact('checkboxs8'));
        
    
        
        $this->Register->create();
        $this->Option->create();
        $this->Checkbox->create();
        
       if ($this->request->is('post')) {
           
            $data = $this->request->data;
            if(!empty($data['Register']['gyoshu']))
            {
                $biens=$data['Register']['gyoshu'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['gyoshu']=$noi;
            }
            else {
                 
            }
           
            if(!empty($data['Register']['firstank01']))
            {
                $biens=$data['Register']['firstank01'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank01']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank04']))
            {
                $biens=$data['Register']['firstank04'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank04']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank06']))
            {
                $biens=$data['Register']['firstank06'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank06']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank09']))
            {
                $biens=$data['Register']['firstank09'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank09']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank12']))
            {
                $biens=$data['Register']['firstank12'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank12']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank28']))
            {
                $biens=$data['Register']['firstank28'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank28']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank30']))
            {
                $biens=$data['Register']['firstank30'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank30']=$noi;
            }
            else {
                 
            }
            
           // debug($data);
           // die;
       
            if ($this->Register->save($data)
                    ) 
            {
               
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'add2'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
             
        }
    }
    
    
    
     public function add2() {
        //debug($this->request->data);
        $options1 = $this->Option->getOptionGroups('1');
        $this->set(compact('options1'));
        
        $options2 = $this->Option->getOptionGroups('2');
        $this->set(compact('options2'));
        
        $options3 = $this->Option->getOptionGroups('3');
        $this->set(compact('options3'));
        
        $options4 = $this->Option->getOptionGroups('4');
        $this->set(compact('options4'));
        
        $this->set('checkboxs', $this->Checkbox->find('all'));
        $this->set(compact('checkboxs'));
        
        $checkboxs1 = $this->Checkbox->getCheckboxGroups('1');
        $this->set(compact('checkboxs1'));
        
        $checkboxs2 = $this->Checkbox->getCheckboxGroups('2');
        $this->set(compact('checkboxs2'));
        
        $checkboxs3 = $this->Checkbox->getCheckboxGroups('3');
        $this->set(compact('checkboxs3'));
        $checkboxs4 = $this->Checkbox->getCheckboxGroups('4');
        $this->set(compact('checkboxs4'));
        
        $checkboxs5 = $this->Checkbox->getCheckboxGroups('5');
        $this->set(compact('checkboxs5'));
        
        $checkboxs6 = $this->Checkbox->getCheckboxGroups('6');
        $this->set(compact('checkboxs6'));
        $checkboxs7 = $this->Checkbox->getCheckboxGroups('7');
        $this->set(compact('checkboxs7'));
        
        $checkboxs8 = $this->Checkbox->getCheckboxGroups('8');
        $this->set(compact('checkboxs8'));

        //code is here, this below
        $title_top='0';
        $this->set(compact('title_top'));
        $this->Register->create();
        $this->Option->create();
        $this->Checkbox->create();
        
       if ($this->request->is('post')) {
           
          
            $data = $this->request->data;
            if(!empty($data['Register']['gyoshu']))
            {
                $biens=$data['Register']['gyoshu'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['gyoshu']=$noi;
            }
            else {
                 
            }
           
            if(!empty($data['Register']['firstank01']))
            {
                $biens=$data['Register']['firstank01'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank01']=$noi;
            }
            else {
                 
            }
            
            if(!empty($data['Register']['firstank04']))
            {
                $biens=$data['Register']['firstank04'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank04']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank06']))
            {
                $biens=$data['Register']['firstank06'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank06']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank09']))
            {
                $biens=$data['Register']['firstank09'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank09']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank12']))
            {
                $biens=$data['Register']['firstank12'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank12']=$noi;
            }
            else {
                 
            }
            
            if(!empty($data['Register']['firstank28']))
            {
                $biens=$data['Register']['firstank28'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank28']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank30']))
            {
                $biens=$data['Register']['firstank30'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank30']=$noi;
            }
            else {
                 
            }
            
           
//            debug($data['Register']);
           
            $this->Register->create();
            if ($this->Register->save($data['Register'])) 
            {
                debug($data['Register']);
               
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'add2'));
            }else{
            //    debug($this->Register->validationErrors());
            }
            
            $this->Session->setFlash(__('Unable to add your post.'));
             
        }
    }
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Register->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Register->id = $id;
            if ($this->Register->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Register->delete($id)) {
            $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
}
