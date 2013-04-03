<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_UserGroupBase
{
    protected $m_group_id;
    protected $m_user_id;
    protected $m_group_leader;
    protected $m_user_pending;
    protected $m_group_id_Orig;
    protected $m_user_id_Orig;
    protected $m_group_leader_Orig;
    protected $m_user_pending_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function UserGroupBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getGroupId()
    {
        return $this->m_group_id;
    }
    public function setGroupId($value)
    {
        $this->m_group_id = $value;
        $this->setOrigGroupId($value);
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

    public function getGroupLeader()
    {
        return $this->m_group_leader;
    }
    public function setGroupLeader($value)
    {
        $this->m_group_leader = $value;
        $this->setOrigGroupLeader($value);
        return;
    }

    public function getUserPending()
    {
        return $this->m_user_pending;
    }
    public function setUserPending($value)
    {
        $this->m_user_pending = $value;
        $this->setOrigUserPending($value);
        return;
    }

    public function getOrigGroupId()
    {
        return $this->m_group_id_Orig;
    }
    public function setOrigGroupId($value)
    {
        if (isset($this->m_group_id_Orig)) { return; }
        $this->m_group_id_Orig = $value;
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

    public function getOrigGroupLeader()
    {
        return $this->m_group_leader_Orig;
    }
    public function setOrigGroupLeader($value)
    {
        if (isset($this->m_group_leader_Orig)) { return; }
        $this->m_group_leader_Orig = $value;
        return;
    }

    public function getOrigUserPending()
    {
        return $this->m_user_pending_Orig;
    }
    public function setOrigUserPending($value)
    {
        if (isset($this->m_user_pending_Orig)) { return; }
        $this->m_user_pending_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setGroupId($arrValues['group_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setGroupLeader($arrValues['group_leader']);
        $this->setUserPending($arrValues['user_pending']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'group_id':
                    $this->setGroupId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'group_leader':
                    $this->setGroupLeader($val);
                    break;
                case 'user_pending':
                    $this->setUserPending($val);
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
        $arrValues['group_id'] = $this->getGroupId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['group_leader'] = $this->getGroupLeader();
        $arrValues['user_pending'] = $this->getUserPending();
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
