<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_PrivmsgsRulesBase
{
    protected $m_rule_id;
    protected $m_user_id;
    protected $m_rule_check;
    protected $m_rule_connection;
    protected $m_rule_string;
    protected $m_rule_user_id;
    protected $m_rule_group_id;
    protected $m_rule_action;
    protected $m_rule_folder_id;
    protected $m_rule_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUserId(0);
            $this->setRuleCheck(0);
            $this->setRuleConnection(0);
            $this->setRuleString('');
            $this->setRuleUserId(0);
            $this->setRuleGroupId(0);
            $this->setRuleAction(0);
            $this->setRuleFolderId(0);
        }
        return;
    }
    public function PrivmsgsRulesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRuleId()
    {
        return $this->m_rule_id;
    }
    public function setRuleId($value)
    {
        $this->m_rule_id = $value;
        $this->setOrigRuleId($value);
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

    public function getRuleCheck()
    {
        return $this->m_rule_check;
    }
    public function setRuleCheck($value)
    {
        $this->m_rule_check = $value;
        return;
    }

    public function getRuleConnection()
    {
        return $this->m_rule_connection;
    }
    public function setRuleConnection($value)
    {
        $this->m_rule_connection = $value;
        return;
    }

    public function getRuleString()
    {
        return $this->m_rule_string;
    }
    public function setRuleString($value)
    {
        $this->m_rule_string = $value;
        return;
    }

    public function getRuleUserId()
    {
        return $this->m_rule_user_id;
    }
    public function setRuleUserId($value)
    {
        $this->m_rule_user_id = $value;
        return;
    }

    public function getRuleGroupId()
    {
        return $this->m_rule_group_id;
    }
    public function setRuleGroupId($value)
    {
        $this->m_rule_group_id = $value;
        return;
    }

    public function getRuleAction()
    {
        return $this->m_rule_action;
    }
    public function setRuleAction($value)
    {
        $this->m_rule_action = $value;
        return;
    }

    public function getRuleFolderId()
    {
        return $this->m_rule_folder_id;
    }
    public function setRuleFolderId($value)
    {
        $this->m_rule_folder_id = $value;
        return;
    }

    public function getOrigRuleId()
    {
        return $this->m_rule_id_Orig;
    }
    public function setOrigRuleId($value)
    {
        if (isset($this->m_rule_id_Orig)) { return; }
        $this->m_rule_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRuleId($arrValues['rule_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setRuleCheck($arrValues['rule_check']);
        $this->setRuleConnection($arrValues['rule_connection']);
        $this->setRuleString($arrValues['rule_string']);
        $this->setRuleUserId($arrValues['rule_user_id']);
        $this->setRuleGroupId($arrValues['rule_group_id']);
        $this->setRuleAction($arrValues['rule_action']);
        $this->setRuleFolderId($arrValues['rule_folder_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'rule_id':
                    $this->setRuleId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'rule_check':
                    $this->setRuleCheck($val);
                    break;
                case 'rule_connection':
                    $this->setRuleConnection($val);
                    break;
                case 'rule_string':
                    $this->setRuleString($val);
                    break;
                case 'rule_user_id':
                    $this->setRuleUserId($val);
                    break;
                case 'rule_group_id':
                    $this->setRuleGroupId($val);
                    break;
                case 'rule_action':
                    $this->setRuleAction($val);
                    break;
                case 'rule_folder_id':
                    $this->setRuleFolderId($val);
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
        $arrValues['rule_id'] = $this->getRuleId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['rule_check'] = $this->getRuleCheck();
        $arrValues['rule_connection'] = $this->getRuleConnection();
        $arrValues['rule_string'] = $this->getRuleString();
        $arrValues['rule_user_id'] = $this->getRuleUserId();
        $arrValues['rule_group_id'] = $this->getRuleGroupId();
        $arrValues['rule_action'] = $this->getRuleAction();
        $arrValues['rule_folder_id'] = $this->getRuleFolderId();
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
