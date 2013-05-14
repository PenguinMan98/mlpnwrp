<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ProfileFieldsLangBase
{
    protected $m_field_id;
    protected $m_lang_id;
    protected $m_option_id;
    protected $m_field_type;
    protected $m_lang_value;
    protected $m_field_id_Orig;
    protected $m_lang_id_Orig;
    protected $m_option_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setFieldType(0);
            $this->setLangValue('');
        }
        return;
    }
    public function ProfileFieldsLangBase($arrData = null)
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

    public function getLangId()
    {
        return $this->m_lang_id;
    }
    public function setLangId($value)
    {
        $this->m_lang_id = $value;
        $this->setOrigLangId($value);
        return;
    }

    public function getOptionId()
    {
        return $this->m_option_id;
    }
    public function setOptionId($value)
    {
        $this->m_option_id = $value;
        $this->setOrigOptionId($value);
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

    public function getLangValue()
    {
        return $this->m_lang_value;
    }
    public function setLangValue($value)
    {
        $this->m_lang_value = $value;
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

    public function getOrigLangId()
    {
        return $this->m_lang_id_Orig;
    }
    public function setOrigLangId($value)
    {
        if (isset($this->m_lang_id_Orig)) { return; }
        $this->m_lang_id_Orig = $value;
        return;
    }

    public function getOrigOptionId()
    {
        return $this->m_option_id_Orig;
    }
    public function setOrigOptionId($value)
    {
        if (isset($this->m_option_id_Orig)) { return; }
        $this->m_option_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFieldId($arrValues['field_id']);
        $this->setLangId($arrValues['lang_id']);
        $this->setOptionId($arrValues['option_id']);
        $this->setFieldType($arrValues['field_type']);
        $this->setLangValue($arrValues['lang_value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'field_id':
                    $this->setFieldId($val);
                    break;
                case 'lang_id':
                    $this->setLangId($val);
                    break;
                case 'option_id':
                    $this->setOptionId($val);
                    break;
                case 'field_type':
                    $this->setFieldType($val);
                    break;
                case 'lang_value':
                    $this->setLangValue($val);
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
        $arrValues['lang_id'] = $this->getLangId();
        $arrValues['option_id'] = $this->getOptionId();
        $arrValues['field_type'] = $this->getFieldType();
        $arrValues['lang_value'] = $this->getLangValue();
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
