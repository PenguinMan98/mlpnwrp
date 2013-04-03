<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_BbcodesBase
{
    protected $m_bbcode_id;
    protected $m_bbcode_tag;
    protected $m_bbcode_helpline;
    protected $m_display_on_posting;
    protected $m_bbcode_match;
    protected $m_bbcode_tpl;
    protected $m_first_pass_match;
    protected $m_first_pass_replace;
    protected $m_second_pass_match;
    protected $m_second_pass_replace;
    protected $m_bbcode_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setBbcodeTag('');
            $this->setBbcodeHelpline('');
            $this->setDisplayOnPosting(0);
        }
        return;
    }
    public function BbcodesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBbcodeId()
    {
        return $this->m_bbcode_id;
    }
    public function setBbcodeId($value)
    {
        $this->m_bbcode_id = $value;
        $this->setOrigBbcodeId($value);
        return;
    }

    public function getBbcodeTag()
    {
        return $this->m_bbcode_tag;
    }
    public function setBbcodeTag($value)
    {
        $this->m_bbcode_tag = $value;
        return;
    }

    public function getBbcodeHelpline()
    {
        return $this->m_bbcode_helpline;
    }
    public function setBbcodeHelpline($value)
    {
        $this->m_bbcode_helpline = $value;
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

    public function getBbcodeMatch()
    {
        return $this->m_bbcode_match;
    }
    public function setBbcodeMatch($value)
    {
        $this->m_bbcode_match = $value;
        return;
    }

    public function getBbcodeTpl()
    {
        return $this->m_bbcode_tpl;
    }
    public function setBbcodeTpl($value)
    {
        $this->m_bbcode_tpl = $value;
        return;
    }

    public function getFirstPassMatch()
    {
        return $this->m_first_pass_match;
    }
    public function setFirstPassMatch($value)
    {
        $this->m_first_pass_match = $value;
        return;
    }

    public function getFirstPassReplace()
    {
        return $this->m_first_pass_replace;
    }
    public function setFirstPassReplace($value)
    {
        $this->m_first_pass_replace = $value;
        return;
    }

    public function getSecondPassMatch()
    {
        return $this->m_second_pass_match;
    }
    public function setSecondPassMatch($value)
    {
        $this->m_second_pass_match = $value;
        return;
    }

    public function getSecondPassReplace()
    {
        return $this->m_second_pass_replace;
    }
    public function setSecondPassReplace($value)
    {
        $this->m_second_pass_replace = $value;
        return;
    }

    public function getOrigBbcodeId()
    {
        return $this->m_bbcode_id_Orig;
    }
    public function setOrigBbcodeId($value)
    {
        if (isset($this->m_bbcode_id_Orig)) { return; }
        $this->m_bbcode_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBbcodeId($arrValues['bbcode_id']);
        $this->setBbcodeTag($arrValues['bbcode_tag']);
        $this->setBbcodeHelpline($arrValues['bbcode_helpline']);
        $this->setDisplayOnPosting($arrValues['display_on_posting']);
        $this->setBbcodeMatch($arrValues['bbcode_match']);
        $this->setBbcodeTpl($arrValues['bbcode_tpl']);
        $this->setFirstPassMatch($arrValues['first_pass_match']);
        $this->setFirstPassReplace($arrValues['first_pass_replace']);
        $this->setSecondPassMatch($arrValues['second_pass_match']);
        $this->setSecondPassReplace($arrValues['second_pass_replace']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'bbcode_id':
                    $this->setBbcodeId($val);
                    break;
                case 'bbcode_tag':
                    $this->setBbcodeTag($val);
                    break;
                case 'bbcode_helpline':
                    $this->setBbcodeHelpline($val);
                    break;
                case 'display_on_posting':
                    $this->setDisplayOnPosting($val);
                    break;
                case 'bbcode_match':
                    $this->setBbcodeMatch($val);
                    break;
                case 'bbcode_tpl':
                    $this->setBbcodeTpl($val);
                    break;
                case 'first_pass_match':
                    $this->setFirstPassMatch($val);
                    break;
                case 'first_pass_replace':
                    $this->setFirstPassReplace($val);
                    break;
                case 'second_pass_match':
                    $this->setSecondPassMatch($val);
                    break;
                case 'second_pass_replace':
                    $this->setSecondPassReplace($val);
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
        $arrValues['bbcode_id'] = $this->getBbcodeId();
        $arrValues['bbcode_tag'] = $this->getBbcodeTag();
        $arrValues['bbcode_helpline'] = $this->getBbcodeHelpline();
        $arrValues['display_on_posting'] = $this->getDisplayOnPosting();
        $arrValues['bbcode_match'] = $this->getBbcodeMatch();
        $arrValues['bbcode_tpl'] = $this->getBbcodeTpl();
        $arrValues['first_pass_match'] = $this->getFirstPassMatch();
        $arrValues['first_pass_replace'] = $this->getFirstPassReplace();
        $arrValues['second_pass_match'] = $this->getSecondPassMatch();
        $arrValues['second_pass_replace'] = $this->getSecondPassReplace();
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
