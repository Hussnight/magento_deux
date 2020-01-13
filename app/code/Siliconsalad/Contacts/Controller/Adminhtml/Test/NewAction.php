<?php
namespace Siliconsalad\Contacts\Controller\Adminhtml\Contact;
use Magento\Backend\App\Action;
use Siliconsalad\Contacts\Model\Contact as Contact;

class NewAction extends \Magento\Backend\App\Action
{
    /**
     * Edit A Contact Page
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Redirect
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        $contactData = $this->getRequest()->getParam('contact');
        if(is_array($contactData)) {
            $contact = $this->_objectManager->create(Contact::class);
            $contact->setData($contactData)->save();
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/index');
        }
    }
}