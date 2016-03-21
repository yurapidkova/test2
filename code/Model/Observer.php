<?php
class Magetest_Dynamic_Model_Observer
{
    public function controllerActionLayoutRenderBeforeCatalogProductView($observer) {
        if(($configValue = Mage::getStoreConfig('magetest_dynamic/dynamic_value/value'))
            && ($configCode = Mage::getStoreConfig('magetest_dynamic/dynamic_value/code'))){
            Mage::registry('current_product')->setData($configCode, $configValue);
        }
    }
}