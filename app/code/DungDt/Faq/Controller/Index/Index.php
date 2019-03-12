<?php
namespace DungDt\Faq\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $page = $this->resultPageFactory->create();
        return $page;
    }
}