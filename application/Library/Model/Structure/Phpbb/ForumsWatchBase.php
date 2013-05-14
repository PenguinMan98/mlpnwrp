<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ForumsWatchBase
{
    protected $m_forum_id;
    protected $m_user_id;
    protected $m_notify_status;
    protected $m_forum_id_Orig;
    protected $m_user_id_Orig;
    protected $m_notify_status_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function ForumsWatchBase($arrData = null)
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

    public function getNotifyStatus()
    {
        return $this->m_notify_status;
    }
    public function setNotifyStatus($value)
    {
        $this->m_notify_status = $value;
        $this->setOrigNotifyStatus($value);
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

    public function getOrigNotifyStatus()
    {
        return $this->m_notify_status_Orig;
    }
    public function setOrigNotifyStatus($value)
    {
        if (isset($this->m_notify_status_Orig)) { return; }
        $this->m_notify_status_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setForumId($arrValues['forum_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setNotifyStatus($arrValues['notify_status']);
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
                case 'notify_status':
                    $this->setNotifyStatus($val);
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
        $arrValues['notify_status'] = $this->getNotifyStatus();
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
