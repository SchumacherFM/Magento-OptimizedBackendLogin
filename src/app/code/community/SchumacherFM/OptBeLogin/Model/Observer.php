<?php
/**
 * @author kiri
 * @date   6/3/13
 */

class SchumacherFM_OptBeLogin_Model_Observer
{

    public function setAdminLoginTemplate(Varien_Event_Observer $observer)
    {
        /** @var Mage_Adminhtml_Block_Template $block */
        $block = $observer->getEvent()->getBlock();

        if (!$block instanceof Mage_Adminhtml_Block_Template || $block->getTemplate() !== 'login.phtml') {
            return null;
        }

        /** @var SchumacherFM_OptBeLogin_Helper_Data $helper */
        $helper = Mage::helper('optbelogin');

        $templatePath = array(
            'optbelogin'
        );
        if ($helper->isMinimalLogin()) {
            $templatePath[] = 'login-min.phtml';
        } else {
            $templatePath[] = $helper->getMagentoEdition();
            $templatePath[] = $helper->getMagentoVersion();
            $templatePath[] = 'login.phtml';
        }

        $block
            ->setTemplate(implode(DS, $templatePath))
            ->setAutoComplete($helper->getAutoComplete())
            ->setDisableForgotPasswordLink($helper->getDisableForgotPasswordLink())
            ->setDisableLogo($helper->getDisableLogo())
            ->setFormColor($helper->getFormColor());

    }

}
