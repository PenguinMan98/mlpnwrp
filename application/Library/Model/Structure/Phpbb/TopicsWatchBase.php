<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_TopicsWatchBase
{
    protected $m_topic_id;
    protected $m_user_id;
    protected $m_notify_status;
    protected $m_topic_id_Orig;
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
    public function TopicsWatchBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTopicId()
    {
        return $this->m_topic_id;
    }
    public function setTopicId($value)
    {
        $this->m_topic_id = $value;
        $this->setOrigTopicId($value);
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

    public function getOrigTopicId()
    {
        return $this->m_topic_id_Orig;
    }
    public function setOrigTopicId($value)
    {
        if (isset($this->m_topic_id_Orig)) { return; }
        $this->m_topic_id_Orig = $value;
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
        $this->setTopicId($arrValues['topic_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setNotifyStatus($arrValues['notify_status']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'topic_id':
                    $this->setTopicId($val);
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
        $arrValues['topic_id'] = $this->getTopicId();
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
