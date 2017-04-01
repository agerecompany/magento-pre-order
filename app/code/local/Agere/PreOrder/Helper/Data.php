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

        //Mage::app()->getLayout()->createBlock('page/html_header');
        //$this->getLayout()->getBlock('root')->getTemplate();
        //product.info.addtocart

        //Mage::app()->getLayout()->createBlock('page/html_header');
        //$root = Mage::app()->getLayout()->getBlock('root')->getTemplate();
        //$addtocart = Mage::app()->getLayout()->getBlock('product.info.addtocart')->getTemplate();
        //product.info.addtocart


        $mode = Mage::getStoreConfig('agere_preOrder/settings/mode');
        $allowCategoryIds = explode(',', Mage::getStoreConfig('agere_preOrder/settings/categories'));

        $product = Mage::registry('current_product');
        $categoryIds = $product->getCategoryIds();

        $template = '';
        if (array_intersect($allowCategoryIds, $categoryIds)) {
            if ('simple' === $mode) {
                $template = 'agere/catalog/product/view/addtocart.phtml';
            } elseif ('advanced' === $mode) {
                Mage::throwException(sprintf('Mode "%s" not yet implemented', $mode));
            }
        } else {
            //Mage::throwException(sprintf('Unresolved "%s" mode', $mode));
            // return default value from layout
            $template = Mage::app()->getLayout()->getBlock('product.info.addtocart')->getTemplate();
        }

        return $template;
    }
}
