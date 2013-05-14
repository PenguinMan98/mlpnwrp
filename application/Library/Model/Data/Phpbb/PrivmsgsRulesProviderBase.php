<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_PrivmsgsRulesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_PrivmsgsRules($arrResults[0]);
            }
        }
        return null;
    }

    protected function getArrayFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            $arrRecordList = array();
            foreach ($arrResults as $arrRecord) {
                $arrRecordList[] = new Model_Structure_Phpbb_PrivmsgsRules($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($rule_id)
    {
        $strSql = 'SELECT * FROM `phpbb_privmsgs_rules` WHERE rule_id=?';
        $params = array($rule_id);
        return Model_Data_Phpbb_PrivmsgsRulesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_privmsgs_rules` (
            rule_id,
            user_id,
            rule_check,
            rule_connection,
            rule_string,
            rule_user_id,
            rule_group_id,
            rule_action,
            rule_folder_id
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserId(),
            $objRecord->getRuleCheck(),
            $objRecord->getRuleConnection(),
            $objRecord->getRuleString(),
            $objRecord->getRuleUserId(),
            $objRecord->getRuleGroupId(),
            $objRecord->getRuleAction(),
            $objRecord->getRuleFolderId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRuleId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_privmsgs_rules` (
            rule_id,
            user_id,
            rule_check,
            rule_connection,
            rule_string,
            rule_user_id,
            rule_group_id,
            rule_action,
            rule_folder_id
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserId(),
            $objRecord->getRuleCheck(),
            $objRecord->getRuleConnection(),
            $objRecord->getRuleString(),
            $objRecord->getRuleUserId(),
            $objRecord->getRuleGroupId(),
            $objRecord->getRuleAction(),
            $objRecord->getRuleFolderId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRuleId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_privmsgs_rules` SET 
            rule_id=?,
            user_id=?,
            rule_check=?,
            rule_connection=?,
            rule_string=?,
            rule_user_id=?,
            rule_group_id=?,
            rule_action=?,
            rule_folder_id=?
        WHERE rule_id=?';
        $arrSetParams = array(
            $objRecord->getRuleId(),
            $objRecord->getUserId(),
            $objRecord->getRuleCheck(),
            $objRecord->getRuleConnection(),
            $objRecord->getRuleString(),
            $objRecord->getRuleUserId(),
            $objRecord->getRuleGroupId(),
            $objRecord->getRuleAction(),
            $objRecord->getRuleFolderId()
        );
        $arrKeyParams = array($objRecord->getOrigRuleId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_privmsgs_rules` WHERE rule_id=?';
        $params = array($objRecord->getRuleId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
