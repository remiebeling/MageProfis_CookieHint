<?php
 
class MageProfis_CookieHint_IndexController extends Mage_Core_Controller_Front_Action
{
    public function setcookieAction()
    {
        $cookie = Mage::getSingleton('core/cookie');        
        $cookie->set('cookiehint', '1' ,'', '/');    
        return $this;
    }
}
 
?>
