<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_AclRolesBase
{
    protected $m_role_id;
    protected $m_role_name;
    protected $m_role_description;
    protected $m_role_type;
    protected $m_role_order;
    protected $m_role_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setRoleName('');
            $this->setRoleType('');
            $this->setRoleOrder(0);
        }
        return;
    }
    public function AclRolesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRoleId()
    {
        return $this->m_role_id;
    }
    public function setRoleId($value)
    {
        $this->m_role_id = $value;
        $this->setOrigRoleId($value);
        return;
    }

    public function getRoleName()
    {
        return $this->m_role_name;
    }
    public function setRoleName($value)
    {
        $this->m_role_name = $value;
        return;
    }

    public function getRoleDescription()
    {
        return $this->m_role_description;
    }
    public function setRoleDescription($value)
    {
        $this->m_role_description = $value;
        return;
    }

    public function getRoleType()
    {
        return $this->m_role_type;
    }
    public function setRoleType($value)
    {
        $this->m_role_type = $value;
        return;
    }

    public function getRoleOrder()
    {
        return $this->m_role_order;
    }
    public function setRoleOrder($value)
    {
        $this->m_role_order = $value;
        return;
    }

    public function getOrigRoleId()
    {
        return $this->m_role_id_Orig;
    }
    public function setOrigRoleId($value)
    {
        if (isset($this->m_role_id_Orig)) { return; }
        $this->m_role_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRoleId($arrValues['role_id']);
        $this->setRoleName($arrValues['role_name']);
        $this->setRoleDescription($arrValues['role_description']);
        $this->setRoleType($arrValues['role_type']);
        $this->setRoleOrder($arrValues['role_order']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'role_id':
                    $this->setRoleId($val);
                    break;
                case 'role_name':
                    $this->setRoleName($val);
                    break;
                case 'role_description':
                    $this->setRoleDescription($val);
                    break;
                case 'role_type':
                    $this->setRoleType($val);
                    break;
                case 'role_order':
                    $this->setRoleOrder($val);
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
        $arrValues['role_id'] = $this->getRoleId();
        $arrValues['role_name'] = $this->getRoleName();
        $arrValues['role_description'] = $this->getRoleDescription();
        $arrValues['role_type'] = $this->getRoleType();
        $arrValues['role_order'] = $this->getRoleOrder();
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
