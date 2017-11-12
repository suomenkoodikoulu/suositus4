<?php

namespace Survey\SurveyPage\Model\ResourceModel\Survey;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection
 *
 * @author      Pierre FAY
 */
class Survey extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\Survey', 'Survey\SurveyPage\Model\ResourceModel\Survey');
    }
}