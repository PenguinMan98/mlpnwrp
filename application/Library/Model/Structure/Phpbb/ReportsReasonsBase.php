<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ReportsReasonsBase
{
    protected $m_reason_id;
    protected $m_reason_title;
    protected $m_reason_description;
    protected $m_reason_order;
    protected $m_reason_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setReasonTitle('');
            $this->setReasonOrder(0);
        }
        return;
    }
    public function ReportsReasonsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getReasonId()
    {
        return $this->m_reason_id;
    }
    public function setReasonId($value)
    {
        $this->m_reason_id = $value;
        $this->setOrigReasonId($value);
        return;
    }

    public function getReasonTitle()
    {
        return $this->m_reason_title;
    }
    public function setReasonTitle($value)
    {
        $this->m_reason_title = $value;
        return;
    }

    public function getReasonDescription()
    {
        return $this->m_reason_description;
    }
    public function setReasonDescription($value)
    {
        $this->m_reason_description = $value;
        return;
    }

    public function getReasonOrder()
    {
        return $this->m_reason_order;
    }
    public function setReasonOrder($value)
    {
        $this->m_reason_order = $value;
        return;
    }

    public function getOrigReasonId()
    {
        return $this->m_reason_id_Orig;
    }
    public function setOrigReasonId($value)
    {
        if (isset($this->m_reason_id_Orig)) { return; }
        $this->m_reason_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setReasonId($arrValues['reason_id']);
        $this->setReasonTitle($arrValues['reason_title']);
        $this->setReasonDescription($arrValues['reason_description']);
        $this->setReasonOrder($arrValues['reason_order']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'reason_id':
                    $this->setReasonId($val);
                    break;
                case 'reason_title':
                    $this->setReasonTitle($val);
                    break;
                case 'reason_description':
                    $this->setReasonDescription($val);
                    break;
                case 'reason_order':
                    $this->setReasonOrder($val);
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
        $arrValues['reason_id'] = $this->getReasonId();
        $arrValues['reason_title'] = $this->getReasonTitle();
        $arrValues['reason_description'] = $this->getReasonDescription();
        $arrValues['reason_order'] = $this->getReasonOrder();
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
