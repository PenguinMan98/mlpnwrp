<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_RanksBase
{
    protected $m_rank_id;
    protected $m_rank_title;
    protected $m_rank_min;
    protected $m_rank_special;
    protected $m_rank_image;
    protected $m_rank_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setRankTitle('');
            $this->setRankMin(0);
            $this->setRankSpecial(0);
            $this->setRankImage('');
        }
        return;
    }
    public function RanksBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRankId()
    {
        return $this->m_rank_id;
    }
    public function setRankId($value)
    {
        $this->m_rank_id = $value;
        $this->setOrigRankId($value);
        return;
    }

    public function getRankTitle()
    {
        return $this->m_rank_title;
    }
    public function setRankTitle($value)
    {
        $this->m_rank_title = $value;
        return;
    }

    public function getRankMin()
    {
        return $this->m_rank_min;
    }
    public function setRankMin($value)
    {
        $this->m_rank_min = $value;
        return;
    }

    public function getRankSpecial()
    {
        return $this->m_rank_special;
    }
    public function setRankSpecial($value)
    {
        $this->m_rank_special = $value;
        return;
    }

    public function getRankImage()
    {
        return $this->m_rank_image;
    }
    public function setRankImage($value)
    {
        $this->m_rank_image = $value;
        return;
    }

    public function getOrigRankId()
    {
        return $this->m_rank_id_Orig;
    }
    public function setOrigRankId($value)
    {
        if (isset($this->m_rank_id_Orig)) { return; }
        $this->m_rank_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRankId($arrValues['rank_id']);
        $this->setRankTitle($arrValues['rank_title']);
        $this->setRankMin($arrValues['rank_min']);
        $this->setRankSpecial($arrValues['rank_special']);
        $this->setRankImage($arrValues['rank_image']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'rank_id':
                    $this->setRankId($val);
                    break;
                case 'rank_title':
                    $this->setRankTitle($val);
                    break;
                case 'rank_min':
                    $this->setRankMin($val);
                    break;
                case 'rank_special':
                    $this->setRankSpecial($val);
                    break;
                case 'rank_image':
                    $this->setRankImage($val);
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
        $arrValues['rank_id'] = $this->getRankId();
        $arrValues['rank_title'] = $this->getRankTitle();
        $arrValues['rank_min'] = $this->getRankMin();
        $arrValues['rank_special'] = $this->getRankSpecial();
        $arrValues['rank_image'] = $this->getRankImage();
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
