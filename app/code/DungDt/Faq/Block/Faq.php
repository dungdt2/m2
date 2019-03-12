<?php

namespace DungDt\Faq\Block;

use DungDt\Faq\Helper\Data;
use Magento\Framework\View\Element\Template;
use DungDt\Faq\Model\FaqFactory;

/**
 * Class Faq
 * @package DungDt\Faq\Block
 */
class Faq extends Template
{
    /**
     * @var Data
     */
    protected $dataHelper;

    /**
     * Faq constructor.
     * @param Template\Context $context
     * @param Data $dataHelper
     * @param array $data
     */
    public function __construct(Template\Context $context, Data $dataHelper, array $data = [])
    {
        $this->dataHelper = $dataHelper;
        parent::__construct($context, $data);
    }

    /**
     * @return \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
     */
    public function test()
    {
        /** @var Data $helper */
        $data = $this->dataHelper->getListFaq();
        return $data;
    }
}