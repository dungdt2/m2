<?php
/**
 * Created by PhpStorm.
 * User: chickyd3v
 * Date: 12/03/2019
 * Time: 23:10
 */

namespace DungDt\Faq\Controller\Adminhtml\Faq;


use Magento\Backend\App\Action;
use Magento\Ui\Component\MassAction\Filter;
use DungDt\Faq\Model\ResourceModel\Faq\CollectionFactory;
use DungDt\Faq\Model\FaqFactory;
use Magento\Framework\Controller\ResultFactory;
/**
 * Class MassDelete
 * @package DungDt\Faq\Controller\Adminhtml\Faq
 */
class MassDelete extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'DungDt_Faq::faq_delete';

    /**
     * @var Filter
     */
    protected $filter;
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var FaqFactory
     */
    protected $faqFactory;
    /**
     * MassDelete constructor.
     * @param Action\Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(Action\Context $context, Filter $filter, CollectionFactory $collectionFactory, FaqFactory $faqFactory)
    {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->faqFactory = $faqFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Redirect|\Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        // TODO: Implement execute() method.

        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $collectionSize = $collection->getSize();
        foreach ($collection as $item) {
            $faq = $this->faqFactory->create();
            $faq->load($item->getId())->delete();
        }

        $this->messageManager->addSuccess(__('A total of %1 record(s) have been deleted.', $collectionSize));

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}