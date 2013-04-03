<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_AclRolesDataBase
{
    protected $m_role_id;
    protected $m_auth_option_id;
    protected $m_auth_setting;
    protected $m_role_id_Orig;
    protected $m_auth_option_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setAuthSetting(0);
        }
        return;
    }
    public function AclRolesDataBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRoleId()
    {
        return $this->m_role_id;
    }
    public function setRoleId($value)
    {
        $this->m_role_id = $value;
        $this->setOrigRoleId($value);
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

    public function getAuthSetting()
    {
        return $this->m_auth_setting;
    }
    public function setAuthSetting($value)
    {
        $this->m_auth_setting = $value;
        return;
    }

    public function getOrigRoleId()
    {
        return $this->m_role_id_Orig;
    }
    public function setOrigRoleId($value)
    {
        if (isset($this->m_role_id_Orig)) { return; }
        $this->m_role_id_Orig = $value;
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
        $this->setRoleId($arrValues['role_id']);
        $this->setAuthOptionId($arrValues['auth_option_id']);
        $this->setAuthSetting($arrValues['auth_setting']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'role_id':
                    $this->setRoleId($val);
                    break;
                case 'auth_option_id':
                    $this->setAuthOptionId($val);
                    break;
                case 'auth_setting':
                    $this->setAuthSetting($val);
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
        $arrValues['role_id'] = $this->getRoleId();
        $arrValues['auth_option_id'] = $this->getAuthOptionId();
        $arrValues['auth_setting'] = $this->getAuthSetting();
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
