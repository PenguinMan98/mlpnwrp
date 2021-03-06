<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_ChatRoomBase
{
    protected $m_chat_room_id;
    protected $m_room_name;
    protected $m_description;
    protected $m_permission_level;
    protected $m_chat_room_type_id;
    protected $m_is_active;
    protected $m_chat_room_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setIsActive(1);
        }
        return;
    }
    public function ChatRoomBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getChatRoomId()
    {
        return $this->m_chat_room_id;
    }
    public function setChatRoomId($value)
    {
        $this->m_chat_room_id = $value;
        $this->setOrigChatRoomId($value);
        return;
    }

    public function getRoomName()
    {
        return $this->m_room_name;
    }
    public function setRoomName($value)
    {
        $this->m_room_name = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getPermissionLevel()
    {
        return $this->m_permission_level;
    }
    public function setPermissionLevel($value)
    {
        $this->m_permission_level = $value;
        return;
    }

    public function getChatRoomTypeId()
    {
        return $this->m_chat_room_type_id;
    }
    public function setChatRoomTypeId($value)
    {
        $this->m_chat_room_type_id = $value;
        return;
    }

    public function getIsActive()
    {
        return $this->m_is_active;
    }
    public function setIsActive($value)
    {
        $this->m_is_active = $value;
        return;
    }

    public function getOrigChatRoomId()
    {
        return $this->m_chat_room_id_Orig;
    }
    public function setOrigChatRoomId($value)
    {
        if (isset($this->m_chat_room_id_Orig)) { return; }
        $this->m_chat_room_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setChatRoomId($arrValues['chat_room_id']);
        $this->setRoomName($arrValues['room_name']);
        $this->setDescription($arrValues['description']);
        $this->setPermissionLevel($arrValues['permission_level']);
        $this->setChatRoomTypeId($arrValues['chat_room_type_id']);
        $this->setIsActive($arrValues['is_active']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'chat_room_id':
                    $this->setChatRoomId($val);
                    break;
                case 'room_name':
                    $this->setRoomName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'permission_level':
                    $this->setPermissionLevel($val);
                    break;
                case 'chat_room_type_id':
                    $this->setChatRoomTypeId($val);
                    break;
                case 'is_active':
                    $this->setIsActive($val);
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
        $arrValues['chat_room_id'] = $this->getChatRoomId();
        $arrValues['room_name'] = $this->getRoomName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['permission_level'] = $this->getPermissionLevel();
        $arrValues['chat_room_type_id'] = $this->getChatRoomTypeId();
        $arrValues['is_active'] = $this->getIsActive();
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
