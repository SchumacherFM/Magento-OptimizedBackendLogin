<?php
/**
 * @category    SchumacherFM_OptBeLogin
 * @package     Model
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class SchumacherFM_OptBeLogin_Model_Observer
{

    public function setAdminLoginTemplate(Varien_Event_Observer $observer)
    {
        /** @var Mage_Adminhtml_Block_Template $block */
        $block = $observer->getEvent()->getBlock();

        $template = $this->_getTemplateName($block);

        if (!$block instanceof Mage_Adminhtml_Block_Template || !$template) {
            return null;
        }

        $block->setTemplate($this->_getTemplatePath($template));

    }

    /**
     * @param string $type
     *
     * @return string
     */
    protected function _getTemplatePath($type)
    {
        $templatePath = array(
            'optbelogin'
        );

        if (Mage::helper('optbelogin')->isMinimalLogin()) {
            $templatePath[] = 'minimal';
            $templatePath[] = $type . '.phtml';
        } else {
            $templatePath[] = Mage::helper('optbelogin')->getMagentoEdition();
            $templatePath[] = Mage::helper('optbelogin')->getMagentoVersion();
            $templatePath[] = $type . '.phtml';
        }
        return implode(DS, $templatePath);
    }

    /**
     * @param Mage_Adminhtml_Block_Template $block
     *
     * @return string|bool
     */
    protected function _getTemplateName(Mage_Adminhtml_Block_Template $block)
    {
        $tpl                = basename($block->getTemplate(), '.phtml');
        $availableTemplates = array(
            'login'          => 'login',
            'forgotpassword' => 'forgotpassword',
        );
        return isset($availableTemplates[$tpl]) ? $availableTemplates[$tpl] : FALSE;
    }

}
