<?php

namespace Survey\SurveyPage\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\ObjectManagerInterface;

class Result extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    protected $_objectManager;

    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory,
                                ObjectManagerInterface $objectManager)
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_objectManager = $objectManager;
        parent::__construct($context);
    }

    public function execute()
    {

        $post = $this->getRequest()->getPost();
        $question = $post["txtQuestion"];
        $answer = $post["rdoAns"];
        $contact = $this->_objectManager->create('Survey\SurveyPage\Model\Survey');
        $contact->setQuestion($question);
        $contact->setAnswer($answer);
        $contact->save();

        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}