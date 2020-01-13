<?php

namespace Siliconsalad\Contacts\Model\ResourceModel\Contact;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection
 *
 * @author      Hocine AGOUNI
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Siliconsalad\Contacts\Model\Contact', 'Siliconsalad\Contacts\Model\ResourceModel\Contact');
    }
}