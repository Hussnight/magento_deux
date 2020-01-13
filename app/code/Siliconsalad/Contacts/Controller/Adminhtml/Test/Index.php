<?php

namespace Siliconsalad\Contacts\Controller\Adminhtml\Test;

class Index extends \Magento\Backend\App\Action
{

    /**
     * Index Action
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->LoadLayout();
        $this->_view->renderLayout();
    }
}