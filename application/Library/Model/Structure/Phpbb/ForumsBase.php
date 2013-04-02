<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ForumsBase
{
    protected $m_forum_id;
    protected $m_parent_id;
    protected $m_left_id;
    protected $m_right_id;
    protected $m_forum_parents;
    protected $m_forum_name;
    protected $m_forum_desc;
    protected $m_forum_desc_bitfield;
    protected $m_forum_desc_options;
    protected $m_forum_desc_uid;
    protected $m_forum_link;
    protected $m_forum_password;
    protected $m_forum_style;
    protected $m_forum_image;
    protected $m_forum_rules;
    protected $m_forum_rules_link;
    protected $m_forum_rules_bitfield;
    protected $m_forum_rules_options;
    protected $m_forum_rules_uid;
    protected $m_forum_topics_per_page;
    protected $m_forum_type;
    protected $m_forum_status;
    protected $m_forum_posts;
    protected $m_forum_topics;
    protected $m_forum_topics_real;
    protected $m_forum_last_post_id;
    protected $m_forum_last_poster_id;
    protected $m_forum_last_post_subject;
    protected $m_forum_last_post_time;
    protected $m_forum_last_poster_name;
    protected $m_forum_last_poster_colour;
    protected $m_forum_flags;
    protected $m_forum_options;
    protected $m_display_subforum_list;
    protected $m_display_on_index;
    protected $m_enable_indexing;
    protected $m_enable_icons;
    protected $m_enable_prune;
    protected $m_prune_next;
    protected $m_prune_days;
    protected $m_prune_viewed;
    protected $m_prune_freq;
    protected $m_forum_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setParentId(0);
            $this->setLeftId(0);
            $this->setRightId(0);
            $this->setForumName('');
            $this->setForumDescBitfield('');
            $this->setForumDescOptions(7);
            $this->setForumDescUid('');
            $this->setForumLink('');
            $this->setForumPassword('');
            $this->setForumStyle(0);
            $this->setForumImage('');
            $this->setForumRulesLink('');
            $this->setForumRulesBitfield('');
            $this->setForumRulesOptions(7);
            $this->setForumRulesUid('');
            $this->setForumTopicsPerPage(0);
            $this->setForumType(0);
            $this->setForumStatus(0);
            $this->setForumPosts(0);
            $this->setForumTopics(0);
            $this->setForumTopicsReal(0);
            $this->setForumLastPostId(0);
            $this->setForumLastPosterId(0);
            $this->setForumLastPostSubject('');
            $this->setForumLastPostTime(0);
            $this->setForumLastPosterName('');
            $this->setForumLastPosterColour('');
            $this->setForumFlags(32);
            $this->setForumOptions(0);
            $this->setDisplaySubforumList(1);
            $this->setDisplayOnIndex(1);
            $this->setEnableIndexing(1);
            $this->setEnableIcons(1);
            $this->setEnablePrune(0);
            $this->setPruneNext(0);
            $this->setPruneDays(0);
            $this->setPruneViewed(0);
            $this->setPruneFreq(0);
        }
        return;
    }
    public function ForumsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getForumId()
    {
        return $this->m_forum_id;
    }
    public function setForumId($value)
    {
        $this->m_forum_id = $value;
        $this->setOrigForumId($value);
        return;
    }

    public function getParentId()
    {
        return $this->m_parent_id;
    }
    public function setParentId($value)
    {
        $this->m_parent_id = $value;
        return;
    }

    public function getLeftId()
    {
        return $this->m_left_id;
    }
    public function setLeftId($value)
    {
        $this->m_left_id = $value;
        return;
    }

    public function getRightId()
    {
        return $this->m_right_id;
    }
    public function setRightId($value)
    {
        $this->m_right_id = $value;
        return;
    }

    public function getForumParents()
    {
        return $this->m_forum_parents;
    }
    public function setForumParents($value)
    {
        $this->m_forum_parents = $value;
        return;
    }

    public function getForumName()
    {
        return $this->m_forum_name;
    }
    public function setForumName($value)
    {
        $this->m_forum_name = $value;
        return;
    }

    public function getForumDesc()
    {
        return $this->m_forum_desc;
    }
    public function setForumDesc($value)
    {
        $this->m_forum_desc = $value;
        return;
    }

    public function getForumDescBitfield()
    {
        return $this->m_forum_desc_bitfield;
    }
    public function setForumDescBitfield($value)
    {
        $this->m_forum_desc_bitfield = $value;
        return;
    }

    public function getForumDescOptions()
    {
        return $this->m_forum_desc_options;
    }
    public function setForumDescOptions($value)
    {
        $this->m_forum_desc_options = $value;
        return;
    }

    public function getForumDescUid()
    {
        return $this->m_forum_desc_uid;
    }
    public function setForumDescUid($value)
    {
        $this->m_forum_desc_uid = $value;
        return;
    }

    public function getForumLink()
    {
        return $this->m_forum_link;
    }
    public function setForumLink($value)
    {
        $this->m_forum_link = $value;
        return;
    }

    public function getForumPassword()
    {
        return $this->m_forum_password;
    }
    public function setForumPassword($value)
    {
        $this->m_forum_password = $value;
        return;
    }

    public function getForumStyle()
    {
        return $this->m_forum_style;
    }
    public function setForumStyle($value)
    {
        $this->m_forum_style = $value;
        return;
    }

    public function getForumImage()
    {
        return $this->m_forum_image;
    }
    public function setForumImage($value)
    {
        $this->m_forum_image = $value;
        return;
    }

    public function getForumRules()
    {
        return $this->m_forum_rules;
    }
    public function setForumRules($value)
    {
        $this->m_forum_rules = $value;
        return;
    }

    public function getForumRulesLink()
    {
        return $this->m_forum_rules_link;
    }
    public function setForumRulesLink($value)
    {
        $this->m_forum_rules_link = $value;
        return;
    }

    public function getForumRulesBitfield()
    {
        return $this->m_forum_rules_bitfield;
    }
    public function setForumRulesBitfield($value)
    {
        $this->m_forum_rules_bitfield = $value;
        return;
    }

    public function getForumRulesOptions()
    {
        return $this->m_forum_rules_options;
    }
    public function setForumRulesOptions($value)
    {
        $this->m_forum_rules_options = $value;
        return;
    }

    public function getForumRulesUid()
    {
        return $this->m_forum_rules_uid;
    }
    public function setForumRulesUid($value)
    {
        $this->m_forum_rules_uid = $value;
        return;
    }

    public function getForumTopicsPerPage()
    {
        return $this->m_forum_topics_per_page;
    }
    public function setForumTopicsPerPage($value)
    {
        $this->m_forum_topics_per_page = $value;
        return;
    }

    public function getForumType()
    {
        return $this->m_forum_type;
    }
    public function setForumType($value)
    {
        $this->m_forum_type = $value;
        return;
    }

    public function getForumStatus()
    {
        return $this->m_forum_status;
    }
    public function setForumStatus($value)
    {
        $this->m_forum_status = $value;
        return;
    }

    public function getForumPosts()
    {
        return $this->m_forum_posts;
    }
    public function setForumPosts($value)
    {
        $this->m_forum_posts = $value;
        return;
    }

    public function getForumTopics()
    {
        return $this->m_forum_topics;
    }
    public function setForumTopics($value)
    {
        $this->m_forum_topics = $value;
        return;
    }

    public function getForumTopicsReal()
    {
        return $this->m_forum_topics_real;
    }
    public function setForumTopicsReal($value)
    {
        $this->m_forum_topics_real = $value;
        return;
    }

    public function getForumLastPostId()
    {
        return $this->m_forum_last_post_id;
    }
    public function setForumLastPostId($value)
    {
        $this->m_forum_last_post_id = $value;
        return;
    }

    public function getForumLastPosterId()
    {
        return $this->m_forum_last_poster_id;
    }
    public function setForumLastPosterId($value)
    {
        $this->m_forum_last_poster_id = $value;
        return;
    }

    public function getForumLastPostSubject()
    {
        return $this->m_forum_last_post_subject;
    }
    public function setForumLastPostSubject($value)
    {
        $this->m_forum_last_post_subject = $value;
        return;
    }

    public function getForumLastPostTime()
    {
        return $this->m_forum_last_post_time;
    }
    public function setForumLastPostTime($value)
    {
        $this->m_forum_last_post_time = $value;
        return;
    }

    public function getForumLastPosterName()
    {
        return $this->m_forum_last_poster_name;
    }
    public function setForumLastPosterName($value)
    {
        $this->m_forum_last_poster_name = $value;
        return;
    }

    public function getForumLastPosterColour()
    {
        return $this->m_forum_last_poster_colour;
    }
    public function setForumLastPosterColour($value)
    {
        $this->m_forum_last_poster_colour = $value;
        return;
    }

    public function getForumFlags()
    {
        return $this->m_forum_flags;
    }
    public function setForumFlags($value)
    {
        $this->m_forum_flags = $value;
        return;
    }

    public function getForumOptions()
    {
        return $this->m_forum_options;
    }
    public function setForumOptions($value)
    {
        $this->m_forum_options = $value;
        return;
    }

    public function getDisplaySubforumList()
    {
        return $this->m_display_subforum_list;
    }
    public function setDisplaySubforumList($value)
    {
        $this->m_display_subforum_list = $value;
        return;
    }

    public function getDisplayOnIndex()
    {
        return $this->m_display_on_index;
    }
    public function setDisplayOnIndex($value)
    {
        $this->m_display_on_index = $value;
        return;
    }

    public function getEnableIndexing()
    {
        return $this->m_enable_indexing;
    }
    public function setEnableIndexing($value)
    {
        $this->m_enable_indexing = $value;
        return;
    }

    public function getEnableIcons()
    {
        return $this->m_enable_icons;
    }
    public function setEnableIcons($value)
    {
        $this->m_enable_icons = $value;
        return;
    }

    public function getEnablePrune()
    {
        return $this->m_enable_prune;
    }
    public function setEnablePrune($value)
    {
        $this->m_enable_prune = $value;
        return;
    }

    public function getPruneNext()
    {
        return $this->m_prune_next;
    }
    public function setPruneNext($value)
    {
        $this->m_prune_next = $value;
        return;
    }

    public function getPruneDays()
    {
        return $this->m_prune_days;
    }
    public function setPruneDays($value)
    {
        $this->m_prune_days = $value;
        return;
    }

    public function getPruneViewed()
    {
        return $this->m_prune_viewed;
    }
    public function setPruneViewed($value)
    {
        $this->m_prune_viewed = $value;
        return;
    }

    public function getPruneFreq()
    {
        return $this->m_prune_freq;
    }
    public function setPruneFreq($value)
    {
        $this->m_prune_freq = $value;
        return;
    }

    public function getOrigForumId()
    {
        return $this->m_forum_id_Orig;
    }
    public function setOrigForumId($value)
    {
        if (isset($this->m_forum_id_Orig)) { return; }
        $this->m_forum_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setForumId($arrValues['forum_id']);
        $this->setParentId($arrValues['parent_id']);
        $this->setLeftId($arrValues['left_id']);
        $this->setRightId($arrValues['right_id']);
        $this->setForumParents($arrValues['forum_parents']);
        $this->setForumName($arrValues['forum_name']);
        $this->setForumDesc($arrValues['forum_desc']);
        $this->setForumDescBitfield($arrValues['forum_desc_bitfield']);
        $this->setForumDescOptions($arrValues['forum_desc_options']);
        $this->setForumDescUid($arrValues['forum_desc_uid']);
        $this->setForumLink($arrValues['forum_link']);
        $this->setForumPassword($arrValues['forum_password']);
        $this->setForumStyle($arrValues['forum_style']);
        $this->setForumImage($arrValues['forum_image']);
        $this->setForumRules($arrValues['forum_rules']);
        $this->setForumRulesLink($arrValues['forum_rules_link']);
        $this->setForumRulesBitfield($arrValues['forum_rules_bitfield']);
        $this->setForumRulesOptions($arrValues['forum_rules_options']);
        $this->setForumRulesUid($arrValues['forum_rules_uid']);
        $this->setForumTopicsPerPage($arrValues['forum_topics_per_page']);
        $this->setForumType($arrValues['forum_type']);
        $this->setForumStatus($arrValues['forum_status']);
        $this->setForumPosts($arrValues['forum_posts']);
        $this->setForumTopics($arrValues['forum_topics']);
        $this->setForumTopicsReal($arrValues['forum_topics_real']);
        $this->setForumLastPostId($arrValues['forum_last_post_id']);
        $this->setForumLastPosterId($arrValues['forum_last_poster_id']);
        $this->setForumLastPostSubject($arrValues['forum_last_post_subject']);
        $this->setForumLastPostTime($arrValues['forum_last_post_time']);
        $this->setForumLastPosterName($arrValues['forum_last_poster_name']);
        $this->setForumLastPosterColour($arrValues['forum_last_poster_colour']);
        $this->setForumFlags($arrValues['forum_flags']);
        $this->setForumOptions($arrValues['forum_options']);
        $this->setDisplaySubforumList($arrValues['display_subforum_list']);
        $this->setDisplayOnIndex($arrValues['display_on_index']);
        $this->setEnableIndexing($arrValues['enable_indexing']);
        $this->setEnableIcons($arrValues['enable_icons']);
        $this->setEnablePrune($arrValues['enable_prune']);
        $this->setPruneNext($arrValues['prune_next']);
        $this->setPruneDays($arrValues['prune_days']);
        $this->setPruneViewed($arrValues['prune_viewed']);
        $this->setPruneFreq($arrValues['prune_freq']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'forum_id':
                    $this->setForumId($val);
                    break;
                case 'parent_id':
                    $this->setParentId($val);
                    break;
                case 'left_id':
                    $this->setLeftId($val);
                    break;
                case 'right_id':
                    $this->setRightId($val);
                    break;
                case 'forum_parents':
                    $this->setForumParents($val);
                    break;
                case 'forum_name':
                    $this->setForumName($val);
                    break;
                case 'forum_desc':
                    $this->setForumDesc($val);
                    break;
                case 'forum_desc_bitfield':
                    $this->setForumDescBitfield($val);
                    break;
                case 'forum_desc_options':
                    $this->setForumDescOptions($val);
                    break;
                case 'forum_desc_uid':
                    $this->setForumDescUid($val);
                    break;
                case 'forum_link':
                    $this->setForumLink($val);
                    break;
                case 'forum_password':
                    $this->setForumPassword($val);
                    break;
                case 'forum_style':
                    $this->setForumStyle($val);
                    break;
                case 'forum_image':
                    $this->setForumImage($val);
                    break;
                case 'forum_rules':
                    $this->setForumRules($val);
                    break;
                case 'forum_rules_link':
                    $this->setForumRulesLink($val);
                    break;
                case 'forum_rules_bitfield':
                    $this->setForumRulesBitfield($val);
                    break;
                case 'forum_rules_options':
                    $this->setForumRulesOptions($val);
                    break;
                case 'forum_rules_uid':
                    $this->setForumRulesUid($val);
                    break;
                case 'forum_topics_per_page':
                    $this->setForumTopicsPerPage($val);
                    break;
                case 'forum_type':
                    $this->setForumType($val);
                    break;
                case 'forum_status':
                    $this->setForumStatus($val);
                    break;
                case 'forum_posts':
                    $this->setForumPosts($val);
                    break;
                case 'forum_topics':
                    $this->setForumTopics($val);
                    break;
                case 'forum_topics_real':
                    $this->setForumTopicsReal($val);
                    break;
                case 'forum_last_post_id':
                    $this->setForumLastPostId($val);
                    break;
                case 'forum_last_poster_id':
                    $this->setForumLastPosterId($val);
                    break;
                case 'forum_last_post_subject':
                    $this->setForumLastPostSubject($val);
                    break;
                case 'forum_last_post_time':
                    $this->setForumLastPostTime($val);
                    break;
                case 'forum_last_poster_name':
                    $this->setForumLastPosterName($val);
                    break;
                case 'forum_last_poster_colour':
                    $this->setForumLastPosterColour($val);
                    break;
                case 'forum_flags':
                    $this->setForumFlags($val);
                    break;
                case 'forum_options':
                    $this->setForumOptions($val);
                    break;
                case 'display_subforum_list':
                    $this->setDisplaySubforumList($val);
                    break;
                case 'display_on_index':
                    $this->setDisplayOnIndex($val);
                    break;
                case 'enable_indexing':
                    $this->setEnableIndexing($val);
                    break;
                case 'enable_icons':
                    $this->setEnableIcons($val);
                    break;
                case 'enable_prune':
                    $this->setEnablePrune($val);
                    break;
                case 'prune_next':
                    $this->setPruneNext($val);
                    break;
                case 'prune_days':
                    $this->setPruneDays($val);
                    break;
                case 'prune_viewed':
                    $this->setPruneViewed($val);
                    break;
                case 'prune_freq':
                    $this->setPruneFreq($val);
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
        $arrValues['forum_id'] = $this->getForumId();
        $arrValues['parent_id'] = $this->getParentId();
        $arrValues['left_id'] = $this->getLeftId();
        $arrValues['right_id'] = $this->getRightId();
        $arrValues['forum_parents'] = $this->getForumParents();
        $arrValues['forum_name'] = $this->getForumName();
        $arrValues['forum_desc'] = $this->getForumDesc();
        $arrValues['forum_desc_bitfield'] = $this->getForumDescBitfield();
        $arrValues['forum_desc_options'] = $this->getForumDescOptions();
        $arrValues['forum_desc_uid'] = $this->getForumDescUid();
        $arrValues['forum_link'] = $this->getForumLink();
        $arrValues['forum_password'] = $this->getForumPassword();
        $arrValues['forum_style'] = $this->getForumStyle();
        $arrValues['forum_image'] = $this->getForumImage();
        $arrValues['forum_rules'] = $this->getForumRules();
        $arrValues['forum_rules_link'] = $this->getForumRulesLink();
        $arrValues['forum_rules_bitfield'] = $this->getForumRulesBitfield();
        $arrValues['forum_rules_options'] = $this->getForumRulesOptions();
        $arrValues['forum_rules_uid'] = $this->getForumRulesUid();
        $arrValues['forum_topics_per_page'] = $this->getForumTopicsPerPage();
        $arrValues['forum_type'] = $this->getForumType();
        $arrValues['forum_status'] = $this->getForumStatus();
        $arrValues['forum_posts'] = $this->getForumPosts();
        $arrValues['forum_topics'] = $this->getForumTopics();
        $arrValues['forum_topics_real'] = $this->getForumTopicsReal();
        $arrValues['forum_last_post_id'] = $this->getForumLastPostId();
        $arrValues['forum_last_poster_id'] = $this->getForumLastPosterId();
        $arrValues['forum_last_post_subject'] = $this->getForumLastPostSubject();
        $arrValues['forum_last_post_time'] = $this->getForumLastPostTime();
        $arrValues['forum_last_poster_name'] = $this->getForumLastPosterName();
        $arrValues['forum_last_poster_colour'] = $this->getForumLastPosterColour();
        $arrValues['forum_flags'] = $this->getForumFlags();
        $arrValues['forum_options'] = $this->getForumOptions();
        $arrValues['display_subforum_list'] = $this->getDisplaySubforumList();
        $arrValues['display_on_index'] = $this->getDisplayOnIndex();
        $arrValues['enable_indexing'] = $this->getEnableIndexing();
        $arrValues['enable_icons'] = $this->getEnableIcons();
        $arrValues['enable_prune'] = $this->getEnablePrune();
        $arrValues['prune_next'] = $this->getPruneNext();
        $arrValues['prune_days'] = $this->getPruneDays();
        $arrValues['prune_viewed'] = $this->getPruneViewed();
        $arrValues['prune_freq'] = $this->getPruneFreq();
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
