<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_StylesThemeProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_StylesTheme($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_StylesTheme($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($theme_id)
    {
        $strSql = 'SELECT * FROM phpbb_styles_theme WHERE theme_id=?';
        $params = array($theme_id);
        return Model_Data_Phpbb_StylesThemeProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_styles_theme (
            theme_id,
            theme_name,
            theme_copyright,
            theme_path,
            theme_storedb,
            theme_mtime,
            theme_data
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getThemeName(),
            $objRecord->getThemeCopyright(),
            $objRecord->getThemePath(),
            $objRecord->getThemeStoredb(),
            $objRecord->getThemeMtime(),
            $objRecord->getThemeData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setThemeId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_styles_theme SET 
            theme_id=?,
            theme_name=?,
            theme_copyright=?,
            theme_path=?,
            theme_storedb=?,
            theme_mtime=?,
            theme_data=?
        WHERE theme_id=?';
        $arrSetParams = array(
            $objRecord->getThemeId(),
            $objRecord->getThemeName(),
            $objRecord->getThemeCopyright(),
            $objRecord->getThemePath(),
            $objRecord->getThemeStoredb(),
            $objRecord->getThemeMtime(),
            $objRecord->getThemeData()
        );
        $arrKeyParams = array($objRecord->getOrigThemeId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_styles_theme WHERE theme_id=?';
        $params = array($objRecord->getThemeId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
