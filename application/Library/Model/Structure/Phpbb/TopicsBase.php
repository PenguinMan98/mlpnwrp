<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_TopicsBase
{
    protected $m_topic_id;
    protected $m_forum_id;
    protected $m_icon_id;
    protected $m_topic_attachment;
    protected $m_topic_approved;
    protected $m_topic_reported;
    protected $m_topic_title;
    protected $m_topic_poster;
    protected $m_topic_time;
    protected $m_topic_time_limit;
    protected $m_topic_views;
    protected $m_topic_replies;
    protected $m_topic_replies_real;
    protected $m_topic_status;
    protected $m_topic_type;
    protected $m_topic_first_post_id;
    protected $m_topic_first_poster_name;
    protected $m_topic_first_poster_colour;
    protected $m_topic_last_post_id;
    protected $m_topic_last_poster_id;
    protected $m_topic_last_poster_name;
    protected $m_topic_last_poster_colour;
    protected $m_topic_last_post_subject;
    protected $m_topic_last_post_time;
    protected $m_topic_last_view_time;
    protected $m_topic_moved_id;
    protected $m_topic_bumped;
    protected $m_topic_bumper;
    protected $m_poll_title;
    protected $m_poll_start;
    protected $m_poll_length;
    protected $m_poll_max_options;
    protected $m_poll_last_vote;
    protected $m_poll_vote_change;
    protected $m_topic_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setForumId(0);
            $this->setIconId(0);
            $this->setTopicAttachment(0);
            $this->setTopicApproved(1);
            $this->setTopicReported(0);
            $this->setTopicTitle('');
            $this->setTopicPoster(0);
            $this->setTopicTime(0);
            $this->setTopicTimeLimit(0);
            $this->setTopicViews(0);
            $this->setTopicReplies(0);
            $this->setTopicRepliesReal(0);
            $this->setTopicStatus(0);
            $this->setTopicType(0);
            $this->setTopicFirstPostId(0);
            $this->setTopicFirstPosterName('');
            $this->setTopicFirstPosterColour('');
            $this->setTopicLastPostId(0);
            $this->setTopicLastPosterId(0);
            $this->setTopicLastPosterName('');
            $this->setTopicLastPosterColour('');
            $this->setTopicLastPostSubject('');
            $this->setTopicLastPostTime(0);
            $this->setTopicLastViewTime(0);
            $this->setTopicMovedId(0);
            $this->setTopicBumped(0);
            $this->setTopicBumper(0);
            $this->setPollTitle('');
            $this->setPollStart(0);
            $this->setPollLength(0);
            $this->setPollMaxOptions(1);
            $this->setPollLastVote(0);
            $this->setPollVoteChange(0);
        }
        return;
    }
    public function TopicsBase($arrData = null)
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

    public function getForumId()
    {
        return $this->m_forum_id;
    }
    public function setForumId($value)
    {
        $this->m_forum_id = $value;
        return;
    }

    public function getIconId()
    {
        return $this->m_icon_id;
    }
    public function setIconId($value)
    {
        $this->m_icon_id = $value;
        return;
    }

    public function getTopicAttachment()
    {
        return $this->m_topic_attachment;
    }
    public function setTopicAttachment($value)
    {
        $this->m_topic_attachment = $value;
        return;
    }

    public function getTopicApproved()
    {
        return $this->m_topic_approved;
    }
    public function setTopicApproved($value)
    {
        $this->m_topic_approved = $value;
        return;
    }

    public function getTopicReported()
    {
        return $this->m_topic_reported;
    }
    public function setTopicReported($value)
    {
        $this->m_topic_reported = $value;
        return;
    }

    public function getTopicTitle()
    {
        return $this->m_topic_title;
    }
    public function setTopicTitle($value)
    {
        $this->m_topic_title = $value;
        return;
    }

    public function getTopicPoster()
    {
        return $this->m_topic_poster;
    }
    public function setTopicPoster($value)
    {
        $this->m_topic_poster = $value;
        return;
    }

    public function getTopicTime()
    {
        return $this->m_topic_time;
    }
    public function setTopicTime($value)
    {
        $this->m_topic_time = $value;
        return;
    }

    public function getTopicTimeLimit()
    {
        return $this->m_topic_time_limit;
    }
    public function setTopicTimeLimit($value)
    {
        $this->m_topic_time_limit = $value;
        return;
    }

    public function getTopicViews()
    {
        return $this->m_topic_views;
    }
    public function setTopicViews($value)
    {
        $this->m_topic_views = $value;
        return;
    }

    public function getTopicReplies()
    {
        return $this->m_topic_replies;
    }
    public function setTopicReplies($value)
    {
        $this->m_topic_replies = $value;
        return;
    }

    public function getTopicRepliesReal()
    {
        return $this->m_topic_replies_real;
    }
    public function setTopicRepliesReal($value)
    {
        $this->m_topic_replies_real = $value;
        return;
    }

    public function getTopicStatus()
    {
        return $this->m_topic_status;
    }
    public function setTopicStatus($value)
    {
        $this->m_topic_status = $value;
        return;
    }

    public function getTopicType()
    {
        return $this->m_topic_type;
    }
    public function setTopicType($value)
    {
        $this->m_topic_type = $value;
        return;
    }

    public function getTopicFirstPostId()
    {
        return $this->m_topic_first_post_id;
    }
    public function setTopicFirstPostId($value)
    {
        $this->m_topic_first_post_id = $value;
        return;
    }

    public function getTopicFirstPosterName()
    {
        return $this->m_topic_first_poster_name;
    }
    public function setTopicFirstPosterName($value)
    {
        $this->m_topic_first_poster_name = $value;
        return;
    }

    public function getTopicFirstPosterColour()
    {
        return $this->m_topic_first_poster_colour;
    }
    public function setTopicFirstPosterColour($value)
    {
        $this->m_topic_first_poster_colour = $value;
        return;
    }

    public function getTopicLastPostId()
    {
        return $this->m_topic_last_post_id;
    }
    public function setTopicLastPostId($value)
    {
        $this->m_topic_last_post_id = $value;
        return;
    }

    public function getTopicLastPosterId()
    {
        return $this->m_topic_last_poster_id;
    }
    public function setTopicLastPosterId($value)
    {
        $this->m_topic_last_poster_id = $value;
        return;
    }

    public function getTopicLastPosterName()
    {
        return $this->m_topic_last_poster_name;
    }
    public function setTopicLastPosterName($value)
    {
        $this->m_topic_last_poster_name = $value;
        return;
    }

    public function getTopicLastPosterColour()
    {
        return $this->m_topic_last_poster_colour;
    }
    public function setTopicLastPosterColour($value)
    {
        $this->m_topic_last_poster_colour = $value;
        return;
    }

    public function getTopicLastPostSubject()
    {
        return $this->m_topic_last_post_subject;
    }
    public function setTopicLastPostSubject($value)
    {
        $this->m_topic_last_post_subject = $value;
        return;
    }

    public function getTopicLastPostTime()
    {
        return $this->m_topic_last_post_time;
    }
    public function setTopicLastPostTime($value)
    {
        $this->m_topic_last_post_time = $value;
        return;
    }

    public function getTopicLastViewTime()
    {
        return $this->m_topic_last_view_time;
    }
    public function setTopicLastViewTime($value)
    {
        $this->m_topic_last_view_time = $value;
        return;
    }

    public function getTopicMovedId()
    {
        return $this->m_topic_moved_id;
    }
    public function setTopicMovedId($value)
    {
        $this->m_topic_moved_id = $value;
        return;
    }

    public function getTopicBumped()
    {
        return $this->m_topic_bumped;
    }
    public function setTopicBumped($value)
    {
        $this->m_topic_bumped = $value;
        return;
    }

    public function getTopicBumper()
    {
        return $this->m_topic_bumper;
    }
    public function setTopicBumper($value)
    {
        $this->m_topic_bumper = $value;
        return;
    }

    public function getPollTitle()
    {
        return $this->m_poll_title;
    }
    public function setPollTitle($value)
    {
        $this->m_poll_title = $value;
        return;
    }

    public function getPollStart()
    {
        return $this->m_poll_start;
    }
    public function setPollStart($value)
    {
        $this->m_poll_start = $value;
        return;
    }

    public function getPollLength()
    {
        return $this->m_poll_length;
    }
    public function setPollLength($value)
    {
        $this->m_poll_length = $value;
        return;
    }

    public function getPollMaxOptions()
    {
        return $this->m_poll_max_options;
    }
    public function setPollMaxOptions($value)
    {
        $this->m_poll_max_options = $value;
        return;
    }

    public function getPollLastVote()
    {
        return $this->m_poll_last_vote;
    }
    public function setPollLastVote($value)
    {
        $this->m_poll_last_vote = $value;
        return;
    }

    public function getPollVoteChange()
    {
        return $this->m_poll_vote_change;
    }
    public function setPollVoteChange($value)
    {
        $this->m_poll_vote_change = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setTopicId($arrValues['topic_id']);
        $this->setForumId($arrValues['forum_id']);
        $this->setIconId($arrValues['icon_id']);
        $this->setTopicAttachment($arrValues['topic_attachment']);
        $this->setTopicApproved($arrValues['topic_approved']);
        $this->setTopicReported($arrValues['topic_reported']);
        $this->setTopicTitle($arrValues['topic_title']);
        $this->setTopicPoster($arrValues['topic_poster']);
        $this->setTopicTime($arrValues['topic_time']);
        $this->setTopicTimeLimit($arrValues['topic_time_limit']);
        $this->setTopicViews($arrValues['topic_views']);
        $this->setTopicReplies($arrValues['topic_replies']);
        $this->setTopicRepliesReal($arrValues['topic_replies_real']);
        $this->setTopicStatus($arrValues['topic_status']);
        $this->setTopicType($arrValues['topic_type']);
        $this->setTopicFirstPostId($arrValues['topic_first_post_id']);
        $this->setTopicFirstPosterName($arrValues['topic_first_poster_name']);
        $this->setTopicFirstPosterColour($arrValues['topic_first_poster_colour']);
        $this->setTopicLastPostId($arrValues['topic_last_post_id']);
        $this->setTopicLastPosterId($arrValues['topic_last_poster_id']);
        $this->setTopicLastPosterName($arrValues['topic_last_poster_name']);
        $this->setTopicLastPosterColour($arrValues['topic_last_poster_colour']);
        $this->setTopicLastPostSubject($arrValues['topic_last_post_subject']);
        $this->setTopicLastPostTime($arrValues['topic_last_post_time']);
        $this->setTopicLastViewTime($arrValues['topic_last_view_time']);
        $this->setTopicMovedId($arrValues['topic_moved_id']);
        $this->setTopicBumped($arrValues['topic_bumped']);
        $this->setTopicBumper($arrValues['topic_bumper']);
        $this->setPollTitle($arrValues['poll_title']);
        $this->setPollStart($arrValues['poll_start']);
        $this->setPollLength($arrValues['poll_length']);
        $this->setPollMaxOptions($arrValues['poll_max_options']);
        $this->setPollLastVote($arrValues['poll_last_vote']);
        $this->setPollVoteChange($arrValues['poll_vote_change']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'topic_id':
                    $this->setTopicId($val);
                    break;
                case 'forum_id':
                    $this->setForumId($val);
                    break;
                case 'icon_id':
                    $this->setIconId($val);
                    break;
                case 'topic_attachment':
                    $this->setTopicAttachment($val);
                    break;
                case 'topic_approved':
                    $this->setTopicApproved($val);
                    break;
                case 'topic_reported':
                    $this->setTopicReported($val);
                    break;
                case 'topic_title':
                    $this->setTopicTitle($val);
                    break;
                case 'topic_poster':
                    $this->setTopicPoster($val);
                    break;
                case 'topic_time':
                    $this->setTopicTime($val);
                    break;
                case 'topic_time_limit':
                    $this->setTopicTimeLimit($val);
                    break;
                case 'topic_views':
                    $this->setTopicViews($val);
                    break;
                case 'topic_replies':
                    $this->setTopicReplies($val);
                    break;
                case 'topic_replies_real':
                    $this->setTopicRepliesReal($val);
                    break;
                case 'topic_status':
                    $this->setTopicStatus($val);
                    break;
                case 'topic_type':
                    $this->setTopicType($val);
                    break;
                case 'topic_first_post_id':
                    $this->setTopicFirstPostId($val);
                    break;
                case 'topic_first_poster_name':
                    $this->setTopicFirstPosterName($val);
                    break;
                case 'topic_first_poster_colour':
                    $this->setTopicFirstPosterColour($val);
                    break;
                case 'topic_last_post_id':
                    $this->setTopicLastPostId($val);
                    break;
                case 'topic_last_poster_id':
                    $this->setTopicLastPosterId($val);
                    break;
                case 'topic_last_poster_name':
                    $this->setTopicLastPosterName($val);
                    break;
                case 'topic_last_poster_colour':
                    $this->setTopicLastPosterColour($val);
                    break;
                case 'topic_last_post_subject':
                    $this->setTopicLastPostSubject($val);
                    break;
                case 'topic_last_post_time':
                    $this->setTopicLastPostTime($val);
                    break;
                case 'topic_last_view_time':
                    $this->setTopicLastViewTime($val);
                    break;
                case 'topic_moved_id':
                    $this->setTopicMovedId($val);
                    break;
                case 'topic_bumped':
                    $this->setTopicBumped($val);
                    break;
                case 'topic_bumper':
                    $this->setTopicBumper($val);
                    break;
                case 'poll_title':
                    $this->setPollTitle($val);
                    break;
                case 'poll_start':
                    $this->setPollStart($val);
                    break;
                case 'poll_length':
                    $this->setPollLength($val);
                    break;
                case 'poll_max_options':
                    $this->setPollMaxOptions($val);
                    break;
                case 'poll_last_vote':
                    $this->setPollLastVote($val);
                    break;
                case 'poll_vote_change':
                    $this->setPollVoteChange($val);
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
        $arrValues['forum_id'] = $this->getForumId();
        $arrValues['icon_id'] = $this->getIconId();
        $arrValues['topic_attachment'] = $this->getTopicAttachment();
        $arrValues['topic_approved'] = $this->getTopicApproved();
        $arrValues['topic_reported'] = $this->getTopicReported();
        $arrValues['topic_title'] = $this->getTopicTitle();
        $arrValues['topic_poster'] = $this->getTopicPoster();
        $arrValues['topic_time'] = $this->getTopicTime();
        $arrValues['topic_time_limit'] = $this->getTopicTimeLimit();
        $arrValues['topic_views'] = $this->getTopicViews();
        $arrValues['topic_replies'] = $this->getTopicReplies();
        $arrValues['topic_replies_real'] = $this->getTopicRepliesReal();
        $arrValues['topic_status'] = $this->getTopicStatus();
        $arrValues['topic_type'] = $this->getTopicType();
        $arrValues['topic_first_post_id'] = $this->getTopicFirstPostId();
        $arrValues['topic_first_poster_name'] = $this->getTopicFirstPosterName();
        $arrValues['topic_first_poster_colour'] = $this->getTopicFirstPosterColour();
        $arrValues['topic_last_post_id'] = $this->getTopicLastPostId();
        $arrValues['topic_last_poster_id'] = $this->getTopicLastPosterId();
        $arrValues['topic_last_poster_name'] = $this->getTopicLastPosterName();
        $arrValues['topic_last_poster_colour'] = $this->getTopicLastPosterColour();
        $arrValues['topic_last_post_subject'] = $this->getTopicLastPostSubject();
        $arrValues['topic_last_post_time'] = $this->getTopicLastPostTime();
        $arrValues['topic_last_view_time'] = $this->getTopicLastViewTime();
        $arrValues['topic_moved_id'] = $this->getTopicMovedId();
        $arrValues['topic_bumped'] = $this->getTopicBumped();
        $arrValues['topic_bumper'] = $this->getTopicBumper();
        $arrValues['poll_title'] = $this->getPollTitle();
        $arrValues['poll_start'] = $this->getPollStart();
        $arrValues['poll_length'] = $this->getPollLength();
        $arrValues['poll_max_options'] = $this->getPollMaxOptions();
        $arrValues['poll_last_vote'] = $this->getPollLastVote();
        $arrValues['poll_vote_change'] = $this->getPollVoteChange();
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
