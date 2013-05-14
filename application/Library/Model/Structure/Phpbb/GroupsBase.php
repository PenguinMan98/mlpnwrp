<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_GroupsBase
{
    protected $m_group_id;
    protected $m_group_type;
    protected $m_group_founder_manage;
    protected $m_group_skip_auth;
    protected $m_group_name;
    protected $m_group_desc;
    protected $m_group_desc_bitfield;
    protected $m_group_desc_options;
    protected $m_group_desc_uid;
    protected $m_group_display;
    protected $m_group_avatar;
    protected $m_group_avatar_type;
    protected $m_group_avatar_width;
    protected $m_group_avatar_height;
    protected $m_group_rank;
    protected $m_group_colour;
    protected $m_group_sig_chars;
    protected $m_group_receive_pm;
    protected $m_group_message_limit;
    protected $m_group_max_recipients;
    protected $m_group_legend;
    protected $m_group_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setGroupType(1);
            $this->setGroupFounderManage(0);
            $this->setGroupSkipAuth(0);
            $this->setGroupName('');
            $this->setGroupDescBitfield('');
            $this->setGroupDescOptions(7);
            $this->setGroupDescUid('');
            $this->setGroupDisplay(0);
            $this->setGroupAvatar('');
            $this->setGroupAvatarType(0);
            $this->setGroupAvatarWidth(0);
            $this->setGroupAvatarHeight(0);
            $this->setGroupRank(0);
            $this->setGroupColour('');
            $this->setGroupSigChars(0);
            $this->setGroupReceivePm(0);
            $this->setGroupMessageLimit(0);
            $this->setGroupMaxRecipients(0);
            $this->setGroupLegend(1);
        }
        return;
    }
    public function GroupsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getGroupId()
    {
        return $this->m_group_id;
    }
    public function setGroupId($value)
    {
        $this->m_group_id = $value;
        $this->setOrigGroupId($value);
        return;
    }

    public function getGroupType()
    {
        return $this->m_group_type;
    }
    public function setGroupType($value)
    {
        $this->m_group_type = $value;
        return;
    }

    public function getGroupFounderManage()
    {
        return $this->m_group_founder_manage;
    }
    public function setGroupFounderManage($value)
    {
        $this->m_group_founder_manage = $value;
        return;
    }

    public function getGroupSkipAuth()
    {
        return $this->m_group_skip_auth;
    }
    public function setGroupSkipAuth($value)
    {
        $this->m_group_skip_auth = $value;
        return;
    }

    public function getGroupName()
    {
        return $this->m_group_name;
    }
    public function setGroupName($value)
    {
        $this->m_group_name = $value;
        return;
    }

    public function getGroupDesc()
    {
        return $this->m_group_desc;
    }
    public function setGroupDesc($value)
    {
        $this->m_group_desc = $value;
        return;
    }

    public function getGroupDescBitfield()
    {
        return $this->m_group_desc_bitfield;
    }
    public function setGroupDescBitfield($value)
    {
        $this->m_group_desc_bitfield = $value;
        return;
    }

    public function getGroupDescOptions()
    {
        return $this->m_group_desc_options;
    }
    public function setGroupDescOptions($value)
    {
        $this->m_group_desc_options = $value;
        return;
    }

    public function getGroupDescUid()
    {
        return $this->m_group_desc_uid;
    }
    public function setGroupDescUid($value)
    {
        $this->m_group_desc_uid = $value;
        return;
    }

    public function getGroupDisplay()
    {
        return $this->m_group_display;
    }
    public function setGroupDisplay($value)
    {
        $this->m_group_display = $value;
        return;
    }

    public function getGroupAvatar()
    {
        return $this->m_group_avatar;
    }
    public function setGroupAvatar($value)
    {
        $this->m_group_avatar = $value;
        return;
    }

    public function getGroupAvatarType()
    {
        return $this->m_group_avatar_type;
    }
    public function setGroupAvatarType($value)
    {
        $this->m_group_avatar_type = $value;
        return;
    }

    public function getGroupAvatarWidth()
    {
        return $this->m_group_avatar_width;
    }
    public function setGroupAvatarWidth($value)
    {
        $this->m_group_avatar_width = $value;
        return;
    }

    public function getGroupAvatarHeight()
    {
        return $this->m_group_avatar_height;
    }
    public function setGroupAvatarHeight($value)
    {
        $this->m_group_avatar_height = $value;
        return;
    }

    public function getGroupRank()
    {
        return $this->m_group_rank;
    }
    public function setGroupRank($value)
    {
        $this->m_group_rank = $value;
        return;
    }

    public function getGroupColour()
    {
        return $this->m_group_colour;
    }
    public function setGroupColour($value)
    {
        $this->m_group_colour = $value;
        return;
    }

    public function getGroupSigChars()
    {
        return $this->m_group_sig_chars;
    }
    public function setGroupSigChars($value)
    {
        $this->m_group_sig_chars = $value;
        return;
    }

    public function getGroupReceivePm()
    {
        return $this->m_group_receive_pm;
    }
    public function setGroupReceivePm($value)
    {
        $this->m_group_receive_pm = $value;
        return;
    }

    public function getGroupMessageLimit()
    {
        return $this->m_group_message_limit;
    }
    public function setGroupMessageLimit($value)
    {
        $this->m_group_message_limit = $value;
        return;
    }

    public function getGroupMaxRecipients()
    {
        return $this->m_group_max_recipients;
    }
    public function setGroupMaxRecipients($value)
    {
        $this->m_group_max_recipients = $value;
        return;
    }

    public function getGroupLegend()
    {
        return $this->m_group_legend;
    }
    public function setGroupLegend($value)
    {
        $this->m_group_legend = $value;
        return;
    }

    public function getOrigGroupId()
    {
        return $this->m_group_id_Orig;
    }
    public function setOrigGroupId($value)
    {
        if (isset($this->m_group_id_Orig)) { return; }
        $this->m_group_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setGroupId($arrValues['group_id']);
        $this->setGroupType($arrValues['group_type']);
        $this->setGroupFounderManage($arrValues['group_founder_manage']);
        $this->setGroupSkipAuth($arrValues['group_skip_auth']);
        $this->setGroupName($arrValues['group_name']);
        $this->setGroupDesc($arrValues['group_desc']);
        $this->setGroupDescBitfield($arrValues['group_desc_bitfield']);
        $this->setGroupDescOptions($arrValues['group_desc_options']);
        $this->setGroupDescUid($arrValues['group_desc_uid']);
        $this->setGroupDisplay($arrValues['group_display']);
        $this->setGroupAvatar($arrValues['group_avatar']);
        $this->setGroupAvatarType($arrValues['group_avatar_type']);
        $this->setGroupAvatarWidth($arrValues['group_avatar_width']);
        $this->setGroupAvatarHeight($arrValues['group_avatar_height']);
        $this->setGroupRank($arrValues['group_rank']);
        $this->setGroupColour($arrValues['group_colour']);
        $this->setGroupSigChars($arrValues['group_sig_chars']);
        $this->setGroupReceivePm($arrValues['group_receive_pm']);
        $this->setGroupMessageLimit($arrValues['group_message_limit']);
        $this->setGroupMaxRecipients($arrValues['group_max_recipients']);
        $this->setGroupLegend($arrValues['group_legend']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'group_id':
                    $this->setGroupId($val);
                    break;
                case 'group_type':
                    $this->setGroupType($val);
                    break;
                case 'group_founder_manage':
                    $this->setGroupFounderManage($val);
                    break;
                case 'group_skip_auth':
                    $this->setGroupSkipAuth($val);
                    break;
                case 'group_name':
                    $this->setGroupName($val);
                    break;
                case 'group_desc':
                    $this->setGroupDesc($val);
                    break;
                case 'group_desc_bitfield':
                    $this->setGroupDescBitfield($val);
                    break;
                case 'group_desc_options':
                    $this->setGroupDescOptions($val);
                    break;
                case 'group_desc_uid':
                    $this->setGroupDescUid($val);
                    break;
                case 'group_display':
                    $this->setGroupDisplay($val);
                    break;
                case 'group_avatar':
                    $this->setGroupAvatar($val);
                    break;
                case 'group_avatar_type':
                    $this->setGroupAvatarType($val);
                    break;
                case 'group_avatar_width':
                    $this->setGroupAvatarWidth($val);
                    break;
                case 'group_avatar_height':
                    $this->setGroupAvatarHeight($val);
                    break;
                case 'group_rank':
                    $this->setGroupRank($val);
                    break;
                case 'group_colour':
                    $this->setGroupColour($val);
                    break;
                case 'group_sig_chars':
                    $this->setGroupSigChars($val);
                    break;
                case 'group_receive_pm':
                    $this->setGroupReceivePm($val);
                    break;
                case 'group_message_limit':
                    $this->setGroupMessageLimit($val);
                    break;
                case 'group_max_recipients':
                    $this->setGroupMaxRecipients($val);
                    break;
                case 'group_legend':
                    $this->setGroupLegend($val);
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
        $arrValues['group_id'] = $this->getGroupId();
        $arrValues['group_type'] = $this->getGroupType();
        $arrValues['group_founder_manage'] = $this->getGroupFounderManage();
        $arrValues['group_skip_auth'] = $this->getGroupSkipAuth();
        $arrValues['group_name'] = $this->getGroupName();
        $arrValues['group_desc'] = $this->getGroupDesc();
        $arrValues['group_desc_bitfield'] = $this->getGroupDescBitfield();
        $arrValues['group_desc_options'] = $this->getGroupDescOptions();
        $arrValues['group_desc_uid'] = $this->getGroupDescUid();
        $arrValues['group_display'] = $this->getGroupDisplay();
        $arrValues['group_avatar'] = $this->getGroupAvatar();
        $arrValues['group_avatar_type'] = $this->getGroupAvatarType();
        $arrValues['group_avatar_width'] = $this->getGroupAvatarWidth();
        $arrValues['group_avatar_height'] = $this->getGroupAvatarHeight();
        $arrValues['group_rank'] = $this->getGroupRank();
        $arrValues['group_colour'] = $this->getGroupColour();
        $arrValues['group_sig_chars'] = $this->getGroupSigChars();
        $arrValues['group_receive_pm'] = $this->getGroupReceivePm();
        $arrValues['group_message_limit'] = $this->getGroupMessageLimit();
        $arrValues['group_max_recipients'] = $this->getGroupMaxRecipients();
        $arrValues['group_legend'] = $this->getGroupLegend();
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
