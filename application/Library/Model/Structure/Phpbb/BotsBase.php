<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_BotsBase
{
    protected $m_bot_id;
    protected $m_bot_active;
    protected $m_bot_name;
    protected $m_user_id;
    protected $m_bot_agent;
    protected $m_bot_ip;
    protected $m_bot_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setBotActive(1);
            $this->setBotName('');
            $this->setUserId(0);
            $this->setBotAgent('');
            $this->setBotIp('');
        }
        return;
    }
    public function BotsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBotId()
    {
        return $this->m_bot_id;
    }
    public function setBotId($value)
    {
        $this->m_bot_id = $value;
        $this->setOrigBotId($value);
        return;
    }

    public function getBotActive()
    {
        return $this->m_bot_active;
    }
    public function setBotActive($value)
    {
        $this->m_bot_active = $value;
        return;
    }

    public function getBotName()
    {
        return $this->m_bot_name;
    }
    public function setBotName($value)
    {
        $this->m_bot_name = $value;
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

    public function getBotAgent()
    {
        return $this->m_bot_agent;
    }
    public function setBotAgent($value)
    {
        $this->m_bot_agent = $value;
        return;
    }

    public function getBotIp()
    {
        return $this->m_bot_ip;
    }
    public function setBotIp($value)
    {
        $this->m_bot_ip = $value;
        return;
    }

    public function getOrigBotId()
    {
        return $this->m_bot_id_Orig;
    }
    public function setOrigBotId($value)
    {
        if (isset($this->m_bot_id_Orig)) { return; }
        $this->m_bot_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBotId($arrValues['bot_id']);
        $this->setBotActive($arrValues['bot_active']);
        $this->setBotName($arrValues['bot_name']);
        $this->setUserId($arrValues['user_id']);
        $this->setBotAgent($arrValues['bot_agent']);
        $this->setBotIp($arrValues['bot_ip']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'bot_id':
                    $this->setBotId($val);
                    break;
                case 'bot_active':
                    $this->setBotActive($val);
                    break;
                case 'bot_name':
                    $this->setBotName($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'bot_agent':
                    $this->setBotAgent($val);
                    break;
                case 'bot_ip':
                    $this->setBotIp($val);
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
        $arrValues['bot_id'] = $this->getBotId();
        $arrValues['bot_active'] = $this->getBotActive();
        $arrValues['bot_name'] = $this->getBotName();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['bot_agent'] = $this->getBotAgent();
        $arrValues['bot_ip'] = $this->getBotIp();
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
