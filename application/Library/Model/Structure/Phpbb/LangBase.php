<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_LangBase
{
    protected $m_lang_id;
    protected $m_lang_iso;
    protected $m_lang_dir;
    protected $m_lang_english_name;
    protected $m_lang_local_name;
    protected $m_lang_author;
    protected $m_lang_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLangIso('');
            $this->setLangDir('');
            $this->setLangEnglishName('');
            $this->setLangLocalName('');
            $this->setLangAuthor('');
        }
        return;
    }
    public function LangBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getLangIso()
    {
        return $this->m_lang_iso;
    }
    public function setLangIso($value)
    {
        $this->m_lang_iso = $value;
        return;
    }

    public function getLangDir()
    {
        return $this->m_lang_dir;
    }
    public function setLangDir($value)
    {
        $this->m_lang_dir = $value;
        return;
    }

    public function getLangEnglishName()
    {
        return $this->m_lang_english_name;
    }
    public function setLangEnglishName($value)
    {
        $this->m_lang_english_name = $value;
        return;
    }

    public function getLangLocalName()
    {
        return $this->m_lang_local_name;
    }
    public function setLangLocalName($value)
    {
        $this->m_lang_local_name = $value;
        return;
    }

    public function getLangAuthor()
    {
        return $this->m_lang_author;
    }
    public function setLangAuthor($value)
    {
        $this->m_lang_author = $value;
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
        $this->setLangId($arrValues['lang_id']);
        $this->setLangIso($arrValues['lang_iso']);
        $this->setLangDir($arrValues['lang_dir']);
        $this->setLangEnglishName($arrValues['lang_english_name']);
        $this->setLangLocalName($arrValues['lang_local_name']);
        $this->setLangAuthor($arrValues['lang_author']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'lang_id':
                    $this->setLangId($val);
                    break;
                case 'lang_iso':
                    $this->setLangIso($val);
                    break;
                case 'lang_dir':
                    $this->setLangDir($val);
                    break;
                case 'lang_english_name':
                    $this->setLangEnglishName($val);
                    break;
                case 'lang_local_name':
                    $this->setLangLocalName($val);
                    break;
                case 'lang_author':
                    $this->setLangAuthor($val);
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
        $arrValues['lang_id'] = $this->getLangId();
        $arrValues['lang_iso'] = $this->getLangIso();
        $arrValues['lang_dir'] = $this->getLangDir();
        $arrValues['lang_english_name'] = $this->getLangEnglishName();
        $arrValues['lang_local_name'] = $this->getLangLocalName();
        $arrValues['lang_author'] = $this->getLangAuthor();
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
