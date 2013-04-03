<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_GroupsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Groups($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Groups($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($group_id)
    {
        $strSql = 'SELECT * FROM phpbb_groups WHERE group_id=?';
        $params = array($group_id);
        return Model_Data_Phpbb_GroupsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_groups (
            group_id,
            group_type,
            group_founder_manage,
            group_skip_auth,
            group_name,
            group_desc,
            group_desc_bitfield,
            group_desc_options,
            group_desc_uid,
            group_display,
            group_avatar,
            group_avatar_type,
            group_avatar_width,
            group_avatar_height,
            group_rank,
            group_colour,
            group_sig_chars,
            group_receive_pm,
            group_message_limit,
            group_max_recipients,
            group_legend
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGroupType(),
            $objRecord->getGroupFounderManage(),
            $objRecord->getGroupSkipAuth(),
            $objRecord->getGroupName(),
            $objRecord->getGroupDesc(),
            $objRecord->getGroupDescBitfield(),
            $objRecord->getGroupDescOptions(),
            $objRecord->getGroupDescUid(),
            $objRecord->getGroupDisplay(),
            $objRecord->getGroupAvatar(),
            $objRecord->getGroupAvatarType(),
            $objRecord->getGroupAvatarWidth(),
            $objRecord->getGroupAvatarHeight(),
            $objRecord->getGroupRank(),
            $objRecord->getGroupColour(),
            $objRecord->getGroupSigChars(),
            $objRecord->getGroupReceivePm(),
            $objRecord->getGroupMessageLimit(),
            $objRecord->getGroupMaxRecipients(),
            $objRecord->getGroupLegend()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setGroupId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_groups SET 
            group_id=?,
            group_type=?,
            group_founder_manage=?,
            group_skip_auth=?,
            group_name=?,
            group_desc=?,
            group_desc_bitfield=?,
            group_desc_options=?,
            group_desc_uid=?,
            group_display=?,
            group_avatar=?,
            group_avatar_type=?,
            group_avatar_width=?,
            group_avatar_height=?,
            group_rank=?,
            group_colour=?,
            group_sig_chars=?,
            group_receive_pm=?,
            group_message_limit=?,
            group_max_recipients=?,
            group_legend=?
        WHERE group_id=?';
        $arrSetParams = array(
            $objRecord->getGroupId(),
            $objRecord->getGroupType(),
            $objRecord->getGroupFounderManage(),
            $objRecord->getGroupSkipAuth(),
            $objRecord->getGroupName(),
            $objRecord->getGroupDesc(),
            $objRecord->getGroupDescBitfield(),
            $objRecord->getGroupDescOptions(),
            $objRecord->getGroupDescUid(),
            $objRecord->getGroupDisplay(),
            $objRecord->getGroupAvatar(),
            $objRecord->getGroupAvatarType(),
            $objRecord->getGroupAvatarWidth(),
            $objRecord->getGroupAvatarHeight(),
            $objRecord->getGroupRank(),
            $objRecord->getGroupColour(),
            $objRecord->getGroupSigChars(),
            $objRecord->getGroupReceivePm(),
            $objRecord->getGroupMessageLimit(),
            $objRecord->getGroupMaxRecipients(),
            $objRecord->getGroupLegend()
        );
        $arrKeyParams = array($objRecord->getOrigGroupId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_groups WHERE group_id=?';
        $params = array($objRecord->getGroupId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
