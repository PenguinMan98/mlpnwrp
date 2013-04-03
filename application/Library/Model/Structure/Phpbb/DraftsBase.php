<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_DraftsBase
{
    protected $m_draft_id;
    protected $m_user_id;
    protected $m_topic_id;
    protected $m_forum_id;
    protected $m_save_time;
    protected $m_draft_subject;
    protected $m_draft_message;
    protected $m_draft_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUserId(0);
            $this->setTopicId(0);
            $this->setForumId(0);
            $this->setSaveTime(0);
            $this->setDraftSubject('');
        }
        return;
    }
    public function DraftsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getDraftId()
    {
        return $this->m_draft_id;
    }
    public function setDraftId($value)
    {
        $this->m_draft_id = $value;
        $this->setOrigDraftId($value);
        return;
    }

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        return;
    }

    public function getTopicId()
    {
        return $this->m_topic_id;
    }
    public function setTopicId($value)
    {
        $this->m_topic_id = $value;
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

    public function getSaveTime()
    {
        return $this->m_save_time;
    }
    public function setSaveTime($value)
    {
        $this->m_save_time = $value;
        return;
    }

    public function getDraftSubject()
    {
        return $this->m_draft_subject;
    }
    public function setDraftSubject($value)
    {
        $this->m_draft_subject = $value;
        return;
    }

    public function getDraftMessage()
    {
        return $this->m_draft_message;
    }
    public function setDraftMessage($value)
    {
        $this->m_draft_message = $value;
        return;
    }

    public function getOrigDraftId()
    {
        return $this->m_draft_id_Orig;
    }
    public function setOrigDraftId($value)
    {
        if (isset($this->m_draft_id_Orig)) { return; }
        $this->m_draft_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setDraftId($arrValues['draft_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setTopicId($arrValues['topic_id']);
        $this->setForumId($arrValues['forum_id']);
        $this->setSaveTime($arrValues['save_time']);
        $this->setDraftSubject($arrValues['draft_subject']);
        $this->setDraftMessage($arrValues['draft_message']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'draft_id':
                    $this->setDraftId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'topic_id':
                    $this->setTopicId($val);
                    break;
                case 'forum_id':
                    $this->setForumId($val);
                    break;
                case 'save_time':
                    $this->setSaveTime($val);
                    break;
                case 'draft_subject':
                    $this->setDraftSubject($val);
                    break;
                case 'draft_message':
                    $this->setDraftMessage($val);
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
        $arrValues['draft_id'] = $this->getDraftId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['topic_id'] = $this->getTopicId();
        $arrValues['forum_id'] = $this->getForumId();
        $arrValues['save_time'] = $this->getSaveTime();
        $arrValues['draft_subject'] = $this->getDraftSubject();
        $arrValues['draft_message'] = $this->getDraftMessage();
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
