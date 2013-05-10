<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_GuestUsersBase
{
    protected $m_guest_user_id;
    protected $m_handle;
    protected $m_chat_room_id;
    protected $m_user_id;
    protected $m_created_date;
    protected $m_guest_user_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreatedDate('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function GuestUsersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getGuestUserId()
    {
        return $this->m_guest_user_id;
    }
    public function setGuestUserId($value)
    {
        $this->m_guest_user_id = $value;
        $this->setOrigGuestUserId($value);
        return;
    }

    public function getHandle()
    {
        return $this->m_handle;
    }
    public function setHandle($value)
    {
        $this->m_handle = $value;
        return;
    }

    public function getChatRoomId()
    {
        return $this->m_chat_room_id;
    }
    public function setChatRoomId($value)
    {
        $this->m_chat_room_id = $value;
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

    public function getCreatedDate()
    {
        return $this->m_created_date;
    }
    public function setCreatedDate($value)
    {
        $this->m_created_date = $value;
        return;
    }

    public function getOrigGuestUserId()
    {
        return $this->m_guest_user_id_Orig;
    }
    public function setOrigGuestUserId($value)
    {
        if (isset($this->m_guest_user_id_Orig)) { return; }
        $this->m_guest_user_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setGuestUserId($arrValues['guest_user_id']);
        $this->setHandle($arrValues['handle']);
        $this->setChatRoomId($arrValues['chat_room_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setCreatedDate($arrValues['created_date']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'guest_user_id':
                    $this->setGuestUserId($val);
                    break;
                case 'handle':
                    $this->setHandle($val);
                    break;
                case 'chat_room_id':
                    $this->setChatRoomId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'created_date':
                    $this->setCreatedDate($val);
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
        $arrValues['guest_user_id'] = $this->getGuestUserId();
        $arrValues['handle'] = $this->getHandle();
        $arrValues['chat_room_id'] = $this->getChatRoomId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['created_date'] = $this->getCreatedDate();
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
