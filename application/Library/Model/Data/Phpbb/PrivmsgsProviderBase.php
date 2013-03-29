<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_PrivmsgsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Privmsgs($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Privmsgs($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($msg_id)
    {
        $strSql = 'SELECT * FROM phpbb_privmsgs WHERE msg_id=?';
        $params = array($msg_id);
        return Model_Data_Phpbb_PrivmsgsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_privmsgs (
            msg_id,
            root_level,
            author_id,
            icon_id,
            author_ip,
            message_time,
            enable_bbcode,
            enable_smilies,
            enable_magic_url,
            enable_sig,
            message_subject,
            message_text,
            message_edit_reason,
            message_edit_user,
            message_attachment,
            bbcode_bitfield,
            bbcode_uid,
            message_edit_time,
            message_edit_count,
            to_address,
            bcc_address,
            message_reported
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRootLevel(),
            $objRecord->getAuthorId(),
            $objRecord->getIconId(),
            $objRecord->getAuthorIp(),
            $objRecord->getMessageTime(),
            $objRecord->getEnableBbcode(),
            $objRecord->getEnableSmilies(),
            $objRecord->getEnableMagicUrl(),
            $objRecord->getEnableSig(),
            $objRecord->getMessageSubject(),
            $objRecord->getMessageText(),
            $objRecord->getMessageEditReason(),
            $objRecord->getMessageEditUser(),
            $objRecord->getMessageAttachment(),
            $objRecord->getBbcodeBitfield(),
            $objRecord->getBbcodeUid(),
            $objRecord->getMessageEditTime(),
            $objRecord->getMessageEditCount(),
            $objRecord->getToAddress(),
            $objRecord->getBccAddress(),
            $objRecord->getMessageReported()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMsgId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_privmsgs SET 
            msg_id=?,
            root_level=?,
            author_id=?,
            icon_id=?,
            author_ip=?,
            message_time=?,
            enable_bbcode=?,
            enable_smilies=?,
            enable_magic_url=?,
            enable_sig=?,
            message_subject=?,
            message_text=?,
            message_edit_reason=?,
            message_edit_user=?,
            message_attachment=?,
            bbcode_bitfield=?,
            bbcode_uid=?,
            message_edit_time=?,
            message_edit_count=?,
            to_address=?,
            bcc_address=?,
            message_reported=?
        WHERE msg_id=?';
        $arrSetParams = array(
            $objRecord->getMsgId(),
            $objRecord->getRootLevel(),
            $objRecord->getAuthorId(),
            $objRecord->getIconId(),
            $objRecord->getAuthorIp(),
            $objRecord->getMessageTime(),
            $objRecord->getEnableBbcode(),
            $objRecord->getEnableSmilies(),
            $objRecord->getEnableMagicUrl(),
            $objRecord->getEnableSig(),
            $objRecord->getMessageSubject(),
            $objRecord->getMessageText(),
            $objRecord->getMessageEditReason(),
            $objRecord->getMessageEditUser(),
            $objRecord->getMessageAttachment(),
            $objRecord->getBbcodeBitfield(),
            $objRecord->getBbcodeUid(),
            $objRecord->getMessageEditTime(),
            $objRecord->getMessageEditCount(),
            $objRecord->getToAddress(),
            $objRecord->getBccAddress(),
            $objRecord->getMessageReported()
        );
        $arrKeyParams = array($objRecord->getOrigMsgId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_privmsgs WHERE msg_id=?';
        $params = array($objRecord->getMsgId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
