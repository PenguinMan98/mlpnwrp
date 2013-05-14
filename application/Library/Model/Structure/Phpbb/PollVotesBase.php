<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_PollVotesBase
{
    protected $m_topic_id;
    protected $m_poll_option_id;
    protected $m_vote_user_id;
    protected $m_vote_user_ip;
    protected $m_topic_id_Orig;
    protected $m_poll_option_id_Orig;
    protected $m_vote_user_id_Orig;
    protected $m_vote_user_ip_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function PollVotesBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getVoteUserId()
    {
        return $this->m_vote_user_id;
    }
    public function setVoteUserId($value)
    {
        $this->m_vote_user_id = $value;
        $this->setOrigVoteUserId($value);
        return;
    }

    public function getVoteUserIp()
    {
        return $this->m_vote_user_ip;
    }
    public function setVoteUserIp($value)
    {
        $this->m_vote_user_ip = $value;
        $this->setOrigVoteUserIp($value);
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

    public function getOrigVoteUserId()
    {
        return $this->m_vote_user_id_Orig;
    }
    public function setOrigVoteUserId($value)
    {
        if (isset($this->m_vote_user_id_Orig)) { return; }
        $this->m_vote_user_id_Orig = $value;
        return;
    }

    public function getOrigVoteUserIp()
    {
        return $this->m_vote_user_ip_Orig;
    }
    public function setOrigVoteUserIp($value)
    {
        if (isset($this->m_vote_user_ip_Orig)) { return; }
        $this->m_vote_user_ip_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTopicId($arrValues['topic_id']);
        $this->setPollOptionId($arrValues['poll_option_id']);
        $this->setVoteUserId($arrValues['vote_user_id']);
        $this->setVoteUserIp($arrValues['vote_user_ip']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'topic_id':
                    $this->setTopicId($val);
                    break;
                case 'poll_option_id':
                    $this->setPollOptionId($val);
                    break;
                case 'vote_user_id':
                    $this->setVoteUserId($val);
                    break;
                case 'vote_user_ip':
                    $this->setVoteUserIp($val);
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
        $arrValues['topic_id'] = $this->getTopicId();
        $arrValues['poll_option_id'] = $this->getPollOptionId();
        $arrValues['vote_user_id'] = $this->getVoteUserId();
        $arrValues['vote_user_ip'] = $this->getVoteUserIp();
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
