<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ReportsBase
{
    protected $m_report_id;
    protected $m_reason_id;
    protected $m_post_id;
    protected $m_pm_id;
    protected $m_user_id;
    protected $m_user_notify;
    protected $m_report_closed;
    protected $m_report_time;
    protected $m_report_text;
    protected $m_report_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setReasonId(0);
            $this->setPostId(0);
            $this->setPmId(0);
            $this->setUserId(0);
            $this->setUserNotify(0);
            $this->setReportClosed(0);
            $this->setReportTime(0);
        }
        return;
    }
    public function ReportsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getReportId()
    {
        return $this->m_report_id;
    }
    public function setReportId($value)
    {
        $this->m_report_id = $value;
        $this->setOrigReportId($value);
        return;
    }

    public function getReasonId()
    {
        return $this->m_reason_id;
    }
    public function setReasonId($value)
    {
        $this->m_reason_id = $value;
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

    public function getPmId()
    {
        return $this->m_pm_id;
    }
    public function setPmId($value)
    {
        $this->m_pm_id = $value;
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

    public function getUserNotify()
    {
        return $this->m_user_notify;
    }
    public function setUserNotify($value)
    {
        $this->m_user_notify = $value;
        return;
    }

    public function getReportClosed()
    {
        return $this->m_report_closed;
    }
    public function setReportClosed($value)
    {
        $this->m_report_closed = $value;
        return;
    }

    public function getReportTime()
    {
        return $this->m_report_time;
    }
    public function setReportTime($value)
    {
        $this->m_report_time = $value;
        return;
    }

    public function getReportText()
    {
        return $this->m_report_text;
    }
    public function setReportText($value)
    {
        $this->m_report_text = $value;
        return;
    }

    public function getOrigReportId()
    {
        return $this->m_report_id_Orig;
    }
    public function setOrigReportId($value)
    {
        if (isset($this->m_report_id_Orig)) { return; }
        $this->m_report_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setReportId($arrValues['report_id']);
        $this->setReasonId($arrValues['reason_id']);
        $this->setPostId($arrValues['post_id']);
        $this->setPmId($arrValues['pm_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setUserNotify($arrValues['user_notify']);
        $this->setReportClosed($arrValues['report_closed']);
        $this->setReportTime($arrValues['report_time']);
        $this->setReportText($arrValues['report_text']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'report_id':
                    $this->setReportId($val);
                    break;
                case 'reason_id':
                    $this->setReasonId($val);
                    break;
                case 'post_id':
                    $this->setPostId($val);
                    break;
                case 'pm_id':
                    $this->setPmId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'user_notify':
                    $this->setUserNotify($val);
                    break;
                case 'report_closed':
                    $this->setReportClosed($val);
                    break;
                case 'report_time':
                    $this->setReportTime($val);
                    break;
                case 'report_text':
                    $this->setReportText($val);
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
        $arrValues['report_id'] = $this->getReportId();
        $arrValues['reason_id'] = $this->getReasonId();
        $arrValues['post_id'] = $this->getPostId();
        $arrValues['pm_id'] = $this->getPmId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['user_notify'] = $this->getUserNotify();
        $arrValues['report_closed'] = $this->getReportClosed();
        $arrValues['report_time'] = $this->getReportTime();
        $arrValues['report_text'] = $this->getReportText();
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
