<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_SearchWordlistBase
{
    protected $m_word_id;
    protected $m_word_text;
    protected $m_word_common;
    protected $m_word_count;
    protected $m_word_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setWordText('');
            $this->setWordCommon(0);
            $this->setWordCount(0);
        }
        return;
    }
    public function SearchWordlistBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getWordId()
    {
        return $this->m_word_id;
    }
    public function setWordId($value)
    {
        $this->m_word_id = $value;
        $this->setOrigWordId($value);
        return;
    }

    public function getWordText()
    {
        return $this->m_word_text;
    }
    public function setWordText($value)
    {
        $this->m_word_text = $value;
        return;
    }

    public function getWordCommon()
    {
        return $this->m_word_common;
    }
    public function setWordCommon($value)
    {
        $this->m_word_common = $value;
        return;
    }

    public function getWordCount()
    {
        return $this->m_word_count;
    }
    public function setWordCount($value)
    {
        $this->m_word_count = $value;
        return;
    }

    public function getOrigWordId()
    {
        return $this->m_word_id_Orig;
    }
    public function setOrigWordId($value)
    {
        if (isset($this->m_word_id_Orig)) { return; }
        $this->m_word_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setWordId($arrValues['word_id']);
        $this->setWordText($arrValues['word_text']);
        $this->setWordCommon($arrValues['word_common']);
        $this->setWordCount($arrValues['word_count']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'word_id':
                    $this->setWordId($val);
                    break;
                case 'word_text':
                    $this->setWordText($val);
                    break;
                case 'word_common':
                    $this->setWordCommon($val);
                    break;
                case 'word_count':
                    $this->setWordCount($val);
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
        $arrValues['word_id'] = $this->getWordId();
        $arrValues['word_text'] = $this->getWordText();
        $arrValues['word_common'] = $this->getWordCommon();
        $arrValues['word_count'] = $this->getWordCount();
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
