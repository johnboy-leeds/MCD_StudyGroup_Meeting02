MCD_StudyGroup_Meeting02
========================

Exercises from meeting two; Basics &amp; Request Flow.

1. Rewrite sales/order model to add the customer group model as an email template variable in the *sendNewOrderEmail()* method, so the group code can be added to the email using *{{ var customer_group.getCode()}}*     
Solution in   
[app/code/community/Johnboy/MeetingTwo/Model/Sales/Order.php](./app/code/community/Johnboy/MeetingTwo/Model/Sales/Order.php)   
[app/code/community/Johnboy/MeetingTwo/etc/config.xml](./app/code/community/Johnboy/MeetingTwo/etc/config.xml)    

2. Create an observer that redirects the visitor to the base URL if the CMS home page URL key is accessed directly (i.e. /home -> / )  
Solution in  
[app/code/community/Johnboy/MeetingTwo/Model/Observer.php](./app/code/community/Johnboy/MeetingTwo/Model/Observer.php)  
[app/code/community/Johnboy/MeetingTwo/etc/config.xml](./app/code/community/Johnboy/MeetingTwo/etc/config.xml)

3. Add a new frontend route and create an index controller and an index action that set the return value of *$this->getFullActionName()* to the response body.  
Solution in 
[app/code/community/Johnboy/MeetingTwo/controllers/IndexController.php](./app/code/community/Johnboy/MeetingTwo/controllers/IndexController.php)  
[app/code/community/Johnboy/MeetingTwo/etc/config.xml](./app/code/community/Johnboy/MeetingTwo/etc/config.xml)

4. Rewrite the *Mage_Customer_AccountController::loginAction()* method to set a category view of your choice as the *before_auth_url*:  
Solution in   
[app/code/community/Johnboy/MeetingTwo/controllers/Customer/AccountController.php](./app/code/community/Johnboy/MeetingTwo/controllers/Customer/AccountController.php)  
[app/code/community/Johnboy/MeetingTwo/etc/config.xml](./app/code/community/Johnboy/MeetingTwo/etc/config.xml)

5. Create a dynamic rewrite of the *payment/data* helper only if the Magento is older than version 1.4, and if the *ccsave* payment option is enabled for the current store.