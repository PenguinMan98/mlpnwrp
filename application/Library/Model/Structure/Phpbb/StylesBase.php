<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_StylesBase
{
    protected $m_style_id;
    protected $m_style_name;
    protected $m_style_copyright;
    protected $m_style_active;
    protected $m_template_id;
    protected $m_theme_id;
    protected $m_imageset_id;
    protected $m_style_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setStyleName('');
            $this->setStyleCopyright('');
            $this->setStyleActive(1);
            $this->setTemplateId(0);
            $this->setThemeId(0);
            $this->setImagesetId(0);
        }
        return;
    }
    public function StylesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getStyleId()
    {
        return $this->m_style_id;
    }
    public function setStyleId($value)
    {
        $this->m_style_id = $value;
        $this->setOrigStyleId($value);
        return;
    }

    public function getStyleName()
    {
        return $this->m_style_name;
    }
    public function setStyleName($value)
    {
        $this->m_style_name = $value;
        return;
    }

    public function getStyleCopyright()
    {
        return $this->m_style_copyright;
    }
    public function setStyleCopyright($value)
    {
        $this->m_style_copyright = $value;
        return;
    }

    public function getStyleActive()
    {
        return $this->m_style_active;
    }
    public function setStyleActive($value)
    {
        $this->m_style_active = $value;
        return;
    }

    public function getTemplateId()
    {
        return $this->m_template_id;
    }
    public function setTemplateId($value)
    {
        $this->m_template_id = $value;
        return;
    }

    public function getThemeId()
    {
        return $this->m_theme_id;
    }
    public function setThemeId($value)
    {
        $this->m_theme_id = $value;
        return;
    }

    public function getImagesetId()
    {
        return $this->m_imageset_id;
    }
    public function setImagesetId($value)
    {
        $this->m_imageset_id = $value;
        return;
    }

    public function getOrigStyleId()
    {
        return $this->m_style_id_Orig;
    }
    public function setOrigStyleId($value)
    {
        if (isset($this->m_style_id_Orig)) { return; }
        $this->m_style_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setStyleId($arrValues['style_id']);
        $this->setStyleName($arrValues['style_name']);
        $this->setStyleCopyright($arrValues['style_copyright']);
        $this->setStyleActive($arrValues['style_active']);
        $this->setTemplateId($arrValues['template_id']);
        $this->setThemeId($arrValues['theme_id']);
        $this->setImagesetId($arrValues['imageset_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'style_id':
                    $this->setStyleId($val);
                    break;
                case 'style_name':
                    $this->setStyleName($val);
                    break;
                case 'style_copyright':
                    $this->setStyleCopyright($val);
                    break;
                case 'style_active':
                    $this->setStyleActive($val);
                    break;
                case 'template_id':
                    $this->setTemplateId($val);
                    break;
                case 'theme_id':
                    $this->setThemeId($val);
                    break;
                case 'imageset_id':
                    $this->setImagesetId($val);
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
        $arrValues['style_id'] = $this->getStyleId();
        $arrValues['style_name'] = $this->getStyleName();
        $arrValues['style_copyright'] = $this->getStyleCopyright();
        $arrValues['style_active'] = $this->getStyleActive();
        $arrValues['template_id'] = $this->getTemplateId();
        $arrValues['theme_id'] = $this->getThemeId();
        $arrValues['imageset_id'] = $this->getImagesetId();
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
