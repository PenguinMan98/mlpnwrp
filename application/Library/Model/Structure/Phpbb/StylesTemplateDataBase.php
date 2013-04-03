<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_StylesTemplateDataBase
{
    protected $m_template_id;
    protected $m_template_filename;
    protected $m_template_included;
    protected $m_template_mtime;
    protected $m_template_data;
    protected $m_template_id_Orig;
    protected $m_template_filename_Orig;
    protected $m_template_included_Orig;
    protected $m_template_mtime_Orig;
    protected $m_template_data_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function StylesTemplateDataBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTemplateId()
    {
        return $this->m_template_id;
    }
    public function setTemplateId($value)
    {
        $this->m_template_id = $value;
        $this->setOrigTemplateId($value);
        return;
    }

    public function getTemplateFilename()
    {
        return $this->m_template_filename;
    }
    public function setTemplateFilename($value)
    {
        $this->m_template_filename = $value;
        $this->setOrigTemplateFilename($value);
        return;
    }

    public function getTemplateIncluded()
    {
        return $this->m_template_included;
    }
    public function setTemplateIncluded($value)
    {
        $this->m_template_included = $value;
        $this->setOrigTemplateIncluded($value);
        return;
    }

    public function getTemplateMtime()
    {
        return $this->m_template_mtime;
    }
    public function setTemplateMtime($value)
    {
        $this->m_template_mtime = $value;
        $this->setOrigTemplateMtime($value);
        return;
    }

    public function getTemplateData()
    {
        return $this->m_template_data;
    }
    public function setTemplateData($value)
    {
        $this->m_template_data = $value;
        $this->setOrigTemplateData($value);
        return;
    }

    public function getOrigTemplateId()
    {
        return $this->m_template_id_Orig;
    }
    public function setOrigTemplateId($value)
    {
        if (isset($this->m_template_id_Orig)) { return; }
        $this->m_template_id_Orig = $value;
        return;
    }

    public function getOrigTemplateFilename()
    {
        return $this->m_template_filename_Orig;
    }
    public function setOrigTemplateFilename($value)
    {
        if (isset($this->m_template_filename_Orig)) { return; }
        $this->m_template_filename_Orig = $value;
        return;
    }

    public function getOrigTemplateIncluded()
    {
        return $this->m_template_included_Orig;
    }
    public function setOrigTemplateIncluded($value)
    {
        if (isset($this->m_template_included_Orig)) { return; }
        $this->m_template_included_Orig = $value;
        return;
    }

    public function getOrigTemplateMtime()
    {
        return $this->m_template_mtime_Orig;
    }
    public function setOrigTemplateMtime($value)
    {
        if (isset($this->m_template_mtime_Orig)) { return; }
        $this->m_template_mtime_Orig = $value;
        return;
    }

    public function getOrigTemplateData()
    {
        return $this->m_template_data_Orig;
    }
    public function setOrigTemplateData($value)
    {
        if (isset($this->m_template_data_Orig)) { return; }
        $this->m_template_data_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTemplateId($arrValues['template_id']);
        $this->setTemplateFilename($arrValues['template_filename']);
        $this->setTemplateIncluded($arrValues['template_included']);
        $this->setTemplateMtime($arrValues['template_mtime']);
        $this->setTemplateData($arrValues['template_data']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'template_id':
                    $this->setTemplateId($val);
                    break;
                case 'template_filename':
                    $this->setTemplateFilename($val);
                    break;
                case 'template_included':
                    $this->setTemplateIncluded($val);
                    break;
                case 'template_mtime':
                    $this->setTemplateMtime($val);
                    break;
                case 'template_data':
                    $this->setTemplateData($val);
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
        $arrValues['template_id'] = $this->getTemplateId();
        $arrValues['template_filename'] = $this->getTemplateFilename();
        $arrValues['template_included'] = $this->getTemplateIncluded();
        $arrValues['template_mtime'] = $this->getTemplateMtime();
        $arrValues['template_data'] = $this->getTemplateData();
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
