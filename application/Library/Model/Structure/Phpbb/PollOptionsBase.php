<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_PollOptionsBase
{
    protected $m_poll_option_id;
    protected $m_topic_id;
    protected $m_poll_option_text;
    protected $m_poll_option_total;
    protected $m_poll_option_id_Orig;
    protected $m_topic_id_Orig;
    protected $m_poll_option_text_Orig;
    protected $m_poll_option_total_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function PollOptionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPollOptionId()
    {
        return $this->m_poll_option_id;
    }
    public function setPollOptionId($value)
    {
        $this->m_poll_option_id = $value;
        $this->setOrigPollOptionId($value);
        return;
    }

    public function getTopicId()
    {
        return $this->m_topic_id;
    }
    public function setTopicId($value)
    {
        $this->m_topic_id = $value;
        $this->setOrigTopicId($value);
        return;
    }

    public function getPollOptionText()
    {
        return $this->m_poll_option_text;
    }
    public function setPollOptionText($value)
    {
        $this->m_poll_option_text = $value;
        $this->setOrigPollOptionText($value);
        return;
    }

    public function getPollOptionTotal()
    {
        return $this->m_poll_option_total;
    }
    public function setPollOptionTotal($value)
    {
        $this->m_poll_option_total = $value;
        $this->setOrigPollOptionTotal($value);
        return;
    }

    public function getOrigPollOptionId()
    {
        return $this->m_poll_option_id_Orig;
    }
    public function setOrigPollOptionId($value)
    {
        if (isset($this->m_poll_option_id_Orig)) { return; }
        $this->m_poll_option_id_Orig = $value;
        return;
    }

    public function getOrigTopicId()
    {
        return $this->m_topic_id_Orig;
    }
    public function setOrigTopicId($value)
    {
        if (isset($this->m_topic_id_Orig)) { return; }
        $this->m_topic_id_Orig = $value;
        return;
    }

    public function getOrigPollOptionText()
    {
        return $this->m_poll_option_text_Orig;
    }
    public function setOrigPollOptionText($value)
    {
        if (isset($this->m_poll_option_text_Orig)) { return; }
        $this->m_poll_option_text_Orig = $value;
        return;
    }

    public function getOrigPollOptionTotal()
    {
        return $this->m_poll_option_total_Orig;
    }
    public function setOrigPollOptionTotal($value)
    {
        if (isset($this->m_poll_option_total_Orig)) { return; }
        $this->m_poll_option_total_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPollOptionId($arrValues['poll_option_id']);
        $this->setTopicId($arrValues['topic_id']);
        $this->setPollOptionText($arrValues['poll_option_text']);
        $this->setPollOptionTotal($arrValues['poll_option_total']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'poll_option_id':
                    $this->setPollOptionId($val);
                    break;
                case 'topic_id':
                    $this->setTopicId($val);
                    break;
                case 'poll_option_text':
                    $this->setPollOptionText($val);
                    break;
                case 'poll_option_total':
                    $this->setPollOptionTotal($val);
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
        $arrValues['poll_option_id'] = $this->getPollOptionId();
        $arrValues['topic_id'] = $this->getTopicId();
        $arrValues['poll_option_text'] = $this->getPollOptionText();
        $arrValues['poll_option_total'] = $this->getPollOptionTotal();
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
