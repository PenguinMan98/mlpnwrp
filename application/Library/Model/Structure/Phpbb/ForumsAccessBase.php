<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ForumsAccessBase
{
    protected $m_forum_id;
    protected $m_user_id;
    protected $m_session_id;
    protected $m_forum_id_Orig;
    protected $m_user_id_Orig;
    protected $m_session_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function ForumsAccessBase($arrData = null)
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

    public function getSessionId()
    {
        return $this->m_session_id;
    }
    public function setSessionId($value)
    {
        $this->m_session_id = $value;
        $this->setOrigSessionId($value);
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

    public function getOrigSessionId()
    {
        return $this->m_session_id_Orig;
    }
    public function setOrigSessionId($value)
    {
        if (isset($this->m_session_id_Orig)) { return; }
        $this->m_session_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setForumId($arrValues['forum_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setSessionId($arrValues['session_id']);
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
                case 'session_id':
                    $this->setSessionId($val);
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
        $arrValues['session_id'] = $this->getSessionId();
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
