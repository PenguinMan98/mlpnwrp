<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ModulesBase
{
    protected $m_module_id;
    protected $m_module_enabled;
    protected $m_module_display;
    protected $m_module_basename;
    protected $m_module_class;
    protected $m_parent_id;
    protected $m_left_id;
    protected $m_right_id;
    protected $m_module_langname;
    protected $m_module_mode;
    protected $m_module_auth;
    protected $m_module_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setModuleEnabled(1);
            $this->setModuleDisplay(1);
            $this->setModuleBasename('');
            $this->setModuleClass('');
            $this->setParentId(0);
            $this->setLeftId(0);
            $this->setRightId(0);
            $this->setModuleLangname('');
            $this->setModuleMode('');
            $this->setModuleAuth('');
        }
        return;
    }
    public function ModulesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getModuleId()
    {
        return $this->m_module_id;
    }
    public function setModuleId($value)
    {
        $this->m_module_id = $value;
        $this->setOrigModuleId($value);
        return;
    }

    public function getModuleEnabled()
    {
        return $this->m_module_enabled;
    }
    public function setModuleEnabled($value)
    {
        $this->m_module_enabled = $value;
        return;
    }

    public function getModuleDisplay()
    {
        return $this->m_module_display;
    }
    public function setModuleDisplay($value)
    {
        $this->m_module_display = $value;
        return;
    }

    public function getModuleBasename()
    {
        return $this->m_module_basename;
    }
    public function setModuleBasename($value)
    {
        $this->m_module_basename = $value;
        return;
    }

    public function getModuleClass()
    {
        return $this->m_module_class;
    }
    public function setModuleClass($value)
    {
        $this->m_module_class = $value;
        return;
    }

    public function getParentId()
    {
        return $this->m_parent_id;
    }
    public function setParentId($value)
    {
        $this->m_parent_id = $value;
        return;
    }

    public function getLeftId()
    {
        return $this->m_left_id;
    }
    public function setLeftId($value)
    {
        $this->m_left_id = $value;
        return;
    }

    public function getRightId()
    {
        return $this->m_right_id;
    }
    public function setRightId($value)
    {
        $this->m_right_id = $value;
        return;
    }

    public function getModuleLangname()
    {
        return $this->m_module_langname;
    }
    public function setModuleLangname($value)
    {
        $this->m_module_langname = $value;
        return;
    }

    public function getModuleMode()
    {
        return $this->m_module_mode;
    }
    public function setModuleMode($value)
    {
        $this->m_module_mode = $value;
        return;
    }

    public function getModuleAuth()
    {
        return $this->m_module_auth;
    }
    public function setModuleAuth($value)
    {
        $this->m_module_auth = $value;
        return;
    }

    public function getOrigModuleId()
    {
        return $this->m_module_id_Orig;
    }
    public function setOrigModuleId($value)
    {
        if (isset($this->m_module_id_Orig)) { return; }
        $this->m_module_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setModuleId($arrValues['module_id']);
        $this->setModuleEnabled($arrValues['module_enabled']);
        $this->setModuleDisplay($arrValues['module_display']);
        $this->setModuleBasename($arrValues['module_basename']);
        $this->setModuleClass($arrValues['module_class']);
        $this->setParentId($arrValues['parent_id']);
        $this->setLeftId($arrValues['left_id']);
        $this->setRightId($arrValues['right_id']);
        $this->setModuleLangname($arrValues['module_langname']);
        $this->setModuleMode($arrValues['module_mode']);
        $this->setModuleAuth($arrValues['module_auth']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'module_id':
                    $this->setModuleId($val);
                    break;
                case 'module_enabled':
                    $this->setModuleEnabled($val);
                    break;
                case 'module_display':
                    $this->setModuleDisplay($val);
                    break;
                case 'module_basename':
                    $this->setModuleBasename($val);
                    break;
                case 'module_class':
                    $this->setModuleClass($val);
                    break;
                case 'parent_id':
                    $this->setParentId($val);
                    break;
                case 'left_id':
                    $this->setLeftId($val);
                    break;
                case 'right_id':
                    $this->setRightId($val);
                    break;
                case 'module_langname':
                    $this->setModuleLangname($val);
                    break;
                case 'module_mode':
                    $this->setModuleMode($val);
                    break;
                case 'module_auth':
                    $this->setModuleAuth($val);
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
        $arrValues['module_id'] = $this->getModuleId();
        $arrValues['module_enabled'] = $this->getModuleEnabled();
        $arrValues['module_display'] = $this->getModuleDisplay();
        $arrValues['module_basename'] = $this->getModuleBasename();
        $arrValues['module_class'] = $this->getModuleClass();
        $arrValues['parent_id'] = $this->getParentId();
        $arrValues['left_id'] = $this->getLeftId();
        $arrValues['right_id'] = $this->getRightId();
        $arrValues['module_langname'] = $this->getModuleLangname();
        $arrValues['module_mode'] = $this->getModuleMode();
        $arrValues['module_auth'] = $this->getModuleAuth();
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
