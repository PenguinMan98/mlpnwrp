<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_LoginAttemptsBase
{
    protected $m_attempt_ip;
    protected $m_attempt_browser;
    protected $m_attempt_forwarded_for;
    protected $m_attempt_time;
    protected $m_user_id;
    protected $m_username;
    protected $m_username_clean;
    protected $m_attempt_ip_Orig;
    protected $m_attempt_browser_Orig;
    protected $m_attempt_forwarded_for_Orig;
    protected $m_attempt_time_Orig;
    protected $m_user_id_Orig;
    protected $m_username_Orig;
    protected $m_username_clean_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function LoginAttemptsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAttemptIp()
    {
        return $this->m_attempt_ip;
    }
    public function setAttemptIp($value)
    {
        $this->m_attempt_ip = $value;
        $this->setOrigAttemptIp($value);
        return;
    }

    public function getAttemptBrowser()
    {
        return $this->m_attempt_browser;
    }
    public function setAttemptBrowser($value)
    {
        $this->m_attempt_browser = $value;
        $this->setOrigAttemptBrowser($value);
        return;
    }

    public function getAttemptForwardedFor()
    {
        return $this->m_attempt_forwarded_for;
    }
    public function setAttemptForwardedFor($value)
    {
        $this->m_attempt_forwarded_for = $value;
        $this->setOrigAttemptForwardedFor($value);
        return;
    }

    public function getAttemptTime()
    {
        return $this->m_attempt_time;
    }
    public function setAttemptTime($value)
    {
        $this->m_attempt_time = $value;
        $this->setOrigAttemptTime($value);
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

    public function getUsernameClean()
    {
        return $this->m_username_clean;
    }
    public function setUsernameClean($value)
    {
        $this->m_username_clean = $value;
        $this->setOrigUsernameClean($value);
        return;
    }

    public function getOrigAttemptIp()
    {
        return $this->m_attempt_ip_Orig;
    }
    public function setOrigAttemptIp($value)
    {
        if (isset($this->m_attempt_ip_Orig)) { return; }
        $this->m_attempt_ip_Orig = $value;
        return;
    }

    public function getOrigAttemptBrowser()
    {
        return $this->m_attempt_browser_Orig;
    }
    public function setOrigAttemptBrowser($value)
    {
        if (isset($this->m_attempt_browser_Orig)) { return; }
        $this->m_attempt_browser_Orig = $value;
        return;
    }

    public function getOrigAttemptForwardedFor()
    {
        return $this->m_attempt_forwarded_for_Orig;
    }
    public function setOrigAttemptForwardedFor($value)
    {
        if (isset($this->m_attempt_forwarded_for_Orig)) { return; }
        $this->m_attempt_forwarded_for_Orig = $value;
        return;
    }

    public function getOrigAttemptTime()
    {
        return $this->m_attempt_time_Orig;
    }
    public function setOrigAttemptTime($value)
    {
        if (isset($this->m_attempt_time_Orig)) { return; }
        $this->m_attempt_time_Orig = $value;
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

    public function getOrigUsernameClean()
    {
        return $this->m_username_clean_Orig;
    }
    public function setOrigUsernameClean($value)
    {
        if (isset($this->m_username_clean_Orig)) { return; }
        $this->m_username_clean_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAttemptIp($arrValues['attempt_ip']);
        $this->setAttemptBrowser($arrValues['attempt_browser']);
        $this->setAttemptForwardedFor($arrValues['attempt_forwarded_for']);
        $this->setAttemptTime($arrValues['attempt_time']);
        $this->setUserId($arrValues['user_id']);
        $this->setUsername($arrValues['username']);
        $this->setUsernameClean($arrValues['username_clean']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'attempt_ip':
                    $this->setAttemptIp($val);
                    break;
                case 'attempt_browser':
                    $this->setAttemptBrowser($val);
                    break;
                case 'attempt_forwarded_for':
                    $this->setAttemptForwardedFor($val);
                    break;
                case 'attempt_time':
                    $this->setAttemptTime($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'username':
                    $this->setUsername($val);
                    break;
                case 'username_clean':
                    $this->setUsernameClean($val);
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
        $arrValues['attempt_ip'] = $this->getAttemptIp();
        $arrValues['attempt_browser'] = $this->getAttemptBrowser();
        $arrValues['attempt_forwarded_for'] = $this->getAttemptForwardedFor();
        $arrValues['attempt_time'] = $this->getAttemptTime();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['username'] = $this->getUsername();
        $arrValues['username_clean'] = $this->getUsernameClean();
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
