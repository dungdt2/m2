<?php
/**
 * Created by PhpStorm.
 * User: chickyd3v
 * Date: 12/03/2019
 * Time: 21:46
 */

namespace DungDt\Faq\Helper;


use DungDt\Faq\Model\FaqFactory;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

/**
 * Class Data
 * @package DungDt\Faq\Helper
 */
class Data extends AbstractHelper
{
    /**
     * @var FaqFactory
     */
    protected $faqFactory;

    /**
     * Data constructor.
     * @param Context $context
     * @param FaqFactory $faqFactory
     */
    public function __construct(Context $context, FaqFactory $faqFactory)
    {
        $this->faqFactory = $faqFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
     */
    public function getListFaq(){
        /** @var \DungDt\Faq\Model\Faq $model */
        $model = $this->faqFactory->create();
        $data = $model->getCollection();
        return $data;
    }
}