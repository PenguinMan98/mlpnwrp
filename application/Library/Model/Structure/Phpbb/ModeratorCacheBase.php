<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ModeratorCacheBase
{
    protected $m_forum_id;
    protected $m_user_id;
    protected $m_username;
    protected $m_group_id;
    protected $m_group_name;
    protected $m_display_on_index;
    protected $m_forum_id_Orig;
    protected $m_user_id_Orig;
    protected $m_username_Orig;
    protected $m_group_id_Orig;
    protected $m_group_name_Orig;
    protected $m_display_on_index_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function ModeratorCacheBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getUsername()
    {
        return $this->m_username;
    }
    public function setUsername($value)
    {
        $this->m_username = $value;
        $this->setOrigUsername($value);
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

    public function getGroupName()
    {
        return $this->m_group_name;
    }
    public function setGroupName($value)
    {
        $this->m_group_name = $value;
        $this->setOrigGroupName($value);
        return;
    }

    public function getDisplayOnIndex()
    {
        return $this->m_display_on_index;
    }
    public function setDisplayOnIndex($value)
    {
        $this->m_display_on_index = $value;
        $this->setOrigDisplayOnIndex($value);
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

    public function getOrigUsername()
    {
        return $this->m_username_Orig;
    }
    public function setOrigUsername($value)
    {
        if (isset($this->m_username_Orig)) { return; }
        $this->m_username_Orig = $value;
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

    public function getOrigGroupName()
    {
        return $this->m_group_name_Orig;
    }
    public function setOrigGroupName($value)
    {
        if (isset($this->m_group_name_Orig)) { return; }
        $this->m_group_name_Orig = $value;
        return;
    }

    public function getOrigDisplayOnIndex()
    {
        return $this->m_display_on_index_Orig;
    }
    public function setOrigDisplayOnIndex($value)
    {
        if (isset($this->m_display_on_index_Orig)) { return; }
        $this->m_display_on_index_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setForumId($arrValues['forum_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setUsername($arrValues['username']);
        $this->setGroupId($arrValues['group_id']);
        $this->setGroupName($arrValues['group_name']);
        $this->setDisplayOnIndex($arrValues['display_on_index']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'forum_id':
                    $this->setForumId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'username':
                    $this->setUsername($val);
                    break;
                case 'group_id':
                    $this->setGroupId($val);
                    break;
                case 'group_name':
                    $this->setGroupName($val);
                    break;
                case 'display_on_index':
                    $this->setDisplayOnIndex($val);
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
        $arrValues['forum_id'] = $this->getForumId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['username'] = $this->getUsername();
        $arrValues['group_id'] = $this->getGroupId();
        $arrValues['group_name'] = $this->getGroupName();
        $arrValues['display_on_index'] = $this->getDisplayOnIndex();
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
