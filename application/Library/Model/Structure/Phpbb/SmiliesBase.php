<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_SmiliesBase
{
    protected $m_smiley_id;
    protected $m_code;
    protected $m_emotion;
    protected $m_smiley_url;
    protected $m_smiley_width;
    protected $m_smiley_height;
    protected $m_smiley_order;
    protected $m_display_on_posting;
    protected $m_smiley_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCode('');
            $this->setEmotion('');
            $this->setSmileyUrl('');
            $this->setSmileyWidth(0);
            $this->setSmileyHeight(0);
            $this->setSmileyOrder(0);
            $this->setDisplayOnPosting(1);
        }
        return;
    }
    public function SmiliesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSmileyId()
    {
        return $this->m_smiley_id;
    }
    public function setSmileyId($value)
    {
        $this->m_smiley_id = $value;
        $this->setOrigSmileyId($value);
        return;
    }

    public function getCode()
    {
        return $this->m_code;
    }
    public function setCode($value)
    {
        $this->m_code = $value;
        return;
    }

    public function getEmotion()
    {
        return $this->m_emotion;
    }
    public function setEmotion($value)
    {
        $this->m_emotion = $value;
        return;
    }

    public function getSmileyUrl()
    {
        return $this->m_smiley_url;
    }
    public function setSmileyUrl($value)
    {
        $this->m_smiley_url = $value;
        return;
    }

    public function getSmileyWidth()
    {
        return $this->m_smiley_width;
    }
    public function setSmileyWidth($value)
    {
        $this->m_smiley_width = $value;
        return;
    }

    public function getSmileyHeight()
    {
        return $this->m_smiley_height;
    }
    public function setSmileyHeight($value)
    {
        $this->m_smiley_height = $value;
        return;
    }

    public function getSmileyOrder()
    {
        return $this->m_smiley_order;
    }
    public function setSmileyOrder($value)
    {
        $this->m_smiley_order = $value;
        return;
    }

    public function getDisplayOnPosting()
    {
        return $this->m_display_on_posting;
    }
    public function setDisplayOnPosting($value)
    {
        $this->m_display_on_posting = $value;
        return;
    }

    public function getOrigSmileyId()
    {
        return $this->m_smiley_id_Orig;
    }
    public function setOrigSmileyId($value)
    {
        if (isset($this->m_smiley_id_Orig)) { return; }
        $this->m_smiley_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSmileyId($arrValues['smiley_id']);
        $this->setCode($arrValues['code']);
        $this->setEmotion($arrValues['emotion']);
        $this->setSmileyUrl($arrValues['smiley_url']);
        $this->setSmileyWidth($arrValues['smiley_width']);
        $this->setSmileyHeight($arrValues['smiley_height']);
        $this->setSmileyOrder($arrValues['smiley_order']);
        $this->setDisplayOnPosting($arrValues['display_on_posting']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'smiley_id':
                    $this->setSmileyId($val);
                    break;
                case 'code':
                    $this->setCode($val);
                    break;
                case 'emotion':
                    $this->setEmotion($val);
                    break;
                case 'smiley_url':
                    $this->setSmileyUrl($val);
                    break;
                case 'smiley_width':
                    $this->setSmileyWidth($val);
                    break;
                case 'smiley_height':
                    $this->setSmileyHeight($val);
                    break;
                case 'smiley_order':
                    $this->setSmileyOrder($val);
                    break;
                case 'display_on_posting':
                    $this->setDisplayOnPosting($val);
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
        $arrValues['smiley_id'] = $this->getSmileyId();
        $arrValues['code'] = $this->getCode();
        $arrValues['emotion'] = $this->getEmotion();
        $arrValues['smiley_url'] = $this->getSmileyUrl();
        $arrValues['smiley_width'] = $this->getSmileyWidth();
        $arrValues['smiley_height'] = $this->getSmileyHeight();
        $arrValues['smiley_order'] = $this->getSmileyOrder();
        $arrValues['display_on_posting'] = $this->getDisplayOnPosting();
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
