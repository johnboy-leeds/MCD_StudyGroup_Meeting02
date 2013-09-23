<?php
require_once 'Mage/Customer/controllers/AccountController.php';
class Johnboy_MeetingTwo_Customer_AccountController extends Mage_Customer_AccountController{
    
    /**
     * Setting the before_auth_url to a category page as per exercise four
     */
    public function loginAction()
    {
        $this->_getSession()->setBeforeAuthUrl(Mage::getModel('catalog/category')->load(3)->getUrl());
        
        if ($this->_getSession()->isLoggedIn()) {
            $this->_redirect('*/*/');
            return;
        }
        $this->getResponse()->setHeader('Login-Required', 'true');
        $this->loadLayout();
        $this->_initLayoutMessages('customer/session');
        $this->_initLayoutMessages('catalog/session');
        $this->renderLayout();
    }
}