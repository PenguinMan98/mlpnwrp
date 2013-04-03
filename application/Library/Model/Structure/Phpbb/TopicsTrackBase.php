<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_TopicsTrackBase
{
    protected $m_user_id;
    protected $m_topic_id;
    protected $m_forum_id;
    protected $m_mark_time;
    protected $m_user_id_Orig;
    protected $m_topic_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setForumId(0);
            $this->setMarkTime(0);
        }
        return;
    }
    public function TopicsTrackBase($arrData = null)
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

    public function getForumId()
    {
        return $this->m_forum_id;
    }
    public function setForumId($value)
    {
        $this->m_forum_id = $value;
        return;
    }

    public function getMarkTime()
    {
        return $this->m_mark_time;
    }
    public function setMarkTime($value)
    {
        $this->m_mark_time = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setUserId($arrValues['user_id']);
        $this->setTopicId($arrValues['topic_id']);
        $this->setForumId($arrValues['forum_id']);
        $this->setMarkTime($arrValues['mark_time']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'topic_id':
                    $this->setTopicId($val);
                    break;
                case 'forum_id':
                    $this->setForumId($val);
                    break;
                case 'mark_time':
                    $this->setMarkTime($val);
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
        $arrValues['topic_id'] = $this->getTopicId();
        $arrValues['forum_id'] = $this->getForumId();
        $arrValues['mark_time'] = $this->getMarkTime();
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
