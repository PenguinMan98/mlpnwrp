<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Structure_PlayerBase
{
    protected $m_player_id;
    protected $m_account_name;
    protected $m_email;
    protected $m_first_name;
    protected $m_last_name;
    protected $m_dob;
    protected $m_password;
    protected $m_player_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function PlayerBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPlayerId()
    {
        return $this->m_player_id;
    }
    public function setPlayerId($value)
    {
        $this->m_player_id = $value;
        $this->setOrigPlayerId($value);
        return;
    }

    public function getAccountName()
    {
        return $this->m_account_name;
    }
    public function setAccountName($value)
    {
        $this->m_account_name = $value;
        return;
    }

    public function getEmail()
    {
        return $this->m_email;
    }
    public function setEmail($value)
    {
        $this->m_email = $value;
        return;
    }

    public function getFirstName()
    {
        return $this->m_first_name;
    }
    public function setFirstName($value)
    {
        $this->m_first_name = $value;
        return;
    }

    public function getLastName()
    {
        return $this->m_last_name;
    }
    public function setLastName($value)
    {
        $this->m_last_name = $value;
        return;
    }

    public function getDob()
    {
        return $this->m_dob;
    }
    public function setDob($value)
    {
        $this->m_dob = $value;
        return;
    }

    public function getPassword()
    {
        return $this->m_password;
    }
    public function setPassword($value)
    {
        $this->m_password = $value;
        return;
    }

    public function getOrigPlayerId()
    {
        return $this->m_player_id_Orig;
    }
    public function setOrigPlayerId($value)
    {
        if (isset($this->m_player_id_Orig)) { return; }
        $this->m_player_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPlayerId($arrValues['player_id']);
        $this->setAccountName($arrValues['account_name']);
        $this->setEmail($arrValues['email']);
        $this->setFirstName($arrValues['first_name']);
        $this->setLastName($arrValues['last_name']);
        $this->setDob($arrValues['dob']);
        $this->setPassword($arrValues['password']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'player_id':
                    $this->setPlayerId($val);
                    break;
                case 'account_name':
                    $this->setAccountName($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'first_name':
                    $this->setFirstName($val);
                    break;
                case 'last_name':
                    $this->setLastName($val);
                    break;
                case 'dob':
                    $this->setDob($val);
                    break;
                case 'password':
                    $this->setPassword($val);
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
        $arrValues['player_id'] = $this->getPlayerId();
        $arrValues['account_name'] = $this->getAccountName();
        $arrValues['email'] = $this->getEmail();
        $arrValues['first_name'] = $this->getFirstName();
        $arrValues['last_name'] = $this->getLastName();
        $arrValues['dob'] = $this->getDob();
        $arrValues['password'] = $this->getPassword();
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
