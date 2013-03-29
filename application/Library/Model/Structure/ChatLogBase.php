<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_ChatLogBase
{
    protected $m_chat_log_id;
    protected $m_chat_room_id;
    protected $m_user_id;
    protected $m_username;
    protected $m_recipient_user_id;
    protected $m_recipient_username;
    protected $m_text;
    protected $m_timestamp;
    protected $m_color;
    protected $m_chat_log_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTimestamp('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function ChatLogBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getChatLogId()
    {
        return $this->m_chat_log_id;
    }
    public function setChatLogId($value)
    {
        $this->m_chat_log_id = $value;
        $this->setOrigChatLogId($value);
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

    public function getUsername()
    {
        return $this->m_username;
    }
    public function setUsername($value)
    {
        $this->m_username = $value;
        return;
    }

    public function getRecipientUserId()
    {
        return $this->m_recipient_user_id;
    }
    public function setRecipientUserId($value)
    {
        $this->m_recipient_user_id = $value;
        return;
    }

    public function getRecipientUsername()
    {
        return $this->m_recipient_username;
    }
    public function setRecipientUsername($value)
    {
        $this->m_recipient_username = $value;
        return;
    }

    public function getText()
    {
        return $this->m_text;
    }
    public function setText($value)
    {
        $this->m_text = $value;
        return;
    }

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
        return;
    }

    public function getColor()
    {
        return $this->m_color;
    }
    public function setColor($value)
    {
        $this->m_color = $value;
        return;
    }

    public function getOrigChatLogId()
    {
        return $this->m_chat_log_id_Orig;
    }
    public function setOrigChatLogId($value)
    {
        if (isset($this->m_chat_log_id_Orig)) { return; }
        $this->m_chat_log_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setChatLogId($arrValues['chat_log_id']);
        $this->setChatRoomId($arrValues['chat_room_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setUsername($arrValues['username']);
        $this->setRecipientUserId($arrValues['recipient_user_id']);
        $this->setRecipientUsername($arrValues['recipient_username']);
        $this->setText($arrValues['text']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setColor($arrValues['color']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'chat_log_id':
                    $this->setChatLogId($val);
                    break;
                case 'chat_room_id':
                    $this->setChatRoomId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'username':
                    $this->setUsername($val);
                    break;
                case 'recipient_user_id':
                    $this->setRecipientUserId($val);
                    break;
                case 'recipient_username':
                    $this->setRecipientUsername($val);
                    break;
                case 'text':
                    $this->setText($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'color':
                    $this->setColor($val);
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
        $arrValues['chat_log_id'] = $this->getChatLogId();
        $arrValues['chat_room_id'] = $this->getChatRoomId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['username'] = $this->getUsername();
        $arrValues['recipient_user_id'] = $this->getRecipientUserId();
        $arrValues['recipient_username'] = $this->getRecipientUsername();
        $arrValues['text'] = $this->getText();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['color'] = $this->getColor();
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
