<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_AclUsersBase
{
    protected $m_user_id;
    protected $m_forum_id;
    protected $m_auth_option_id;
    protected $m_auth_role_id;
    protected $m_auth_setting;
    protected $m_user_id_Orig;
    protected $m_forum_id_Orig;
    protected $m_auth_option_id_Orig;
    protected $m_auth_role_id_Orig;
    protected $m_auth_setting_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function AclUsersBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getForumId()
    {
        return $this->m_forum_id;
    }
    public function setForumId($value)
    {
        $this->m_forum_id = $value;
        $this->setOrigForumId($value);
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

    public function getAuthRoleId()
    {
        return $this->m_auth_role_id;
    }
    public function setAuthRoleId($value)
    {
        $this->m_auth_role_id = $value;
        $this->setOrigAuthRoleId($value);
        return;
    }

    public function getAuthSetting()
    {
        return $this->m_auth_setting;
    }
    public function setAuthSetting($value)
    {
        $this->m_auth_setting = $value;
        $this->setOrigAuthSetting($value);
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

    public function getOrigForumId()
    {
        return $this->m_forum_id_Orig;
    }
    public function setOrigForumId($value)
    {
        if (isset($this->m_forum_id_Orig)) { return; }
        $this->m_forum_id_Orig = $value;
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

    public function getOrigAuthRoleId()
    {
        return $this->m_auth_role_id_Orig;
    }
    public function setOrigAuthRoleId($value)
    {
        if (isset($this->m_auth_role_id_Orig)) { return; }
        $this->m_auth_role_id_Orig = $value;
        return;
    }

    public function getOrigAuthSetting()
    {
        return $this->m_auth_setting_Orig;
    }
    public function setOrigAuthSetting($value)
    {
        if (isset($this->m_auth_setting_Orig)) { return; }
        $this->m_auth_setting_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUserId($arrValues['user_id']);
        $this->setForumId($arrValues['forum_id']);
        $this->setAuthOptionId($arrValues['auth_option_id']);
        $this->setAuthRoleId($arrValues['auth_role_id']);
        $this->setAuthSetting($arrValues['auth_setting']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'forum_id':
                    $this->setForumId($val);
                    break;
                case 'auth_option_id':
                    $this->setAuthOptionId($val);
                    break;
                case 'auth_role_id':
                    $this->setAuthRoleId($val);
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
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['forum_id'] = $this->getForumId();
        $arrValues['auth_option_id'] = $this->getAuthOptionId();
        $arrValues['auth_role_id'] = $this->getAuthRoleId();
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
