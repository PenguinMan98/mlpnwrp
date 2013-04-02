<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_ExtensionGroupsBase
{
    protected $m_group_id;
    protected $m_group_name;
    protected $m_cat_id;
    protected $m_allow_group;
    protected $m_download_mode;
    protected $m_upload_icon;
    protected $m_max_filesize;
    protected $m_allowed_forums;
    protected $m_allow_in_pm;
    protected $m_group_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setGroupName('');
            $this->setCatId(0);
            $this->setAllowGroup(0);
            $this->setDownloadMode(1);
            $this->setUploadIcon('');
            $this->setMaxFilesize(0);
            $this->setAllowInPm(0);
        }
        return;
    }
    public function ExtensionGroupsBase($arrData = null)
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

    public function getGroupName()
    {
        return $this->m_group_name;
    }
    public function setGroupName($value)
    {
        $this->m_group_name = $value;
        return;
    }

    public function getCatId()
    {
        return $this->m_cat_id;
    }
    public function setCatId($value)
    {
        $this->m_cat_id = $value;
        return;
    }

    public function getAllowGroup()
    {
        return $this->m_allow_group;
    }
    public function setAllowGroup($value)
    {
        $this->m_allow_group = $value;
        return;
    }

    public function getDownloadMode()
    {
        return $this->m_download_mode;
    }
    public function setDownloadMode($value)
    {
        $this->m_download_mode = $value;
        return;
    }

    public function getUploadIcon()
    {
        return $this->m_upload_icon;
    }
    public function setUploadIcon($value)
    {
        $this->m_upload_icon = $value;
        return;
    }

    public function getMaxFilesize()
    {
        return $this->m_max_filesize;
    }
    public function setMaxFilesize($value)
    {
        $this->m_max_filesize = $value;
        return;
    }

    public function getAllowedForums()
    {
        return $this->m_allowed_forums;
    }
    public function setAllowedForums($value)
    {
        $this->m_allowed_forums = $value;
        return;
    }

    public function getAllowInPm()
    {
        return $this->m_allow_in_pm;
    }
    public function setAllowInPm($value)
    {
        $this->m_allow_in_pm = $value;
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
        $this->setGroupName($arrValues['group_name']);
        $this->setCatId($arrValues['cat_id']);
        $this->setAllowGroup($arrValues['allow_group']);
        $this->setDownloadMode($arrValues['download_mode']);
        $this->setUploadIcon($arrValues['upload_icon']);
        $this->setMaxFilesize($arrValues['max_filesize']);
        $this->setAllowedForums($arrValues['allowed_forums']);
        $this->setAllowInPm($arrValues['allow_in_pm']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'group_id':
                    $this->setGroupId($val);
                    break;
                case 'group_name':
                    $this->setGroupName($val);
                    break;
                case 'cat_id':
                    $this->setCatId($val);
                    break;
                case 'allow_group':
                    $this->setAllowGroup($val);
                    break;
                case 'download_mode':
                    $this->setDownloadMode($val);
                    break;
                case 'upload_icon':
                    $this->setUploadIcon($val);
                    break;
                case 'max_filesize':
                    $this->setMaxFilesize($val);
                    break;
                case 'allowed_forums':
                    $this->setAllowedForums($val);
                    break;
                case 'allow_in_pm':
                    $this->setAllowInPm($val);
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
        $arrValues['group_name'] = $this->getGroupName();
        $arrValues['cat_id'] = $this->getCatId();
        $arrValues['allow_group'] = $this->getAllowGroup();
        $arrValues['download_mode'] = $this->getDownloadMode();
        $arrValues['upload_icon'] = $this->getUploadIcon();
        $arrValues['max_filesize'] = $this->getMaxFilesize();
        $arrValues['allowed_forums'] = $this->getAllowedForums();
        $arrValues['allow_in_pm'] = $this->getAllowInPm();
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
