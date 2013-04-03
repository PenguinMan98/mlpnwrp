<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_PrivmsgsBase
{
    protected $m_msg_id;
    protected $m_root_level;
    protected $m_author_id;
    protected $m_icon_id;
    protected $m_author_ip;
    protected $m_message_time;
    protected $m_enable_bbcode;
    protected $m_enable_smilies;
    protected $m_enable_magic_url;
    protected $m_enable_sig;
    protected $m_message_subject;
    protected $m_message_text;
    protected $m_message_edit_reason;
    protected $m_message_edit_user;
    protected $m_message_attachment;
    protected $m_bbcode_bitfield;
    protected $m_bbcode_uid;
    protected $m_message_edit_time;
    protected $m_message_edit_count;
    protected $m_to_address;
    protected $m_bcc_address;
    protected $m_message_reported;
    protected $m_msg_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setRootLevel(0);
            $this->setAuthorId(0);
            $this->setIconId(0);
            $this->setAuthorIp('');
            $this->setMessageTime(0);
            $this->setEnableBbcode(1);
            $this->setEnableSmilies(1);
            $this->setEnableMagicUrl(1);
            $this->setEnableSig(1);
            $this->setMessageSubject('');
            $this->setMessageEditReason('');
            $this->setMessageEditUser(0);
            $this->setMessageAttachment(0);
            $this->setBbcodeBitfield('');
            $this->setBbcodeUid('');
            $this->setMessageEditTime(0);
            $this->setMessageEditCount(0);
            $this->setMessageReported(0);
        }
        return;
    }
    public function PrivmsgsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getMsgId()
    {
        return $this->m_msg_id;
    }
    public function setMsgId($value)
    {
        $this->m_msg_id = $value;
        $this->setOrigMsgId($value);
        return;
    }

    public function getRootLevel()
    {
        return $this->m_root_level;
    }
    public function setRootLevel($value)
    {
        $this->m_root_level = $value;
        return;
    }

    public function getAuthorId()
    {
        return $this->m_author_id;
    }
    public function setAuthorId($value)
    {
        $this->m_author_id = $value;
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

    public function getAuthorIp()
    {
        return $this->m_author_ip;
    }
    public function setAuthorIp($value)
    {
        $this->m_author_ip = $value;
        return;
    }

    public function getMessageTime()
    {
        return $this->m_message_time;
    }
    public function setMessageTime($value)
    {
        $this->m_message_time = $value;
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

    public function getMessageSubject()
    {
        return $this->m_message_subject;
    }
    public function setMessageSubject($value)
    {
        $this->m_message_subject = $value;
        return;
    }

    public function getMessageText()
    {
        return $this->m_message_text;
    }
    public function setMessageText($value)
    {
        $this->m_message_text = $value;
        return;
    }

    public function getMessageEditReason()
    {
        return $this->m_message_edit_reason;
    }
    public function setMessageEditReason($value)
    {
        $this->m_message_edit_reason = $value;
        return;
    }

    public function getMessageEditUser()
    {
        return $this->m_message_edit_user;
    }
    public function setMessageEditUser($value)
    {
        $this->m_message_edit_user = $value;
        return;
    }

    public function getMessageAttachment()
    {
        return $this->m_message_attachment;
    }
    public function setMessageAttachment($value)
    {
        $this->m_message_attachment = $value;
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

    public function getMessageEditTime()
    {
        return $this->m_message_edit_time;
    }
    public function setMessageEditTime($value)
    {
        $this->m_message_edit_time = $value;
        return;
    }

    public function getMessageEditCount()
    {
        return $this->m_message_edit_count;
    }
    public function setMessageEditCount($value)
    {
        $this->m_message_edit_count = $value;
        return;
    }

    public function getToAddress()
    {
        return $this->m_to_address;
    }
    public function setToAddress($value)
    {
        $this->m_to_address = $value;
        return;
    }

    public function getBccAddress()
    {
        return $this->m_bcc_address;
    }
    public function setBccAddress($value)
    {
        $this->m_bcc_address = $value;
        return;
    }

    public function getMessageReported()
    {
        return $this->m_message_reported;
    }
    public function setMessageReported($value)
    {
        $this->m_message_reported = $value;
        return;
    }

    public function getOrigMsgId()
    {
        return $this->m_msg_id_Orig;
    }
    public function setOrigMsgId($value)
    {
        if (isset($this->m_msg_id_Orig)) { return; }
        $this->m_msg_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setMsgId($arrValues['msg_id']);
        $this->setRootLevel($arrValues['root_level']);
        $this->setAuthorId($arrValues['author_id']);
        $this->setIconId($arrValues['icon_id']);
        $this->setAuthorIp($arrValues['author_ip']);
        $this->setMessageTime($arrValues['message_time']);
        $this->setEnableBbcode($arrValues['enable_bbcode']);
        $this->setEnableSmilies($arrValues['enable_smilies']);
        $this->setEnableMagicUrl($arrValues['enable_magic_url']);
        $this->setEnableSig($arrValues['enable_sig']);
        $this->setMessageSubject($arrValues['message_subject']);
        $this->setMessageText($arrValues['message_text']);
        $this->setMessageEditReason($arrValues['message_edit_reason']);
        $this->setMessageEditUser($arrValues['message_edit_user']);
        $this->setMessageAttachment($arrValues['message_attachment']);
        $this->setBbcodeBitfield($arrValues['bbcode_bitfield']);
        $this->setBbcodeUid($arrValues['bbcode_uid']);
        $this->setMessageEditTime($arrValues['message_edit_time']);
        $this->setMessageEditCount($arrValues['message_edit_count']);
        $this->setToAddress($arrValues['to_address']);
        $this->setBccAddress($arrValues['bcc_address']);
        $this->setMessageReported($arrValues['message_reported']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'msg_id':
                    $this->setMsgId($val);
                    break;
                case 'root_level':
                    $this->setRootLevel($val);
                    break;
                case 'author_id':
                    $this->setAuthorId($val);
                    break;
                case 'icon_id':
                    $this->setIconId($val);
                    break;
                case 'author_ip':
                    $this->setAuthorIp($val);
                    break;
                case 'message_time':
                    $this->setMessageTime($val);
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
                case 'message_subject':
                    $this->setMessageSubject($val);
                    break;
                case 'message_text':
                    $this->setMessageText($val);
                    break;
                case 'message_edit_reason':
                    $this->setMessageEditReason($val);
                    break;
                case 'message_edit_user':
                    $this->setMessageEditUser($val);
                    break;
                case 'message_attachment':
                    $this->setMessageAttachment($val);
                    break;
                case 'bbcode_bitfield':
                    $this->setBbcodeBitfield($val);
                    break;
                case 'bbcode_uid':
                    $this->setBbcodeUid($val);
                    break;
                case 'message_edit_time':
                    $this->setMessageEditTime($val);
                    break;
                case 'message_edit_count':
                    $this->setMessageEditCount($val);
                    break;
                case 'to_address':
                    $this->setToAddress($val);
                    break;
                case 'bcc_address':
                    $this->setBccAddress($val);
                    break;
                case 'message_reported':
                    $this->setMessageReported($val);
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
        $arrValues['msg_id'] = $this->getMsgId();
        $arrValues['root_level'] = $this->getRootLevel();
        $arrValues['author_id'] = $this->getAuthorId();
        $arrValues['icon_id'] = $this->getIconId();
        $arrValues['author_ip'] = $this->getAuthorIp();
        $arrValues['message_time'] = $this->getMessageTime();
        $arrValues['enable_bbcode'] = $this->getEnableBbcode();
        $arrValues['enable_smilies'] = $this->getEnableSmilies();
        $arrValues['enable_magic_url'] = $this->getEnableMagicUrl();
        $arrValues['enable_sig'] = $this->getEnableSig();
        $arrValues['message_subject'] = $this->getMessageSubject();
        $arrValues['message_text'] = $this->getMessageText();
        $arrValues['message_edit_reason'] = $this->getMessageEditReason();
        $arrValues['message_edit_user'] = $this->getMessageEditUser();
        $arrValues['message_attachment'] = $this->getMessageAttachment();
        $arrValues['bbcode_bitfield'] = $this->getBbcodeBitfield();
        $arrValues['bbcode_uid'] = $this->getBbcodeUid();
        $arrValues['message_edit_time'] = $this->getMessageEditTime();
        $arrValues['message_edit_count'] = $this->getMessageEditCount();
        $arrValues['to_address'] = $this->getToAddress();
        $arrValues['bcc_address'] = $this->getBccAddress();
        $arrValues['message_reported'] = $this->getMessageReported();
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
