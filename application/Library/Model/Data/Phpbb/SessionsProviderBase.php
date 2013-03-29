<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_SessionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Sessions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Sessions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($session_id)
    {
        $strSql = 'SELECT * FROM phpbb_sessions WHERE session_id=?';
        $params = array($session_id);
        return Model_Data_Phpbb_SessionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_sessions (
            session_id,
            session_user_id,
            session_forum_id,
            session_last_visit,
            session_start,
            session_time,
            session_ip,
            session_browser,
            session_forwarded_for,
            session_page,
            session_viewonline,
            session_autologin,
            session_admin
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getSessionId(),
            $objRecord->getSessionUserId(),
            $objRecord->getSessionForumId(),
            $objRecord->getSessionLastVisit(),
            $objRecord->getSessionStart(),
            $objRecord->getSessionTime(),
            $objRecord->getSessionIp(),
            $objRecord->getSessionBrowser(),
            $objRecord->getSessionForwardedFor(),
            $objRecord->getSessionPage(),
            $objRecord->getSessionViewonline(),
            $objRecord->getSessionAutologin(),
            $objRecord->getSessionAdmin()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_sessions SET 
            session_id=?,
            session_user_id=?,
            session_forum_id=?,
            session_last_visit=?,
            session_start=?,
            session_time=?,
            session_ip=?,
            session_browser=?,
            session_forwarded_for=?,
            session_page=?,
            session_viewonline=?,
            session_autologin=?,
            session_admin=?
        WHERE session_id=?';
        $arrSetParams = array(
            $objRecord->getSessionId(),
            $objRecord->getSessionUserId(),
            $objRecord->getSessionForumId(),
            $objRecord->getSessionLastVisit(),
            $objRecord->getSessionStart(),
            $objRecord->getSessionTime(),
            $objRecord->getSessionIp(),
            $objRecord->getSessionBrowser(),
            $objRecord->getSessionForwardedFor(),
            $objRecord->getSessionPage(),
            $objRecord->getSessionViewonline(),
            $objRecord->getSessionAutologin(),
            $objRecord->getSessionAdmin()
        );
        $arrKeyParams = array($objRecord->getOrigSessionId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_sessions WHERE session_id=?';
        $params = array($objRecord->getSessionId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
