<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_PrivmsgsToProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_PrivmsgsTo($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_PrivmsgsTo($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($msg_id, $user_id, $author_id, $pm_deleted, $pm_new, $pm_unread, $pm_replied, $pm_marked, $pm_forwarded, $folder_id)
    {
        $strSql = 'SELECT * FROM phpbb_privmsgs_to WHERE msg_id=? AND user_id=? AND author_id=? AND pm_deleted=? AND pm_new=? AND pm_unread=? AND pm_replied=? AND pm_marked=? AND pm_forwarded=? AND folder_id=?';
        $params = array($msg_id, $user_id, $author_id, $pm_deleted, $pm_new, $pm_unread, $pm_replied, $pm_marked, $pm_forwarded, $folder_id);
        return Model_Data_Phpbb_PrivmsgsToProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_privmsgs_to (
            msg_id,
            user_id,
            author_id,
            pm_deleted,
            pm_new,
            pm_unread,
            pm_replied,
            pm_marked,
            pm_forwarded,
            folder_id
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getMsgId(),
            $objRecord->getUserId(),
            $objRecord->getAuthorId(),
            $objRecord->getPmDeleted(),
            $objRecord->getPmNew(),
            $objRecord->getPmUnread(),
            $objRecord->getPmReplied(),
            $objRecord->getPmMarked(),
            $objRecord->getPmForwarded(),
            $objRecord->getFolderId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_privmsgs_to SET 
            msg_id=?,
            user_id=?,
            author_id=?,
            pm_deleted=?,
            pm_new=?,
            pm_unread=?,
            pm_replied=?,
            pm_marked=?,
            pm_forwarded=?,
            folder_id=?
        WHERE msg_id=? AND user_id=? AND author_id=? AND pm_deleted=? AND pm_new=? AND pm_unread=? AND pm_replied=? AND pm_marked=? AND pm_forwarded=? AND folder_id=?';
        $arrSetParams = array(
            $objRecord->getMsgId(),
            $objRecord->getUserId(),
            $objRecord->getAuthorId(),
            $objRecord->getPmDeleted(),
            $objRecord->getPmNew(),
            $objRecord->getPmUnread(),
            $objRecord->getPmReplied(),
            $objRecord->getPmMarked(),
            $objRecord->getPmForwarded(),
            $objRecord->getFolderId()
        );
        $arrKeyParams = array($objRecord->getOrigMsgId(), $objRecord->getOrigUserId(), $objRecord->getOrigAuthorId(), $objRecord->getOrigPmDeleted(), $objRecord->getOrigPmNew(), $objRecord->getOrigPmUnread(), $objRecord->getOrigPmReplied(), $objRecord->getOrigPmMarked(), $objRecord->getOrigPmForwarded(), $objRecord->getOrigFolderId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_privmsgs_to WHERE msg_id=? AND user_id=? AND author_id=? AND pm_deleted=? AND pm_new=? AND pm_unread=? AND pm_replied=? AND pm_marked=? AND pm_forwarded=? AND folder_id=?';
        $params = array($objRecord->getMsgId(), $objRecord->getUserId(), $objRecord->getAuthorId(), $objRecord->getPmDeleted(), $objRecord->getPmNew(), $objRecord->getPmUnread(), $objRecord->getPmReplied(), $objRecord->getPmMarked(), $objRecord->getPmForwarded(), $objRecord->getFolderId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
