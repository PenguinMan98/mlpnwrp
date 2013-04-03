<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ConfirmBase
{
    protected $m_confirm_id;
    protected $m_session_id;
    protected $m_confirm_type;
    protected $m_code;
    protected $m_seed;
    protected $m_attempts;
    protected $m_confirm_id_Orig;
    protected $m_session_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setConfirmType(0);
            $this->setCode('');
            $this->setSeed(0);
            $this->setAttempts(0);
        }
        return;
    }
    public function ConfirmBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getSessionId()
    {
        return $this->m_session_id;
    }
    public function setSessionId($value)
    {
        $this->m_session_id = $value;
        $this->setOrigSessionId($value);
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

    public function getCode()
    {
        return $this->m_code;
    }
    public function setCode($value)
    {
        $this->m_code = $value;
        return;
    }

    public function getSeed()
    {
        return $this->m_seed;
    }
    public function setSeed($value)
    {
        $this->m_seed = $value;
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

    public function getOrigSessionId()
    {
        return $this->m_session_id_Orig;
    }
    public function setOrigSessionId($value)
    {
        if (isset($this->m_session_id_Orig)) { return; }
        $this->m_session_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setConfirmId($arrValues['confirm_id']);
        $this->setSessionId($arrValues['session_id']);
        $this->setConfirmType($arrValues['confirm_type']);
        $this->setCode($arrValues['code']);
        $this->setSeed($arrValues['seed']);
        $this->setAttempts($arrValues['attempts']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'confirm_id':
                    $this->setConfirmId($val);
                    break;
                case 'session_id':
                    $this->setSessionId($val);
                    break;
                case 'confirm_type':
                    $this->setConfirmType($val);
                    break;
                case 'code':
                    $this->setCode($val);
                    break;
                case 'seed':
                    $this->setSeed($val);
                    break;
                case 'attempts':
                    $this->setAttempts($val);
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
        $arrValues['confirm_id'] = $this->getConfirmId();
        $arrValues['session_id'] = $this->getSessionId();
        $arrValues['confirm_type'] = $this->getConfirmType();
        $arrValues['code'] = $this->getCode();
        $arrValues['seed'] = $this->getSeed();
        $arrValues['attempts'] = $this->getAttempts();
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
