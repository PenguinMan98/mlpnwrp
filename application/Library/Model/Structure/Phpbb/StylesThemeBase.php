<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_StylesThemeBase
{
    protected $m_theme_id;
    protected $m_theme_name;
    protected $m_theme_copyright;
    protected $m_theme_path;
    protected $m_theme_storedb;
    protected $m_theme_mtime;
    protected $m_theme_data;
    protected $m_theme_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setThemeName('');
            $this->setThemeCopyright('');
            $this->setThemePath('');
            $this->setThemeStoredb(0);
            $this->setThemeMtime(0);
        }
        return;
    }
    public function StylesThemeBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getThemeId()
    {
        return $this->m_theme_id;
    }
    public function setThemeId($value)
    {
        $this->m_theme_id = $value;
        $this->setOrigThemeId($value);
        return;
    }

    public function getThemeName()
    {
        return $this->m_theme_name;
    }
    public function setThemeName($value)
    {
        $this->m_theme_name = $value;
        return;
    }

    public function getThemeCopyright()
    {
        return $this->m_theme_copyright;
    }
    public function setThemeCopyright($value)
    {
        $this->m_theme_copyright = $value;
        return;
    }

    public function getThemePath()
    {
        return $this->m_theme_path;
    }
    public function setThemePath($value)
    {
        $this->m_theme_path = $value;
        return;
    }

    public function getThemeStoredb()
    {
        return $this->m_theme_storedb;
    }
    public function setThemeStoredb($value)
    {
        $this->m_theme_storedb = $value;
        return;
    }

    public function getThemeMtime()
    {
        return $this->m_theme_mtime;
    }
    public function setThemeMtime($value)
    {
        $this->m_theme_mtime = $value;
        return;
    }

    public function getThemeData()
    {
        return $this->m_theme_data;
    }
    public function setThemeData($value)
    {
        $this->m_theme_data = $value;
        return;
    }

    public function getOrigThemeId()
    {
        return $this->m_theme_id_Orig;
    }
    public function setOrigThemeId($value)
    {
        if (isset($this->m_theme_id_Orig)) { return; }
        $this->m_theme_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setThemeId($arrValues['theme_id']);
        $this->setThemeName($arrValues['theme_name']);
        $this->setThemeCopyright($arrValues['theme_copyright']);
        $this->setThemePath($arrValues['theme_path']);
        $this->setThemeStoredb($arrValues['theme_storedb']);
        $this->setThemeMtime($arrValues['theme_mtime']);
        $this->setThemeData($arrValues['theme_data']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'theme_id':
                    $this->setThemeId($val);
                    break;
                case 'theme_name':
                    $this->setThemeName($val);
                    break;
                case 'theme_copyright':
                    $this->setThemeCopyright($val);
                    break;
                case 'theme_path':
                    $this->setThemePath($val);
                    break;
                case 'theme_storedb':
                    $this->setThemeStoredb($val);
                    break;
                case 'theme_mtime':
                    $this->setThemeMtime($val);
                    break;
                case 'theme_data':
                    $this->setThemeData($val);
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
        $arrValues['theme_id'] = $this->getThemeId();
        $arrValues['theme_name'] = $this->getThemeName();
        $arrValues['theme_copyright'] = $this->getThemeCopyright();
        $arrValues['theme_path'] = $this->getThemePath();
        $arrValues['theme_storedb'] = $this->getThemeStoredb();
        $arrValues['theme_mtime'] = $this->getThemeMtime();
        $arrValues['theme_data'] = $this->getThemeData();
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
