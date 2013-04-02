<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_SearchWordmatchBase
{
    protected $m_post_id;
    protected $m_word_id;
    protected $m_title_match;
    protected $m_post_id_Orig;
    protected $m_word_id_Orig;
    protected $m_title_match_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function SearchWordmatchBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPostId()
    {
        return $this->m_post_id;
    }
    public function setPostId($value)
    {
        $this->m_post_id = $value;
        $this->setOrigPostId($value);
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

    public function getTitleMatch()
    {
        return $this->m_title_match;
    }
    public function setTitleMatch($value)
    {
        $this->m_title_match = $value;
        $this->setOrigTitleMatch($value);
        return;
    }

    public function getOrigPostId()
    {
        return $this->m_post_id_Orig;
    }
    public function setOrigPostId($value)
    {
        if (isset($this->m_post_id_Orig)) { return; }
        $this->m_post_id_Orig = $value;
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

    public function getOrigTitleMatch()
    {
        return $this->m_title_match_Orig;
    }
    public function setOrigTitleMatch($value)
    {
        if (isset($this->m_title_match_Orig)) { return; }
        $this->m_title_match_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPostId($arrValues['post_id']);
        $this->setWordId($arrValues['word_id']);
        $this->setTitleMatch($arrValues['title_match']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'post_id':
                    $this->setPostId($val);
                    break;
                case 'word_id':
                    $this->setWordId($val);
                    break;
                case 'title_match':
                    $this->setTitleMatch($val);
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
        $arrValues['post_id'] = $this->getPostId();
        $arrValues['word_id'] = $this->getWordId();
        $arrValues['title_match'] = $this->getTitleMatch();
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
