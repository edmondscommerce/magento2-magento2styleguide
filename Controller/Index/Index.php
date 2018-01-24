<?php

namespace EdmondsCommerce\Magento2StyleGuide\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    protected $messageManager;

    public function __construct(Context $context, \Magento\Framework\Message\ManagerInterface $messageManager)
    {
        $this->messageManager = $messageManager;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->messageManager->addSuccessMessage("Success");
        $this->messageManager->addErrorMessage("Error");
        $this->messageManager->addWarningMessage("Warning");
        $this->messageManager->addNoticeMessage("Notice");

        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}