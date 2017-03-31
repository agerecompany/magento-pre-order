<?php

/**
 * Robots default helper
 *
 * @category Agere
 * @package Agere_PreOrder
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 20.04.14 14:54
 */
class Agere_PreOrder_Helper_Data extends Mage_Core_Helper_Abstract
{
    const SECTION_NAME = 'agere_preOrder';

    public function getAddToCartTemplate()
    {
        $mode = Mage::getStoreConfig('agere_preOrder/settings/mode');

        $template = '';
        if ('simple' === $mode) {
            $template = 'agere/catalog/product/view/addtocart.phtml';
        } elseif ('advanced' === $mode) {
            Mage::throwException(sprintf('Mode "%s" not yet implemented', $mode));
        } else {
            Mage::throwException(sprintf('Unresolved "%s" mode', $mode));
        }

        return $template;
    }
}
