<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_SearchResultsBase
{
    protected $m_search_key;
    protected $m_search_time;
    protected $m_search_keywords;
    protected $m_search_authors;
    protected $m_search_key_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setSearchTime(0);
        }
        return;
    }
    public function SearchResultsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSearchKey()
    {
        return $this->m_search_key;
    }
    public function setSearchKey($value)
    {
        $this->m_search_key = $value;
        $this->setOrigSearchKey($value);
        return;
    }

    public function getSearchTime()
    {
        return $this->m_search_time;
    }
    public function setSearchTime($value)
    {
        $this->m_search_time = $value;
        return;
    }

    public function getSearchKeywords()
    {
        return $this->m_search_keywords;
    }
    public function setSearchKeywords($value)
    {
        $this->m_search_keywords = $value;
        return;
    }

    public function getSearchAuthors()
    {
        return $this->m_search_authors;
    }
    public function setSearchAuthors($value)
    {
        $this->m_search_authors = $value;
        return;
    }

    public function getOrigSearchKey()
    {
        return $this->m_search_key_Orig;
    }
    public function setOrigSearchKey($value)
    {
        if (isset($this->m_search_key_Orig)) { return; }
        $this->m_search_key_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSearchKey($arrValues['search_key']);
        $this->setSearchTime($arrValues['search_time']);
        $this->setSearchKeywords($arrValues['search_keywords']);
        $this->setSearchAuthors($arrValues['search_authors']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'search_key':
                    $this->setSearchKey($val);
                    break;
                case 'search_time':
                    $this->setSearchTime($val);
                    break;
                case 'search_keywords':
                    $this->setSearchKeywords($val);
                    break;
                case 'search_authors':
                    $this->setSearchAuthors($val);
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
        $arrValues['search_key'] = $this->getSearchKey();
        $arrValues['search_time'] = $this->getSearchTime();
        $arrValues['search_keywords'] = $this->getSearchKeywords();
        $arrValues['search_authors'] = $this->getSearchAuthors();
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
