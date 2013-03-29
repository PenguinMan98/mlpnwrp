<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ConfigBase
{
    protected $m_config_name;
    protected $m_config_value;
    protected $m_is_dynamic;
    protected $m_config_name_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setConfigValue('');
            $this->setIsDynamic(0);
        }
        return;
    }
    public function ConfigBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getConfigName()
    {
        return $this->m_config_name;
    }
    public function setConfigName($value)
    {
        $this->m_config_name = $value;
        $this->setOrigConfigName($value);
        return;
    }

    public function getConfigValue()
    {
        return $this->m_config_value;
    }
    public function setConfigValue($value)
    {
        $this->m_config_value = $value;
        return;
    }

    public function getIsDynamic()
    {
        return $this->m_is_dynamic;
    }
    public function setIsDynamic($value)
    {
        $this->m_is_dynamic = $value;
        return;
    }

    public function getOrigConfigName()
    {
        return $this->m_config_name_Orig;
    }
    public function setOrigConfigName($value)
    {
        if (isset($this->m_config_name_Orig)) { return; }
        $this->m_config_name_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setConfigName($arrValues['config_name']);
        $this->setConfigValue($arrValues['config_value']);
        $this->setIsDynamic($arrValues['is_dynamic']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'config_name':
                    $this->setConfigName($val);
                    break;
                case 'config_value':
                    $this->setConfigValue($val);
                    break;
                case 'is_dynamic':
                    $this->setIsDynamic($val);
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
        $arrValues['config_name'] = $this->getConfigName();
        $arrValues['config_value'] = $this->getConfigValue();
        $arrValues['is_dynamic'] = $this->getIsDynamic();
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
