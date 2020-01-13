<?php
namespace Siliconsalad\Contacts\Model\Contact;
use Siliconsalad\Contacts\Model\ResourceModel\Contact\CollectionFactory;
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $contactCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $contactCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $contactCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        $this->loadedData = array();
        /** @var Customer $contact */
        foreach ($items as $contact) {
            // notre fieldset s'appelle "contact" d'où ce tableau pour que magento puisse retrouver ses data
            $this->loadedData[$contact->getId()]['contact'] = $contact->getData();
        }


        return $this->loadedData;

    }
}