<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_CaptchaAnswersBase
{
    protected $m_question_id;
    protected $m_answer_text;
    protected $m_question_id_Orig;
    protected $m_answer_text_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function CaptchaAnswersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getQuestionId()
    {
        return $this->m_question_id;
    }
    public function setQuestionId($value)
    {
        $this->m_question_id = $value;
        $this->setOrigQuestionId($value);
        return;
    }

    public function getAnswerText()
    {
        return $this->m_answer_text;
    }
    public function setAnswerText($value)
    {
        $this->m_answer_text = $value;
        $this->setOrigAnswerText($value);
        return;
    }

    public function getOrigQuestionId()
    {
        return $this->m_question_id_Orig;
    }
    public function setOrigQuestionId($value)
    {
        if (isset($this->m_question_id_Orig)) { return; }
        $this->m_question_id_Orig = $value;
        return;
    }

    public function getOrigAnswerText()
    {
        return $this->m_answer_text_Orig;
    }
    public function setOrigAnswerText($value)
    {
        if (isset($this->m_answer_text_Orig)) { return; }
        $this->m_answer_text_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setQuestionId($arrValues['question_id']);
        $this->setAnswerText($arrValues['answer_text']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'question_id':
                    $this->setQuestionId($val);
                    break;
                case 'answer_text':
                    $this->setAnswerText($val);
                    break;
                default:
                    break;
            }
        }
        return;
    }

    public function getAsArray()
    {
        $arrValues = array();
        $arrValues['question_id'] = $this->getQuestionId();
        $arrValues['answer_text'] = $this->getAnswerText();
        return $arrValues;
    }

    public function validateInsert(&$arrErrors)
    {
        return true;
    }

    public function validateUpdate(&$arrErrors)
    {
        return true;
    }
}
