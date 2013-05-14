<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_CaptchaQuestionsBase
{
    protected $m_question_id;
    protected $m_strict;
    protected $m_lang_id;
    protected $m_lang_iso;
    protected $m_question_text;
    protected $m_question_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setStrict(0);
            $this->setLangId(0);
            $this->setLangIso('');
        }
        return;
    }
    public function CaptchaQuestionsBase($arrData = null)
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

    public function getStrict()
    {
        return $this->m_strict;
    }
    public function setStrict($value)
    {
        $this->m_strict = $value;
        return;
    }

    public function getLangId()
    {
        return $this->m_lang_id;
    }
    public function setLangId($value)
    {
        $this->m_lang_id = $value;
        return;
    }

    public function getLangIso()
    {
        return $this->m_lang_iso;
    }
    public function setLangIso($value)
    {
        $this->m_lang_iso = $value;
        return;
    }

    public function getQuestionText()
    {
        return $this->m_question_text;
    }
    public function setQuestionText($value)
    {
        $this->m_question_text = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setQuestionId($arrValues['question_id']);
        $this->setStrict($arrValues['strict']);
        $this->setLangId($arrValues['lang_id']);
        $this->setLangIso($arrValues['lang_iso']);
        $this->setQuestionText($arrValues['question_text']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'question_id':
                    $this->setQuestionId($val);
                    break;
                case 'strict':
                    $this->setStrict($val);
                    break;
                case 'lang_id':
                    $this->setLangId($val);
                    break;
                case 'lang_iso':
                    $this->setLangIso($val);
                    break;
                case 'question_text':
                    $this->setQuestionText($val);
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
        $arrValues['strict'] = $this->getStrict();
        $arrValues['lang_id'] = $this->getLangId();
        $arrValues['lang_iso'] = $this->getLangIso();
        $arrValues['question_text'] = $this->getQuestionText();
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
