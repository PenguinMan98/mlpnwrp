<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_LoginAttemptsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_LoginAttempts($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_LoginAttempts($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($attempt_ip, $attempt_browser, $attempt_forwarded_for, $attempt_time, $user_id, $username, $username_clean)
    {
        $strSql = 'SELECT * FROM `phpbb_login_attempts` WHERE attempt_ip=? AND attempt_browser=? AND attempt_forwarded_for=? AND attempt_time=? AND user_id=? AND username=? AND username_clean=?';
        $params = array($attempt_ip, $attempt_browser, $attempt_forwarded_for, $attempt_time, $user_id, $username, $username_clean);
        return Model_Data_Phpbb_LoginAttemptsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_login_attempts` (
            attempt_ip,
            attempt_browser,
            attempt_forwarded_for,
            attempt_time,
            user_id,
            username,
            username_clean
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getAttemptIp(),
            $objRecord->getAttemptBrowser(),
            $objRecord->getAttemptForwardedFor(),
            $objRecord->getAttemptTime(),
            $objRecord->getUserId(),
            $objRecord->getUsername(),
            $objRecord->getUsernameClean()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_login_attempts` (
            attempt_ip,
            attempt_browser,
            attempt_forwarded_for,
            attempt_time,
            user_id,
            username,
            username_clean
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getAttemptIp(),
            $objRecord->getAttemptBrowser(),
            $objRecord->getAttemptForwardedFor(),
            $objRecord->getAttemptTime(),
            $objRecord->getUserId(),
            $objRecord->getUsername(),
            $objRecord->getUsernameClean()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_login_attempts` SET 
            attempt_ip=?,
            attempt_browser=?,
            attempt_forwarded_for=?,
            attempt_time=?,
            user_id=?,
            username=?,
            username_clean=?
        WHERE attempt_ip=? AND attempt_browser=? AND attempt_forwarded_for=? AND attempt_time=? AND user_id=? AND username=? AND username_clean=?';
        $arrSetParams = array(
            $objRecord->getAttemptIp(),
            $objRecord->getAttemptBrowser(),
            $objRecord->getAttemptForwardedFor(),
            $objRecord->getAttemptTime(),
            $objRecord->getUserId(),
            $objRecord->getUsername(),
            $objRecord->getUsernameClean()
        );
        $arrKeyParams = array($objRecord->getOrigAttemptIp(), $objRecord->getOrigAttemptBrowser(), $objRecord->getOrigAttemptForwardedFor(), $objRecord->getOrigAttemptTime(), $objRecord->getOrigUserId(), $objRecord->getOrigUsername(), $objRecord->getOrigUsernameClean());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_login_attempts` WHERE attempt_ip=? AND attempt_browser=? AND attempt_forwarded_for=? AND attempt_time=? AND user_id=? AND username=? AND username_clean=?';
        $params = array($objRecord->getAttemptIp(), $objRecord->getAttemptBrowser(), $objRecord->getAttemptForwardedFor(), $objRecord->getAttemptTime(), $objRecord->getUserId(), $objRecord->getUsername(), $objRecord->getUsernameClean());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
