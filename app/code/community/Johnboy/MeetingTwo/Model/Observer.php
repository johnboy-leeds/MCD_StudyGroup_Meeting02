<?php

class Johnboy_MeetingTwo_Model_Observer {
    
    /**
     * Checks if the accessed cms page is the homepage, if it is and it is not being accessed by the index action then redirect it
     * @param Varien_Event_Observer $observer
     * @return \Johnboy_MeetingTwo_Model_Observer
     */
    public function checkHomeUrl($observer){
        // check if the homepage is using the CMS module
        if(Mage::getStoreConfig('web/default/front') != "cms")
            return $this;
        
        $action = $observer->getControllerAction();
        $uri = $action->getRequest()->getRequestUri();
        
        // If it is already the cms index action then everything is fine
        if($action->getFullActionName() == "cms_index_index")
            return $this;
        
        // Get the Id of the CMS page currently set as the home page
        $homePage = Mage::getStoreConfig(Mage_Cms_Helper_Page::XML_PATH_HOME_PAGE);
        $homePageId = Mage::getModel('cms/page')->load($homePage, 'identifier')->getId();
        
        // Get the Id of the CMS page to be loaded
        $pageId = Mage::app()->getRequest()->getParam('page_id', Mage::app()->getRequest()->getParam('id', false));
        
        // If the same then redirect to the homepage
        if($pageId && $homePageId == $homePageId)
        {
            $action->getResponse()->setRedirect(Mage::getBaseUrl(), 301);
            $action->getRequest()->setDispatched(true); 
        }        
        return $this;
        
    }
}
