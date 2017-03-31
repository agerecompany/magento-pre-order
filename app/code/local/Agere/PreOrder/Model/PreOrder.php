<?php

/**
 * Pre Order model
 *
 * @category Agere
 * @package Agere_PreOrder
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 30.03.17 12:28
 */
class Agere_PreOrder_Model_PreOrder extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('agere_preOrder/preOrder');
    }
}