<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_WarningsBase
{
    protected $m_warning_id;
    protected $m_user_id;
    protected $m_post_id;
    protected $m_log_id;
    protected $m_warning_time;
    protected $m_warning_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUserId(0);
            $this->setPostId(0);
            $this->setLogId(0);
            $this->setWarningTime(0);
        }
        return;
    }
    public function WarningsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getWarningId()
    {
        return $this->m_warning_id;
    }
    public function setWarningId($value)
    {
        $this->m_warning_id = $value;
        $this->setOrigWarningId($value);
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

    public function getPostId()
    {
        return $this->m_post_id;
    }
    public function setPostId($value)
    {
        $this->m_post_id = $value;
        return;
    }

    public function getLogId()
    {
        return $this->m_log_id;
    }
    public function setLogId($value)
    {
        $this->m_log_id = $value;
        return;
    }

    public function getWarningTime()
    {
        return $this->m_warning_time;
    }
    public function setWarningTime($value)
    {
        $this->m_warning_time = $value;
        return;
    }

    public function getOrigWarningId()
    {
        return $this->m_warning_id_Orig;
    }
    public function setOrigWarningId($value)
    {
        if (isset($this->m_warning_id_Orig)) { return; }
        $this->m_warning_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setWarningId($arrValues['warning_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setPostId($arrValues['post_id']);
        $this->setLogId($arrValues['log_id']);
        $this->setWarningTime($arrValues['warning_time']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'warning_id':
                    $this->setWarningId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'post_id':
                    $this->setPostId($val);
                    break;
                case 'log_id':
                    $this->setLogId($val);
                    break;
                case 'warning_time':
                    $this->setWarningTime($val);
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
        $arrValues['warning_id'] = $this->getWarningId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['post_id'] = $this->getPostId();
        $arrValues['log_id'] = $this->getLogId();
        $arrValues['warning_time'] = $this->getWarningTime();
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
