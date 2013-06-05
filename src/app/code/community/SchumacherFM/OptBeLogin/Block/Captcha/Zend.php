<?php
/**
 * @category    SchumacherFM_OptBeLogin
 * @package     Block
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class SchumacherFM_OptBeLogin_Block_Captcha_Zend extends Mage_Captcha_Block_Captcha_Zend
{
    protected $_minTemplate = 'optbelogin/minimal/captcha/zend.phtml';

    protected $_allowedFormIds = array(
        'backend_forgotpassword' => 1,
        'backend_login'          => 1,
    );

    /**
     * Returns template path
     *
     * @return string
     */
    public function getTemplate()
    {
        /** @var SchumacherFM_OptBeLogin_Helper_Data $helper */
        $helper = Mage::helper('optbelogin');
        if ($this->_isAllowed() && $helper->isMinimalLogin()) {
            return $this->getIsAjax() ? '' : $this->_minTemplate;
        }
        return $this->getIsAjax() ? '' : $this->_template;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return isset($this->_allowedFormIds[$this->getData('form_id')]);
    }

}
