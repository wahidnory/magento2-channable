<?php
/**
 * Copyright © Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magmodules\Channable\Controller\Adminhtml\Returns;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Returns Index controller
 */
class Index extends Action
{
    /**
     * Authorization level
     */
    const ADMIN_RESOURCE = 'Magmodules_Channable::returns_view';

    /**
     * @var PageFactory
     */
    private $resultPageFactory;

    /**
     * Index constructor.
     *
     * @param Action\Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Action\Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        /** @var Page $resultPage */
        $resultPage->setActiveMenu('Magmodules_Channable::general_returns');
        $resultPage->getConfig()->getTitle()->prepend(__('Channable - Returns'));
        $resultPage->addBreadcrumb(__('Channable'), __('Channable'));
        $resultPage->addBreadcrumb(__('Returns'), __('Returns'));
        return $resultPage;
    }
}
