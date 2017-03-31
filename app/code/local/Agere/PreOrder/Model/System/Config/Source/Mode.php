<?php

/**
 * Enter description here...
 *
 * @category Agere
 * @package Agere_<package>
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 30.03.2017 13:17
 */
class Agere_PreOrder_Model_System_Config_Source_Mode
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'simple', 'label' => Mage::helper('adminhtml')->__('Simple')),
            array('value' => 'advanced', 'label' => Mage::helper('adminhtml')->__('Advanced')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'simple' => Mage::helper('adminhtml')->__('Simple'),
            'advanced' => Mage::helper('adminhtml')->__('Advanced')
        );
    }
}