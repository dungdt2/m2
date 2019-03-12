<?php
namespace DungDt\Faq\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Faq extends AbstractDb {
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('faqs', 'id');
    }
}