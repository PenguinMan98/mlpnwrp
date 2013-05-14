<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_AclGroupsBase
{
    protected $m_group_id;
    protected $m_forum_id;
    protected $m_auth_option_id;
    protected $m_auth_role_id;
    protected $m_auth_setting;
    protected $m_group_id_Orig;
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
    public function AclGroupsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getGroupId()
    {
        return $this->m_group_id;
    }
    public function setGroupId($value)
    {
        $this->m_group_id = $value;
        $this->setOrigGroupId($value);
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

    public function getOrigGroupId()
    {
        return $this->m_group_id_Orig;
    }
    public function setOrigGroupId($value)
    {
        if (isset($this->m_group_id_Orig)) { return; }
        $this->m_group_id_Orig = $value;
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
        $this->setGroupId($arrValues['group_id']);
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
                case 'group_id':
                    $this->setGroupId($val);
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
        $arrValues['group_id'] = $this->getGroupId();
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
