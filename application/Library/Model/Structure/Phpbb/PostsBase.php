<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_PostsBase
{
    protected $m_post_id;
    protected $m_topic_id;
    protected $m_forum_id;
    protected $m_poster_id;
    protected $m_icon_id;
    protected $m_poster_ip;
    protected $m_post_time;
    protected $m_post_approved;
    protected $m_post_reported;
    protected $m_enable_bbcode;
    protected $m_enable_smilies;
    protected $m_enable_magic_url;
    protected $m_enable_sig;
    protected $m_post_username;
    protected $m_post_subject;
    protected $m_post_text;
    protected $m_post_checksum;
    protected $m_post_attachment;
    protected $m_bbcode_bitfield;
    protected $m_bbcode_uid;
    protected $m_post_postcount;
    protected $m_post_edit_time;
    protected $m_post_edit_reason;
    protected $m_post_edit_user;
    protected $m_post_edit_count;
    protected $m_post_edit_locked;
    protected $m_post_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTopicId(0);
            $this->setForumId(0);
            $this->setPosterId(0);
            $this->setIconId(0);
            $this->setPosterIp('');
            $this->setPostTime(0);
            $this->setPostApproved(1);
            $this->setPostReported(0);
            $this->setEnableBbcode(1);
            $this->setEnableSmilies(1);
            $this->setEnableMagicUrl(1);
            $this->setEnableSig(1);
            $this->setPostUsername('');
            $this->setPostSubject('');
            $this->setPostChecksum('');
            $this->setPostAttachment(0);
            $this->setBbcodeBitfield('');
            $this->setBbcodeUid('');
            $this->setPostPostcount(1);
            $this->setPostEditTime(0);
            $this->setPostEditReason('');
            $this->setPostEditUser(0);
            $this->setPostEditCount(0);
            $this->setPostEditLocked(0);
        }
        return;
    }
    public function PostsBase($arrData = null)
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

    public function getTopicId()
    {
        return $this->m_topic_id;
    }
    public function setTopicId($value)
    {
        $this->m_topic_id = $value;
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

    public function getPosterId()
    {
        return $this->m_poster_id;
    }
    public function setPosterId($value)
    {
        $this->m_poster_id = $value;
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

    public function getPosterIp()
    {
        return $this->m_poster_ip;
    }
    public function setPosterIp($value)
    {
        $this->m_poster_ip = $value;
        return;
    }

    public function getPostTime()
    {
        return $this->m_post_time;
    }
    public function setPostTime($value)
    {
        $this->m_post_time = $value;
        return;
    }

    public function getPostApproved()
    {
        return $this->m_post_approved;
    }
    public function setPostApproved($value)
    {
        $this->m_post_approved = $value;
        return;
    }

    public function getPostReported()
    {
        return $this->m_post_reported;
    }
    public function setPostReported($value)
    {
        $this->m_post_reported = $value;
        return;
    }

    public function getEnableBbcode()
    {
        return $this->m_enable_bbcode;
    }
    public function setEnableBbcode($value)
    {
        $this->m_enable_bbcode = $value;
        return;
    }

    public function getEnableSmilies()
    {
        return $this->m_enable_smilies;
    }
    public function setEnableSmilies($value)
    {
        $this->m_enable_smilies = $value;
        return;
    }

    public function getEnableMagicUrl()
    {
        return $this->m_enable_magic_url;
    }
    public function setEnableMagicUrl($value)
    {
        $this->m_enable_magic_url = $value;
        return;
    }

    public function getEnableSig()
    {
        return $this->m_enable_sig;
    }
    public function setEnableSig($value)
    {
        $this->m_enable_sig = $value;
        return;
    }

    public function getPostUsername()
    {
        return $this->m_post_username;
    }
    public function setPostUsername($value)
    {
        $this->m_post_username = $value;
        return;
    }

    public function getPostSubject()
    {
        return $this->m_post_subject;
    }
    public function setPostSubject($value)
    {
        $this->m_post_subject = $value;
        return;
    }

    public function getPostText()
    {
        return $this->m_post_text;
    }
    public function setPostText($value)
    {
        $this->m_post_text = $value;
        return;
    }

    public function getPostChecksum()
    {
        return $this->m_post_checksum;
    }
    public function setPostChecksum($value)
    {
        $this->m_post_checksum = $value;
        return;
    }

    public function getPostAttachment()
    {
        return $this->m_post_attachment;
    }
    public function setPostAttachment($value)
    {
        $this->m_post_attachment = $value;
        return;
    }

    public function getBbcodeBitfield()
    {
        return $this->m_bbcode_bitfield;
    }
    public function setBbcodeBitfield($value)
    {
        $this->m_bbcode_bitfield = $value;
        return;
    }

    public function getBbcodeUid()
    {
        return $this->m_bbcode_uid;
    }
    public function setBbcodeUid($value)
    {
        $this->m_bbcode_uid = $value;
        return;
    }

    public function getPostPostcount()
    {
        return $this->m_post_postcount;
    }
    public function setPostPostcount($value)
    {
        $this->m_post_postcount = $value;
        return;
    }

    public function getPostEditTime()
    {
        return $this->m_post_edit_time;
    }
    public function setPostEditTime($value)
    {
        $this->m_post_edit_time = $value;
        return;
    }

    public function getPostEditReason()
    {
        return $this->m_post_edit_reason;
    }
    public function setPostEditReason($value)
    {
        $this->m_post_edit_reason = $value;
        return;
    }

    public function getPostEditUser()
    {
        return $this->m_post_edit_user;
    }
    public function setPostEditUser($value)
    {
        $this->m_post_edit_user = $value;
        return;
    }

    public function getPostEditCount()
    {
        return $this->m_post_edit_count;
    }
    public function setPostEditCount($value)
    {
        $this->m_post_edit_count = $value;
        return;
    }

    public function getPostEditLocked()
    {
        return $this->m_post_edit_locked;
    }
    public function setPostEditLocked($value)
    {
        $this->m_post_edit_locked = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setPostId($arrValues['post_id']);
        $this->setTopicId($arrValues['topic_id']);
        $this->setForumId($arrValues['forum_id']);
        $this->setPosterId($arrValues['poster_id']);
        $this->setIconId($arrValues['icon_id']);
        $this->setPosterIp($arrValues['poster_ip']);
        $this->setPostTime($arrValues['post_time']);
        $this->setPostApproved($arrValues['post_approved']);
        $this->setPostReported($arrValues['post_reported']);
        $this->setEnableBbcode($arrValues['enable_bbcode']);
        $this->setEnableSmilies($arrValues['enable_smilies']);
        $this->setEnableMagicUrl($arrValues['enable_magic_url']);
        $this->setEnableSig($arrValues['enable_sig']);
        $this->setPostUsername($arrValues['post_username']);
        $this->setPostSubject($arrValues['post_subject']);
        $this->setPostText($arrValues['post_text']);
        $this->setPostChecksum($arrValues['post_checksum']);
        $this->setPostAttachment($arrValues['post_attachment']);
        $this->setBbcodeBitfield($arrValues['bbcode_bitfield']);
        $this->setBbcodeUid($arrValues['bbcode_uid']);
        $this->setPostPostcount($arrValues['post_postcount']);
        $this->setPostEditTime($arrValues['post_edit_time']);
        $this->setPostEditReason($arrValues['post_edit_reason']);
        $this->setPostEditUser($arrValues['post_edit_user']);
        $this->setPostEditCount($arrValues['post_edit_count']);
        $this->setPostEditLocked($arrValues['post_edit_locked']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'post_id':
                    $this->setPostId($val);
                    break;
                case 'topic_id':
                    $this->setTopicId($val);
                    break;
                case 'forum_id':
                    $this->setForumId($val);
                    break;
                case 'poster_id':
                    $this->setPosterId($val);
                    break;
                case 'icon_id':
                    $this->setIconId($val);
                    break;
                case 'poster_ip':
                    $this->setPosterIp($val);
                    break;
                case 'post_time':
                    $this->setPostTime($val);
                    break;
                case 'post_approved':
                    $this->setPostApproved($val);
                    break;
                case 'post_reported':
                    $this->setPostReported($val);
                    break;
                case 'enable_bbcode':
                    $this->setEnableBbcode($val);
                    break;
                case 'enable_smilies':
                    $this->setEnableSmilies($val);
                    break;
                case 'enable_magic_url':
                    $this->setEnableMagicUrl($val);
                    break;
                case 'enable_sig':
                    $this->setEnableSig($val);
                    break;
                case 'post_username':
                    $this->setPostUsername($val);
                    break;
                case 'post_subject':
                    $this->setPostSubject($val);
                    break;
                case 'post_text':
                    $this->setPostText($val);
                    break;
                case 'post_checksum':
                    $this->setPostChecksum($val);
                    break;
                case 'post_attachment':
                    $this->setPostAttachment($val);
                    break;
                case 'bbcode_bitfield':
                    $this->setBbcodeBitfield($val);
                    break;
                case 'bbcode_uid':
                    $this->setBbcodeUid($val);
                    break;
                case 'post_postcount':
                    $this->setPostPostcount($val);
                    break;
                case 'post_edit_time':
                    $this->setPostEditTime($val);
                    break;
                case 'post_edit_reason':
                    $this->setPostEditReason($val);
                    break;
                case 'post_edit_user':
                    $this->setPostEditUser($val);
                    break;
                case 'post_edit_count':
                    $this->setPostEditCount($val);
                    break;
                case 'post_edit_locked':
                    $this->setPostEditLocked($val);
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
        $arrValues['topic_id'] = $this->getTopicId();
        $arrValues['forum_id'] = $this->getForumId();
        $arrValues['poster_id'] = $this->getPosterId();
        $arrValues['icon_id'] = $this->getIconId();
        $arrValues['poster_ip'] = $this->getPosterIp();
        $arrValues['post_time'] = $this->getPostTime();
        $arrValues['post_approved'] = $this->getPostApproved();
        $arrValues['post_reported'] = $this->getPostReported();
        $arrValues['enable_bbcode'] = $this->getEnableBbcode();
        $arrValues['enable_smilies'] = $this->getEnableSmilies();
        $arrValues['enable_magic_url'] = $this->getEnableMagicUrl();
        $arrValues['enable_sig'] = $this->getEnableSig();
        $arrValues['post_username'] = $this->getPostUsername();
        $arrValues['post_subject'] = $this->getPostSubject();
        $arrValues['post_text'] = $this->getPostText();
        $arrValues['post_checksum'] = $this->getPostChecksum();
        $arrValues['post_attachment'] = $this->getPostAttachment();
        $arrValues['bbcode_bitfield'] = $this->getBbcodeBitfield();
        $arrValues['bbcode_uid'] = $this->getBbcodeUid();
        $arrValues['post_postcount'] = $this->getPostPostcount();
        $arrValues['post_edit_time'] = $this->getPostEditTime();
        $arrValues['post_edit_reason'] = $this->getPostEditReason();
        $arrValues['post_edit_user'] = $this->getPostEditUser();
        $arrValues['post_edit_count'] = $this->getPostEditCount();
        $arrValues['post_edit_locked'] = $this->getPostEditLocked();
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
