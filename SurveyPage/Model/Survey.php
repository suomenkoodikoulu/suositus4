<?php

namespace Survey\SurveyPage\Model;

use Magento\Cron\Exception;
use Magento\Framework\Model\AbstractModel;
use \Survey\SurveyPage\Api\Data\PostInterface;
use \Magento\Framework\DataObject\IdentityInterface;

class Survey extends AbstractModel implements PostInterface, IdentityInterface
{


    const CACHE_TAG = 'survey';


    protected function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\ResourceModel\Survey');
    }



    public function getQuestion()
    {
        return $this->getData(self::Question);
    }


    public function getAnswer()
    {
        return $this->getData(self::Answer);
    }



    public function setQuestion($question)
    {
        return $this->setData(self::Question, $question);
    }

    public function setAnswer($answer)
    {
        return $this->setData(self::Answer, $answer);
    }


    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

}