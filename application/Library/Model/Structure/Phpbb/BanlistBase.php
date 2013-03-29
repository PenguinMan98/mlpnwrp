<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_BanlistBase
{
    protected $m_ban_id;
    protected $m_ban_userid;
    protected $m_ban_ip;
    protected $m_ban_email;
    protected $m_ban_start;
    protected $m_ban_end;
    protected $m_ban_exclude;
    protected $m_ban_reason;
    protected $m_ban_give_reason;
    protected $m_ban_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setBanUserid(0);
            $this->setBanIp('');
            $this->setBanEmail('');
            $this->setBanStart(0);
            $this->setBanEnd(0);
            $this->setBanExclude(0);
            $this->setBanReason('');
            $this->setBanGiveReason('');
        }
        return;
    }
    public function BanlistBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBanId()
    {
        return $this->m_ban_id;
    }
    public function setBanId($value)
    {
        $this->m_ban_id = $value;
        $this->setOrigBanId($value);
        return;
    }

    public function getBanUserid()
    {
        return $this->m_ban_userid;
    }
    public function setBanUserid($value)
    {
        $this->m_ban_userid = $value;
        return;
    }

    public function getBanIp()
    {
        return $this->m_ban_ip;
    }
    public function setBanIp($value)
    {
        $this->m_ban_ip = $value;
        return;
    }

    public function getBanEmail()
    {
        return $this->m_ban_email;
    }
    public function setBanEmail($value)
    {
        $this->m_ban_email = $value;
        return;
    }

    public function getBanStart()
    {
        return $this->m_ban_start;
    }
    public function setBanStart($value)
    {
        $this->m_ban_start = $value;
        return;
    }

    public function getBanEnd()
    {
        return $this->m_ban_end;
    }
    public function setBanEnd($value)
    {
        $this->m_ban_end = $value;
        return;
    }

    public function getBanExclude()
    {
        return $this->m_ban_exclude;
    }
    public function setBanExclude($value)
    {
        $this->m_ban_exclude = $value;
        return;
    }

    public function getBanReason()
    {
        return $this->m_ban_reason;
    }
    public function setBanReason($value)
    {
        $this->m_ban_reason = $value;
        return;
    }

    public function getBanGiveReason()
    {
        return $this->m_ban_give_reason;
    }
    public function setBanGiveReason($value)
    {
        $this->m_ban_give_reason = $value;
        return;
    }

    public function getOrigBanId()
    {
        return $this->m_ban_id_Orig;
    }
    public function setOrigBanId($value)
    {
        if (isset($this->m_ban_id_Orig)) { return; }
        $this->m_ban_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBanId($arrValues['ban_id']);
        $this->setBanUserid($arrValues['ban_userid']);
        $this->setBanIp($arrValues['ban_ip']);
        $this->setBanEmail($arrValues['ban_email']);
        $this->setBanStart($arrValues['ban_start']);
        $this->setBanEnd($arrValues['ban_end']);
        $this->setBanExclude($arrValues['ban_exclude']);
        $this->setBanReason($arrValues['ban_reason']);
        $this->setBanGiveReason($arrValues['ban_give_reason']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'ban_id':
                    $this->setBanId($val);
                    break;
                case 'ban_userid':
                    $this->setBanUserid($val);
                    break;
                case 'ban_ip':
                    $this->setBanIp($val);
                    break;
                case 'ban_email':
                    $this->setBanEmail($val);
                    break;
                case 'ban_start':
                    $this->setBanStart($val);
                    break;
                case 'ban_end':
                    $this->setBanEnd($val);
                    break;
                case 'ban_exclude':
                    $this->setBanExclude($val);
                    break;
                case 'ban_reason':
                    $this->setBanReason($val);
                    break;
                case 'ban_give_reason':
                    $this->setBanGiveReason($val);
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
        $arrValues['ban_id'] = $this->getBanId();
        $arrValues['ban_userid'] = $this->getBanUserid();
        $arrValues['ban_ip'] = $this->getBanIp();
        $arrValues['ban_email'] = $this->getBanEmail();
        $arrValues['ban_start'] = $this->getBanStart();
        $arrValues['ban_end'] = $this->getBanEnd();
        $arrValues['ban_exclude'] = $this->getBanExclude();
        $arrValues['ban_reason'] = $this->getBanReason();
        $arrValues['ban_give_reason'] = $this->getBanGiveReason();
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
