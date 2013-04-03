<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_SessionsBase
{
    protected $m_session_id;
    protected $m_session_user_id;
    protected $m_session_forum_id;
    protected $m_session_last_visit;
    protected $m_session_start;
    protected $m_session_time;
    protected $m_session_ip;
    protected $m_session_browser;
    protected $m_session_forwarded_for;
    protected $m_session_page;
    protected $m_session_viewonline;
    protected $m_session_autologin;
    protected $m_session_admin;
    protected $m_session_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setSessionUserId(0);
            $this->setSessionForumId(0);
            $this->setSessionLastVisit(0);
            $this->setSessionStart(0);
            $this->setSessionTime(0);
            $this->setSessionIp('');
            $this->setSessionBrowser('');
            $this->setSessionForwardedFor('');
            $this->setSessionPage('');
            $this->setSessionViewonline(1);
            $this->setSessionAutologin(0);
            $this->setSessionAdmin(0);
        }
        return;
    }
    public function SessionsBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getSessionUserId()
    {
        return $this->m_session_user_id;
    }
    public function setSessionUserId($value)
    {
        $this->m_session_user_id = $value;
        return;
    }

    public function getSessionForumId()
    {
        return $this->m_session_forum_id;
    }
    public function setSessionForumId($value)
    {
        $this->m_session_forum_id = $value;
        return;
    }

    public function getSessionLastVisit()
    {
        return $this->m_session_last_visit;
    }
    public function setSessionLastVisit($value)
    {
        $this->m_session_last_visit = $value;
        return;
    }

    public function getSessionStart()
    {
        return $this->m_session_start;
    }
    public function setSessionStart($value)
    {
        $this->m_session_start = $value;
        return;
    }

    public function getSessionTime()
    {
        return $this->m_session_time;
    }
    public function setSessionTime($value)
    {
        $this->m_session_time = $value;
        return;
    }

    public function getSessionIp()
    {
        return $this->m_session_ip;
    }
    public function setSessionIp($value)
    {
        $this->m_session_ip = $value;
        return;
    }

    public function getSessionBrowser()
    {
        return $this->m_session_browser;
    }
    public function setSessionBrowser($value)
    {
        $this->m_session_browser = $value;
        return;
    }

    public function getSessionForwardedFor()
    {
        return $this->m_session_forwarded_for;
    }
    public function setSessionForwardedFor($value)
    {
        $this->m_session_forwarded_for = $value;
        return;
    }

    public function getSessionPage()
    {
        return $this->m_session_page;
    }
    public function setSessionPage($value)
    {
        $this->m_session_page = $value;
        return;
    }

    public function getSessionViewonline()
    {
        return $this->m_session_viewonline;
    }
    public function setSessionViewonline($value)
    {
        $this->m_session_viewonline = $value;
        return;
    }

    public function getSessionAutologin()
    {
        return $this->m_session_autologin;
    }
    public function setSessionAutologin($value)
    {
        $this->m_session_autologin = $value;
        return;
    }

    public function getSessionAdmin()
    {
        return $this->m_session_admin;
    }
    public function setSessionAdmin($value)
    {
        $this->m_session_admin = $value;
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
        $this->setSessionId($arrValues['session_id']);
        $this->setSessionUserId($arrValues['session_user_id']);
        $this->setSessionForumId($arrValues['session_forum_id']);
        $this->setSessionLastVisit($arrValues['session_last_visit']);
        $this->setSessionStart($arrValues['session_start']);
        $this->setSessionTime($arrValues['session_time']);
        $this->setSessionIp($arrValues['session_ip']);
        $this->setSessionBrowser($arrValues['session_browser']);
        $this->setSessionForwardedFor($arrValues['session_forwarded_for']);
        $this->setSessionPage($arrValues['session_page']);
        $this->setSessionViewonline($arrValues['session_viewonline']);
        $this->setSessionAutologin($arrValues['session_autologin']);
        $this->setSessionAdmin($arrValues['session_admin']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'session_id':
                    $this->setSessionId($val);
                    break;
                case 'session_user_id':
                    $this->setSessionUserId($val);
                    break;
                case 'session_forum_id':
                    $this->setSessionForumId($val);
                    break;
                case 'session_last_visit':
                    $this->setSessionLastVisit($val);
                    break;
                case 'session_start':
                    $this->setSessionStart($val);
                    break;
                case 'session_time':
                    $this->setSessionTime($val);
                    break;
                case 'session_ip':
                    $this->setSessionIp($val);
                    break;
                case 'session_browser':
                    $this->setSessionBrowser($val);
                    break;
                case 'session_forwarded_for':
                    $this->setSessionForwardedFor($val);
                    break;
                case 'session_page':
                    $this->setSessionPage($val);
                    break;
                case 'session_viewonline':
                    $this->setSessionViewonline($val);
                    break;
                case 'session_autologin':
                    $this->setSessionAutologin($val);
                    break;
                case 'session_admin':
                    $this->setSessionAdmin($val);
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
        $arrValues['session_id'] = $this->getSessionId();
        $arrValues['session_user_id'] = $this->getSessionUserId();
        $arrValues['session_forum_id'] = $this->getSessionForumId();
        $arrValues['session_last_visit'] = $this->getSessionLastVisit();
        $arrValues['session_start'] = $this->getSessionStart();
        $arrValues['session_time'] = $this->getSessionTime();
        $arrValues['session_ip'] = $this->getSessionIp();
        $arrValues['session_browser'] = $this->getSessionBrowser();
        $arrValues['session_forwarded_for'] = $this->getSessionForwardedFor();
        $arrValues['session_page'] = $this->getSessionPage();
        $arrValues['session_viewonline'] = $this->getSessionViewonline();
        $arrValues['session_autologin'] = $this->getSessionAutologin();
        $arrValues['session_admin'] = $this->getSessionAdmin();
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
