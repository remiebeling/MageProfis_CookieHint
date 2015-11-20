<?php
$installer = $this;
/* @var MageProfis_Cookiehint_Model_Resource_Setup $installer */
$installer->startSetup();
$this->addStaticBlock('Hinweistext cookies', 'cookie_hint', 'Wir verwenden in unserem Shop Cookies. Wenn Sie auf der Seite weitersurfen stimmen Sie der <a href="{{store_url="datenschutz"}}">Cookie-Nutzung</a> zu.', $is_active = 1, $stores = null);
$installer->endSetup();