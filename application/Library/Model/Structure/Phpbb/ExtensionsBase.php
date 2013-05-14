<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ExtensionsBase
{
    protected $m_extension_id;
    protected $m_group_id;
    protected $m_extension;
    protected $m_extension_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setGroupId(0);
            $this->setExtension('');
        }
        return;
    }
    public function ExtensionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getExtensionId()
    {
        return $this->m_extension_id;
    }
    public function setExtensionId($value)
    {
        $this->m_extension_id = $value;
        $this->setOrigExtensionId($value);
        return;
    }

    public function getGroupId()
    {
        return $this->m_group_id;
    }
    public function setGroupId($value)
    {
        $this->m_group_id = $value;
        return;
    }

    public function getExtension()
    {
        return $this->m_extension;
    }
    public function setExtension($value)
    {
        $this->m_extension = $value;
        return;
    }

    public function getOrigExtensionId()
    {
        return $this->m_extension_id_Orig;
    }
    public function setOrigExtensionId($value)
    {
        if (isset($this->m_extension_id_Orig)) { return; }
        $this->m_extension_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setExtensionId($arrValues['extension_id']);
        $this->setGroupId($arrValues['group_id']);
        $this->setExtension($arrValues['extension']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'extension_id':
                    $this->setExtensionId($val);
                    break;
                case 'group_id':
                    $this->setGroupId($val);
                    break;
                case 'extension':
                    $this->setExtension($val);
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
        $arrValues['extension_id'] = $this->getExtensionId();
        $arrValues['group_id'] = $this->getGroupId();
        $arrValues['extension'] = $this->getExtension();
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
