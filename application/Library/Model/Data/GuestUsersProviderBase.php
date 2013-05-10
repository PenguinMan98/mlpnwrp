<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_GuestUsersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_GuestUsers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_GuestUsers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($guest_user_id)
    {
        $strSql = 'SELECT * FROM `guest_users` WHERE guest_user_id=?';
        $params = array($guest_user_id);
        return Model_Data_GuestUsersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `guest_users` (
            guest_user_id,
            handle,
            chat_room_id,
            user_id,
            created_date
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getHandle(),
            $objRecord->getChatRoomId(),
            $objRecord->getUserId(),
            $objRecord->getCreatedDate()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setGuestUserId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `guest_users` SET 
            guest_user_id=?,
            handle=?,
            chat_room_id=?,
            user_id=?,
            created_date=?
        WHERE guest_user_id=?';
        $arrSetParams = array(
            $objRecord->getGuestUserId(),
            $objRecord->getHandle(),
            $objRecord->getChatRoomId(),
            $objRecord->getUserId(),
            $objRecord->getCreatedDate()
        );
        $arrKeyParams = array($objRecord->getOrigGuestUserId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `guest_users` WHERE guest_user_id=?';
        $params = array($objRecord->getGuestUserId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
