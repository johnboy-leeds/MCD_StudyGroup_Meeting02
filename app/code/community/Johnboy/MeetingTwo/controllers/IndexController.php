<?php

class Johnboy_MeetingTwo_IndexController extends Mage_Core_Controller_Front_Action {
    
    /**
     * Index action for exercise three
     * 
     */
    public function indexAction(){
        
        $this->getResponse()->setBody( $this->getFullActionName() );
    }
    
    
    
}