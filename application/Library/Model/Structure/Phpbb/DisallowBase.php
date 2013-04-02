<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_DisallowBase
{
    protected $m_disallow_id;
    protected $m_disallow_username;
    protected $m_disallow_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setDisallowUsername('');
        }
        return;
    }
    public function DisallowBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getDisallowId()
    {
        return $this->m_disallow_id;
    }
    public function setDisallowId($value)
    {
        $this->m_disallow_id = $value;
        $this->setOrigDisallowId($value);
        return;
    }

    public function getDisallowUsername()
    {
        return $this->m_disallow_username;
    }
    public function setDisallowUsername($value)
    {
        $this->m_disallow_username = $value;
        return;
    }

    public function getOrigDisallowId()
    {
        return $this->m_disallow_id_Orig;
    }
    public function setOrigDisallowId($value)
    {
        if (isset($this->m_disallow_id_Orig)) { return; }
        $this->m_disallow_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setDisallowId($arrValues['disallow_id']);
        $this->setDisallowUsername($arrValues['disallow_username']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'disallow_id':
                    $this->setDisallowId($val);
                    break;
                case 'disallow_username':
                    $this->setDisallowUsername($val);
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
        $arrValues['disallow_id'] = $this->getDisallowId();
        $arrValues['disallow_username'] = $this->getDisallowUsername();
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
