<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_PrivmsgsFolderBase
{
    protected $m_folder_id;
    protected $m_user_id;
    protected $m_folder_name;
    protected $m_pm_count;
    protected $m_folder_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUserId(0);
            $this->setFolderName('');
            $this->setPmCount(0);
        }
        return;
    }
    public function PrivmsgsFolderBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFolderId()
    {
        return $this->m_folder_id;
    }
    public function setFolderId($value)
    {
        $this->m_folder_id = $value;
        $this->setOrigFolderId($value);
        return;
    }

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        return;
    }

    public function getFolderName()
    {
        return $this->m_folder_name;
    }
    public function setFolderName($value)
    {
        $this->m_folder_name = $value;
        return;
    }

    public function getPmCount()
    {
        return $this->m_pm_count;
    }
    public function setPmCount($value)
    {
        $this->m_pm_count = $value;
        return;
    }

    public function getOrigFolderId()
    {
        return $this->m_folder_id_Orig;
    }
    public function setOrigFolderId($value)
    {
        if (isset($this->m_folder_id_Orig)) { return; }
        $this->m_folder_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFolderId($arrValues['folder_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setFolderName($arrValues['folder_name']);
        $this->setPmCount($arrValues['pm_count']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'folder_id':
                    $this->setFolderId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'folder_name':
                    $this->setFolderName($val);
                    break;
                case 'pm_count':
                    $this->setPmCount($val);
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
        $arrValues['folder_id'] = $this->getFolderId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['folder_name'] = $this->getFolderName();
        $arrValues['pm_count'] = $this->getPmCount();
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
