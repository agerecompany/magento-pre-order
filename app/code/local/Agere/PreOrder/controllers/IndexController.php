<?php
/**
 * Enter description here...
 *
 * @category Agere
 * @package Agere_<package>
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 31.01.14 15:45
 */

class Agere_PreOrder_IndexController extends Mage_Core_Controller_Front_Action {

	public function getFormAction() {
		$content = $this->getLayout()
            ->createBlock('core/template')
            ->setTemplate('agere/service/pre-order/form.phtml')
            ->toHtml();

		$this->getResponse()->setBody($content);
	}

	public function createAction() {
		if (($post = $this->getRequest()->getPost()) && $this->checkSimpleForm()) {

			/** @var Agere_Service_Helper_Mail $mailHelper */
			$mailHelper = Mage::helper('agere_service/mail');
			//$captcha = ($captcha = $this->getRequest()->getParam('captcha')) ? $captcha : '';
			//if (!$dataHelper->checkCaptcha($captcha)) {
			//	$this->_redirectUrl('/');
			//	return false;
			//}

			$mailHelper->sendSimpleMail($post, Agere_PreOrder_Helper_Data::SECTION_NAME);
			$this->_redirect('');
		}
	}

    protected function checkSimpleForm() {
        $post = $this->getRequest()->getPost();

        $isValid = true;
        if(!isset($post['name']) || !$post['name']) {
            Mage::getSingleton('core/session')->addError('Имя должно быть заполнено');
            $isValid = false;
        }

        if(!isset($post['email']) || !$post['email']) {
            Mage::getSingleton('core/session')->addError('Email должен быть заполнен');
            $isValid = false;
        }

        return $isValid;
    }

}