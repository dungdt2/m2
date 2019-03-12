<?php
namespace DungDt\Faq\Model\ResourceModel\Faq;
use Magento\Catalog\Model\ResourceModel\AbstractCollection;

class Collection extends AbstractCollection{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\DungDt\Faq\Model\Faq::class, \DungDt\Faq\Model\ResourceModel\Faq::class);
    }
}