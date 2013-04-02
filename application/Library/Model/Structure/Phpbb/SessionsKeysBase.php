<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_SessionsKeysBase
{
    protected $m_key_id;
    protected $m_user_id;
    protected $m_last_ip;
    protected $m_last_login;
    protected $m_key_id_Orig;
    protected $m_user_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLastIp('');
            $this->setLastLogin(0);
        }
        return;
    }
    public function SessionsKeysBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getKeyId()
    {
        return $this->m_key_id;
    }
    public function setKeyId($value)
    {
        $this->m_key_id = $value;
        $this->setOrigKeyId($value);
        return;
    }

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        $this->setOrigUserId($value);
        return;
    }

    public function getLastIp()
    {
        return $this->m_last_ip;
    }
    public function setLastIp($value)
    {
        $this->m_last_ip = $value;
        return;
    }

    public function getLastLogin()
    {
        return $this->m_last_login;
    }
    public function setLastLogin($value)
    {
        $this->m_last_login = $value;
        return;
    }

    public function getOrigKeyId()
    {
        return $this->m_key_id_Orig;
    }
    public function setOrigKeyId($value)
    {
        if (isset($this->m_key_id_Orig)) { return; }
        $this->m_key_id_Orig = $value;
        return;
    }

    public function getOrigUserId()
    {
        return $this->m_user_id_Orig;
    }
    public function setOrigUserId($value)
    {
        if (isset($this->m_user_id_Orig)) { return; }
        $this->m_user_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setKeyId($arrValues['key_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setLastIp($arrValues['last_ip']);
        $this->setLastLogin($arrValues['last_login']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'key_id':
                    $this->setKeyId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'last_ip':
                    $this->setLastIp($val);
                    break;
                case 'last_login':
                    $this->setLastLogin($val);
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
        $arrValues['key_id'] = $this->getKeyId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['last_ip'] = $this->getLastIp();
        $arrValues['last_login'] = $this->getLastLogin();
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
