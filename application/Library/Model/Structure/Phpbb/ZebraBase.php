<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ZebraBase
{
    protected $m_user_id;
    protected $m_zebra_id;
    protected $m_friend;
    protected $m_foe;
    protected $m_user_id_Orig;
    protected $m_zebra_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setFriend(0);
            $this->setFoe(0);
        }
        return;
    }
    public function ZebraBase($arrData = null)
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

    public function getZebraId()
    {
        return $this->m_zebra_id;
    }
    public function setZebraId($value)
    {
        $this->m_zebra_id = $value;
        $this->setOrigZebraId($value);
        return;
    }

    public function getFriend()
    {
        return $this->m_friend;
    }
    public function setFriend($value)
    {
        $this->m_friend = $value;
        return;
    }

    public function getFoe()
    {
        return $this->m_foe;
    }
    public function setFoe($value)
    {
        $this->m_foe = $value;
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

    public function getOrigZebraId()
    {
        return $this->m_zebra_id_Orig;
    }
    public function setOrigZebraId($value)
    {
        if (isset($this->m_zebra_id_Orig)) { return; }
        $this->m_zebra_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUserId($arrValues['user_id']);
        $this->setZebraId($arrValues['zebra_id']);
        $this->setFriend($arrValues['friend']);
        $this->setFoe($arrValues['foe']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'zebra_id':
                    $this->setZebraId($val);
                    break;
                case 'friend':
                    $this->setFriend($val);
                    break;
                case 'foe':
                    $this->setFoe($val);
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
        $arrValues['zebra_id'] = $this->getZebraId();
        $arrValues['friend'] = $this->getFriend();
        $arrValues['foe'] = $this->getFoe();
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
