<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_PrivmsgsToBase
{
    protected $m_msg_id;
    protected $m_user_id;
    protected $m_author_id;
    protected $m_pm_deleted;
    protected $m_pm_new;
    protected $m_pm_unread;
    protected $m_pm_replied;
    protected $m_pm_marked;
    protected $m_pm_forwarded;
    protected $m_folder_id;
    protected $m_msg_id_Orig;
    protected $m_user_id_Orig;
    protected $m_author_id_Orig;
    protected $m_pm_deleted_Orig;
    protected $m_pm_new_Orig;
    protected $m_pm_unread_Orig;
    protected $m_pm_replied_Orig;
    protected $m_pm_marked_Orig;
    protected $m_pm_forwarded_Orig;
    protected $m_folder_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function PrivmsgsToBase($arrData = null)
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

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        $this->setOrigUserId($value);
        return;
    }

    public function getAuthorId()
    {
        return $this->m_author_id;
    }
    public function setAuthorId($value)
    {
        $this->m_author_id = $value;
        $this->setOrigAuthorId($value);
        return;
    }

    public function getPmDeleted()
    {
        return $this->m_pm_deleted;
    }
    public function setPmDeleted($value)
    {
        $this->m_pm_deleted = $value;
        $this->setOrigPmDeleted($value);
        return;
    }

    public function getPmNew()
    {
        return $this->m_pm_new;
    }
    public function setPmNew($value)
    {
        $this->m_pm_new = $value;
        $this->setOrigPmNew($value);
        return;
    }

    public function getPmUnread()
    {
        return $this->m_pm_unread;
    }
    public function setPmUnread($value)
    {
        $this->m_pm_unread = $value;
        $this->setOrigPmUnread($value);
        return;
    }

    public function getPmReplied()
    {
        return $this->m_pm_replied;
    }
    public function setPmReplied($value)
    {
        $this->m_pm_replied = $value;
        $this->setOrigPmReplied($value);
        return;
    }

    public function getPmMarked()
    {
        return $this->m_pm_marked;
    }
    public function setPmMarked($value)
    {
        $this->m_pm_marked = $value;
        $this->setOrigPmMarked($value);
        return;
    }

    public function getPmForwarded()
    {
        return $this->m_pm_forwarded;
    }
    public function setPmForwarded($value)
    {
        $this->m_pm_forwarded = $value;
        $this->setOrigPmForwarded($value);
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

    public function getOrigUserId()
    {
        return $this->m_user_id_Orig;
    }
    public function setOrigUserId($value)
    {
        if (isset($this->m_user_id_Orig)) { return; }
        $this->m_user_id_Orig = $value;
        return;
    }

    public function getOrigAuthorId()
    {
        return $this->m_author_id_Orig;
    }
    public function setOrigAuthorId($value)
    {
        if (isset($this->m_author_id_Orig)) { return; }
        $this->m_author_id_Orig = $value;
        return;
    }

    public function getOrigPmDeleted()
    {
        return $this->m_pm_deleted_Orig;
    }
    public function setOrigPmDeleted($value)
    {
        if (isset($this->m_pm_deleted_Orig)) { return; }
        $this->m_pm_deleted_Orig = $value;
        return;
    }

    public function getOrigPmNew()
    {
        return $this->m_pm_new_Orig;
    }
    public function setOrigPmNew($value)
    {
        if (isset($this->m_pm_new_Orig)) { return; }
        $this->m_pm_new_Orig = $value;
        return;
    }

    public function getOrigPmUnread()
    {
        return $this->m_pm_unread_Orig;
    }
    public function setOrigPmUnread($value)
    {
        if (isset($this->m_pm_unread_Orig)) { return; }
        $this->m_pm_unread_Orig = $value;
        return;
    }

    public function getOrigPmReplied()
    {
        return $this->m_pm_replied_Orig;
    }
    public function setOrigPmReplied($value)
    {
        if (isset($this->m_pm_replied_Orig)) { return; }
        $this->m_pm_replied_Orig = $value;
        return;
    }

    public function getOrigPmMarked()
    {
        return $this->m_pm_marked_Orig;
    }
    public function setOrigPmMarked($value)
    {
        if (isset($this->m_pm_marked_Orig)) { return; }
        $this->m_pm_marked_Orig = $value;
        return;
    }

    public function getOrigPmForwarded()
    {
        return $this->m_pm_forwarded_Orig;
    }
    public function setOrigPmForwarded($value)
    {
        if (isset($this->m_pm_forwarded_Orig)) { return; }
        $this->m_pm_forwarded_Orig = $value;
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
        $this->setMsgId($arrValues['msg_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setAuthorId($arrValues['author_id']);
        $this->setPmDeleted($arrValues['pm_deleted']);
        $this->setPmNew($arrValues['pm_new']);
        $this->setPmUnread($arrValues['pm_unread']);
        $this->setPmReplied($arrValues['pm_replied']);
        $this->setPmMarked($arrValues['pm_marked']);
        $this->setPmForwarded($arrValues['pm_forwarded']);
        $this->setFolderId($arrValues['folder_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'msg_id':
                    $this->setMsgId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'author_id':
                    $this->setAuthorId($val);
                    break;
                case 'pm_deleted':
                    $this->setPmDeleted($val);
                    break;
                case 'pm_new':
                    $this->setPmNew($val);
                    break;
                case 'pm_unread':
                    $this->setPmUnread($val);
                    break;
                case 'pm_replied':
                    $this->setPmReplied($val);
                    break;
                case 'pm_marked':
                    $this->setPmMarked($val);
                    break;
                case 'pm_forwarded':
                    $this->setPmForwarded($val);
                    break;
                case 'folder_id':
                    $this->setFolderId($val);
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
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['author_id'] = $this->getAuthorId();
        $arrValues['pm_deleted'] = $this->getPmDeleted();
        $arrValues['pm_new'] = $this->getPmNew();
        $arrValues['pm_unread'] = $this->getPmUnread();
        $arrValues['pm_replied'] = $this->getPmReplied();
        $arrValues['pm_marked'] = $this->getPmMarked();
        $arrValues['pm_forwarded'] = $this->getPmForwarded();
        $arrValues['folder_id'] = $this->getFolderId();
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
