<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_TopicsPostedBase
{
    protected $m_user_id;
    protected $m_topic_id;
    protected $m_topic_posted;
    protected $m_user_id_Orig;
    protected $m_topic_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTopicPosted(0);
        }
        return;
    }
    public function TopicsPostedBase($arrData = null)
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

    public function getTopicPosted()
    {
        return $this->m_topic_posted;
    }
    public function setTopicPosted($value)
    {
        $this->m_topic_posted = $value;
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
        $this->setTopicPosted($arrValues['topic_posted']);
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
                case 'topic_posted':
                    $this->setTopicPosted($val);
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
        $arrValues['topic_posted'] = $this->getTopicPosted();
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
