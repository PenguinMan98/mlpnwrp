<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_WordsBase
{
    protected $m_word_id;
    protected $m_word;
    protected $m_replacement;
    protected $m_word_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setWord('');
            $this->setReplacement('');
        }
        return;
    }
    public function WordsBase($arrData = null)
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

    public function getWord()
    {
        return $this->m_word;
    }
    public function setWord($value)
    {
        $this->m_word = $value;
        return;
    }

    public function getReplacement()
    {
        return $this->m_replacement;
    }
    public function setReplacement($value)
    {
        $this->m_replacement = $value;
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
        $this->setWord($arrValues['word']);
        $this->setReplacement($arrValues['replacement']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'word_id':
                    $this->setWordId($val);
                    break;
                case 'word':
                    $this->setWord($val);
                    break;
                case 'replacement':
                    $this->setReplacement($val);
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
        $arrValues['word'] = $this->getWord();
        $arrValues['replacement'] = $this->getReplacement();
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
