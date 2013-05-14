<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ProfileLangBase
{
    protected $m_field_id;
    protected $m_lang_id;
    protected $m_lang_name;
    protected $m_lang_explain;
    protected $m_lang_default_value;
    protected $m_field_id_Orig;
    protected $m_lang_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLangName('');
            $this->setLangDefaultValue('');
        }
        return;
    }
    public function ProfileLangBase($arrData = null)
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

    public function getLangName()
    {
        return $this->m_lang_name;
    }
    public function setLangName($value)
    {
        $this->m_lang_name = $value;
        return;
    }

    public function getLangExplain()
    {
        return $this->m_lang_explain;
    }
    public function setLangExplain($value)
    {
        $this->m_lang_explain = $value;
        return;
    }

    public function getLangDefaultValue()
    {
        return $this->m_lang_default_value;
    }
    public function setLangDefaultValue($value)
    {
        $this->m_lang_default_value = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setFieldId($arrValues['field_id']);
        $this->setLangId($arrValues['lang_id']);
        $this->setLangName($arrValues['lang_name']);
        $this->setLangExplain($arrValues['lang_explain']);
        $this->setLangDefaultValue($arrValues['lang_default_value']);
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
                case 'lang_name':
                    $this->setLangName($val);
                    break;
                case 'lang_explain':
                    $this->setLangExplain($val);
                    break;
                case 'lang_default_value':
                    $this->setLangDefaultValue($val);
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
        $arrValues['lang_name'] = $this->getLangName();
        $arrValues['lang_explain'] = $this->getLangExplain();
        $arrValues['lang_default_value'] = $this->getLangDefaultValue();
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
