<?php
namespace DungDt\Faq\Model;
use Magento\Framework\Model\AbstractModel;

class Faq extends AbstractModel {
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\DungDt\Faq\Model\ResourceModel\Faq::class);
    }
}