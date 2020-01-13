<?php

namespace Siliconsalad\Contacts\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Contact Resource Model
 *
 * @author      Hocine AGOUNI
 */
class Contact extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('siliconsalad_contacts_requests', 'id_contact_request');
    }
}
