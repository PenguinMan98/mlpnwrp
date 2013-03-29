<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_AclOptionsBase
{
    protected $m_auth_option_id;
    protected $m_auth_option;
    protected $m_is_global;
    protected $m_is_local;
    protected $m_founder_only;
    protected $m_auth_option_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setAuthOption('');
            $this->setIsGlobal(0);
            $this->setIsLocal(0);
            $this->setFounderOnly(0);
        }
        return;
    }
    public function AclOptionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAuthOptionId()
    {
        return $this->m_auth_option_id;
    }
    public function setAuthOptionId($value)
    {
        $this->m_auth_option_id = $value;
        $this->setOrigAuthOptionId($value);
        return;
    }

    public function getAuthOption()
    {
        return $this->m_auth_option;
    }
    public function setAuthOption($value)
    {
        $this->m_auth_option = $value;
        return;
    }

    public function getIsGlobal()
    {
        return $this->m_is_global;
    }
    public function setIsGlobal($value)
    {
        $this->m_is_global = $value;
        return;
    }

    public function getIsLocal()
    {
        return $this->m_is_local;
    }
    public function setIsLocal($value)
    {
        $this->m_is_local = $value;
        return;
    }

    public function getFounderOnly()
    {
        return $this->m_founder_only;
    }
    public function setFounderOnly($value)
    {
        $this->m_founder_only = $value;
        return;
    }

    public function getOrigAuthOptionId()
    {
        return $this->m_auth_option_id_Orig;
    }
    public function setOrigAuthOptionId($value)
    {
        if (isset($this->m_auth_option_id_Orig)) { return; }
        $this->m_auth_option_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAuthOptionId($arrValues['auth_option_id']);
        $this->setAuthOption($arrValues['auth_option']);
        $this->setIsGlobal($arrValues['is_global']);
        $this->setIsLocal($arrValues['is_local']);
        $this->setFounderOnly($arrValues['founder_only']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'auth_option_id':
                    $this->setAuthOptionId($val);
                    break;
                case 'auth_option':
                    $this->setAuthOption($val);
                    break;
                case 'is_global':
                    $this->setIsGlobal($val);
                    break;
                case 'is_local':
                    $this->setIsLocal($val);
                    break;
                case 'founder_only':
                    $this->setFounderOnly($val);
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
        $arrValues['auth_option_id'] = $this->getAuthOptionId();
        $arrValues['auth_option'] = $this->getAuthOption();
        $arrValues['is_global'] = $this->getIsGlobal();
        $arrValues['is_local'] = $this->getIsLocal();
        $arrValues['founder_only'] = $this->getFounderOnly();
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
