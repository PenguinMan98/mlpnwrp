<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ProfileFieldsBase
{
    protected $m_field_id;
    protected $m_field_name;
    protected $m_field_type;
    protected $m_field_ident;
    protected $m_field_length;
    protected $m_field_minlen;
    protected $m_field_maxlen;
    protected $m_field_novalue;
    protected $m_field_default_value;
    protected $m_field_validation;
    protected $m_field_required;
    protected $m_field_show_novalue;
    protected $m_field_show_on_reg;
    protected $m_field_show_on_vt;
    protected $m_field_show_profile;
    protected $m_field_hide;
    protected $m_field_no_view;
    protected $m_field_active;
    protected $m_field_order;
    protected $m_field_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setFieldName('');
            $this->setFieldType(0);
            $this->setFieldIdent('');
            $this->setFieldLength('');
            $this->setFieldMinlen('');
            $this->setFieldMaxlen('');
            $this->setFieldNovalue('');
            $this->setFieldDefaultValue('');
            $this->setFieldValidation('');
            $this->setFieldRequired(0);
            $this->setFieldShowNovalue(0);
            $this->setFieldShowOnReg(0);
            $this->setFieldShowOnVt(0);
            $this->setFieldShowProfile(0);
            $this->setFieldHide(0);
            $this->setFieldNoView(0);
            $this->setFieldActive(0);
            $this->setFieldOrder(0);
        }
        return;
    }
    public function ProfileFieldsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFieldId()
    {
        return $this->m_field_id;
    }
    public function setFieldId($value)
    {
        $this->m_field_id = $value;
        $this->setOrigFieldId($value);
        return;
    }

    public function getFieldName()
    {
        return $this->m_field_name;
    }
    public function setFieldName($value)
    {
        $this->m_field_name = $value;
        return;
    }

    public function getFieldType()
    {
        return $this->m_field_type;
    }
    public function setFieldType($value)
    {
        $this->m_field_type = $value;
        return;
    }

    public function getFieldIdent()
    {
        return $this->m_field_ident;
    }
    public function setFieldIdent($value)
    {
        $this->m_field_ident = $value;
        return;
    }

    public function getFieldLength()
    {
        return $this->m_field_length;
    }
    public function setFieldLength($value)
    {
        $this->m_field_length = $value;
        return;
    }

    public function getFieldMinlen()
    {
        return $this->m_field_minlen;
    }
    public function setFieldMinlen($value)
    {
        $this->m_field_minlen = $value;
        return;
    }

    public function getFieldMaxlen()
    {
        return $this->m_field_maxlen;
    }
    public function setFieldMaxlen($value)
    {
        $this->m_field_maxlen = $value;
        return;
    }

    public function getFieldNovalue()
    {
        return $this->m_field_novalue;
    }
    public function setFieldNovalue($value)
    {
        $this->m_field_novalue = $value;
        return;
    }

    public function getFieldDefaultValue()
    {
        return $this->m_field_default_value;
    }
    public function setFieldDefaultValue($value)
    {
        $this->m_field_default_value = $value;
        return;
    }

    public function getFieldValidation()
    {
        return $this->m_field_validation;
    }
    public function setFieldValidation($value)
    {
        $this->m_field_validation = $value;
        return;
    }

    public function getFieldRequired()
    {
        return $this->m_field_required;
    }
    public function setFieldRequired($value)
    {
        $this->m_field_required = $value;
        return;
    }

    public function getFieldShowNovalue()
    {
        return $this->m_field_show_novalue;
    }
    public function setFieldShowNovalue($value)
    {
        $this->m_field_show_novalue = $value;
        return;
    }

    public function getFieldShowOnReg()
    {
        return $this->m_field_show_on_reg;
    }
    public function setFieldShowOnReg($value)
    {
        $this->m_field_show_on_reg = $value;
        return;
    }

    public function getFieldShowOnVt()
    {
        return $this->m_field_show_on_vt;
    }
    public function setFieldShowOnVt($value)
    {
        $this->m_field_show_on_vt = $value;
        return;
    }

    public function getFieldShowProfile()
    {
        return $this->m_field_show_profile;
    }
    public function setFieldShowProfile($value)
    {
        $this->m_field_show_profile = $value;
        return;
    }

    public function getFieldHide()
    {
        return $this->m_field_hide;
    }
    public function setFieldHide($value)
    {
        $this->m_field_hide = $value;
        return;
    }

    public function getFieldNoView()
    {
        return $this->m_field_no_view;
    }
    public function setFieldNoView($value)
    {
        $this->m_field_no_view = $value;
        return;
    }

    public function getFieldActive()
    {
        return $this->m_field_active;
    }
    public function setFieldActive($value)
    {
        $this->m_field_active = $value;
        return;
    }

    public function getFieldOrder()
    {
        return $this->m_field_order;
    }
    public function setFieldOrder($value)
    {
        $this->m_field_order = $value;
        return;
    }

    public function getOrigFieldId()
    {
        return $this->m_field_id_Orig;
    }
    public function setOrigFieldId($value)
    {
        if (isset($this->m_field_id_Orig)) { return; }
        $this->m_field_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFieldId($arrValues['field_id']);
        $this->setFieldName($arrValues['field_name']);
        $this->setFieldType($arrValues['field_type']);
        $this->setFieldIdent($arrValues['field_ident']);
        $this->setFieldLength($arrValues['field_length']);
        $this->setFieldMinlen($arrValues['field_minlen']);
        $this->setFieldMaxlen($arrValues['field_maxlen']);
        $this->setFieldNovalue($arrValues['field_novalue']);
        $this->setFieldDefaultValue($arrValues['field_default_value']);
        $this->setFieldValidation($arrValues['field_validation']);
        $this->setFieldRequired($arrValues['field_required']);
        $this->setFieldShowNovalue($arrValues['field_show_novalue']);
        $this->setFieldShowOnReg($arrValues['field_show_on_reg']);
        $this->setFieldShowOnVt($arrValues['field_show_on_vt']);
        $this->setFieldShowProfile($arrValues['field_show_profile']);
        $this->setFieldHide($arrValues['field_hide']);
        $this->setFieldNoView($arrValues['field_no_view']);
        $this->setFieldActive($arrValues['field_active']);
        $this->setFieldOrder($arrValues['field_order']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'field_id':
                    $this->setFieldId($val);
                    break;
                case 'field_name':
                    $this->setFieldName($val);
                    break;
                case 'field_type':
                    $this->setFieldType($val);
                    break;
                case 'field_ident':
                    $this->setFieldIdent($val);
                    break;
                case 'field_length':
                    $this->setFieldLength($val);
                    break;
                case 'field_minlen':
                    $this->setFieldMinlen($val);
                    break;
                case 'field_maxlen':
                    $this->setFieldMaxlen($val);
                    break;
                case 'field_novalue':
                    $this->setFieldNovalue($val);
                    break;
                case 'field_default_value':
                    $this->setFieldDefaultValue($val);
                    break;
                case 'field_validation':
                    $this->setFieldValidation($val);
                    break;
                case 'field_required':
                    $this->setFieldRequired($val);
                    break;
                case 'field_show_novalue':
                    $this->setFieldShowNovalue($val);
                    break;
                case 'field_show_on_reg':
                    $this->setFieldShowOnReg($val);
                    break;
                case 'field_show_on_vt':
                    $this->setFieldShowOnVt($val);
                    break;
                case 'field_show_profile':
                    $this->setFieldShowProfile($val);
                    break;
                case 'field_hide':
                    $this->setFieldHide($val);
                    break;
                case 'field_no_view':
                    $this->setFieldNoView($val);
                    break;
                case 'field_active':
                    $this->setFieldActive($val);
                    break;
                case 'field_order':
                    $this->setFieldOrder($val);
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
        $arrValues['field_id'] = $this->getFieldId();
        $arrValues['field_name'] = $this->getFieldName();
        $arrValues['field_type'] = $this->getFieldType();
        $arrValues['field_ident'] = $this->getFieldIdent();
        $arrValues['field_length'] = $this->getFieldLength();
        $arrValues['field_minlen'] = $this->getFieldMinlen();
        $arrValues['field_maxlen'] = $this->getFieldMaxlen();
        $arrValues['field_novalue'] = $this->getFieldNovalue();
        $arrValues['field_default_value'] = $this->getFieldDefaultValue();
        $arrValues['field_validation'] = $this->getFieldValidation();
        $arrValues['field_required'] = $this->getFieldRequired();
        $arrValues['field_show_novalue'] = $this->getFieldShowNovalue();
        $arrValues['field_show_on_reg'] = $this->getFieldShowOnReg();
        $arrValues['field_show_on_vt'] = $this->getFieldShowOnVt();
        $arrValues['field_show_profile'] = $this->getFieldShowProfile();
        $arrValues['field_hide'] = $this->getFieldHide();
        $arrValues['field_no_view'] = $this->getFieldNoView();
        $arrValues['field_active'] = $this->getFieldActive();
        $arrValues['field_order'] = $this->getFieldOrder();
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
