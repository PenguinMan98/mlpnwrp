<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_LogBase
{
    protected $m_log_id;
    protected $m_log_type;
    protected $m_user_id;
    protected $m_forum_id;
    protected $m_topic_id;
    protected $m_reportee_id;
    protected $m_log_ip;
    protected $m_log_time;
    protected $m_log_operation;
    protected $m_log_data;
    protected $m_log_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLogType(0);
            $this->setUserId(0);
            $this->setForumId(0);
            $this->setTopicId(0);
            $this->setReporteeId(0);
            $this->setLogIp('');
            $this->setLogTime(0);
        }
        return;
    }
    public function LogBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getLogId()
    {
        return $this->m_log_id;
    }
    public function setLogId($value)
    {
        $this->m_log_id = $value;
        $this->setOrigLogId($value);
        return;
    }

    public function getLogType()
    {
        return $this->m_log_type;
    }
    public function setLogType($value)
    {
        $this->m_log_type = $value;
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

    public function getForumId()
    {
        return $this->m_forum_id;
    }
    public function setForumId($value)
    {
        $this->m_forum_id = $value;
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

    public function getReporteeId()
    {
        return $this->m_reportee_id;
    }
    public function setReporteeId($value)
    {
        $this->m_reportee_id = $value;
        return;
    }

    public function getLogIp()
    {
        return $this->m_log_ip;
    }
    public function setLogIp($value)
    {
        $this->m_log_ip = $value;
        return;
    }

    public function getLogTime()
    {
        return $this->m_log_time;
    }
    public function setLogTime($value)
    {
        $this->m_log_time = $value;
        return;
    }

    public function getLogOperation()
    {
        return $this->m_log_operation;
    }
    public function setLogOperation($value)
    {
        $this->m_log_operation = $value;
        return;
    }

    public function getLogData()
    {
        return $this->m_log_data;
    }
    public function setLogData($value)
    {
        $this->m_log_data = $value;
        return;
    }

    public function getOrigLogId()
    {
        return $this->m_log_id_Orig;
    }
    public function setOrigLogId($value)
    {
        if (isset($this->m_log_id_Orig)) { return; }
        $this->m_log_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setLogId($arrValues['log_id']);
        $this->setLogType($arrValues['log_type']);
        $this->setUserId($arrValues['user_id']);
        $this->setForumId($arrValues['forum_id']);
        $this->setTopicId($arrValues['topic_id']);
        $this->setReporteeId($arrValues['reportee_id']);
        $this->setLogIp($arrValues['log_ip']);
        $this->setLogTime($arrValues['log_time']);
        $this->setLogOperation($arrValues['log_operation']);
        $this->setLogData($arrValues['log_data']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'log_id':
                    $this->setLogId($val);
                    break;
                case 'log_type':
                    $this->setLogType($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'forum_id':
                    $this->setForumId($val);
                    break;
                case 'topic_id':
                    $this->setTopicId($val);
                    break;
                case 'reportee_id':
                    $this->setReporteeId($val);
                    break;
                case 'log_ip':
                    $this->setLogIp($val);
                    break;
                case 'log_time':
                    $this->setLogTime($val);
                    break;
                case 'log_operation':
                    $this->setLogOperation($val);
                    break;
                case 'log_data':
                    $this->setLogData($val);
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
        $arrValues['log_id'] = $this->getLogId();
        $arrValues['log_type'] = $this->getLogType();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['forum_id'] = $this->getForumId();
        $arrValues['topic_id'] = $this->getTopicId();
        $arrValues['reportee_id'] = $this->getReporteeId();
        $arrValues['log_ip'] = $this->getLogIp();
        $arrValues['log_time'] = $this->getLogTime();
        $arrValues['log_operation'] = $this->getLogOperation();
        $arrValues['log_data'] = $this->getLogData();
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
