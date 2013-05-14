<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_QaConfirmBase
{
    protected $m_session_id;
    protected $m_confirm_id;
    protected $m_lang_iso;
    protected $m_question_id;
    protected $m_attempts;
    protected $m_confirm_type;
    protected $m_confirm_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setSessionId('');
            $this->setLangIso('');
            $this->setQuestionId(0);
            $this->setAttempts(0);
            $this->setConfirmType(0);
        }
        return;
    }
    public function QaConfirmBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSessionId()
    {
        return $this->m_session_id;
    }
    public function setSessionId($value)
    {
        $this->m_session_id = $value;
        return;
    }

    public function getConfirmId()
    {
        return $this->m_confirm_id;
    }
    public function setConfirmId($value)
    {
        $this->m_confirm_id = $value;
        $this->setOrigConfirmId($value);
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

    public function getQuestionId()
    {
        return $this->m_question_id;
    }
    public function setQuestionId($value)
    {
        $this->m_question_id = $value;
        return;
    }

    public function getAttempts()
    {
        return $this->m_attempts;
    }
    public function setAttempts($value)
    {
        $this->m_attempts = $value;
        return;
    }

    public function getConfirmType()
    {
        return $this->m_confirm_type;
    }
    public function setConfirmType($value)
    {
        $this->m_confirm_type = $value;
        return;
    }

    public function getOrigConfirmId()
    {
        return $this->m_confirm_id_Orig;
    }
    public function setOrigConfirmId($value)
    {
        if (isset($this->m_confirm_id_Orig)) { return; }
        $this->m_confirm_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSessionId($arrValues['session_id']);
        $this->setConfirmId($arrValues['confirm_id']);
        $this->setLangIso($arrValues['lang_iso']);
        $this->setQuestionId($arrValues['question_id']);
        $this->setAttempts($arrValues['attempts']);
        $this->setConfirmType($arrValues['confirm_type']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'session_id':
                    $this->setSessionId($val);
                    break;
                case 'confirm_id':
                    $this->setConfirmId($val);
                    break;
                case 'lang_iso':
                    $this->setLangIso($val);
                    break;
                case 'question_id':
                    $this->setQuestionId($val);
                    break;
                case 'attempts':
                    $this->setAttempts($val);
                    break;
                case 'confirm_type':
                    $this->setConfirmType($val);
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
        $arrValues['session_id'] = $this->getSessionId();
        $arrValues['confirm_id'] = $this->getConfirmId();
        $arrValues['lang_iso'] = $this->getLangIso();
        $arrValues['question_id'] = $this->getQuestionId();
        $arrValues['attempts'] = $this->getAttempts();
        $arrValues['confirm_type'] = $this->getConfirmType();
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
