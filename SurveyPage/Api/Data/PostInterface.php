<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10.11.2017
 * Time: 15:55
 */
namespace Survey\SurveyPage\Api\Data;

interface PostInterface
{
    const  Question              = 'Question';
    const  Answer                = 'Answer';
    const  ID                    = 'id';

    public function getQuestion();

    public function getAnswer();

    public function getId();

    public function setQuestion($question);

    public function setAnswer($answer);

}