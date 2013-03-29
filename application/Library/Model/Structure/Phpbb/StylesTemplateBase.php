<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_StylesTemplateBase
{
    protected $m_template_id;
    protected $m_template_name;
    protected $m_template_copyright;
    protected $m_template_path;
    protected $m_bbcode_bitfield;
    protected $m_template_storedb;
    protected $m_template_inherits_id;
    protected $m_template_inherit_path;
    protected $m_template_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTemplateName('');
            $this->setTemplateCopyright('');
            $this->setTemplatePath('');
            $this->setBbcodeBitfield('kNg=');
            $this->setTemplateStoredb(0);
            $this->setTemplateInheritsId(0);
            $this->setTemplateInheritPath('');
        }
        return;
    }
    public function StylesTemplateBase($arrData = null)
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

    public function getTemplateName()
    {
        return $this->m_template_name;
    }
    public function setTemplateName($value)
    {
        $this->m_template_name = $value;
        return;
    }

    public function getTemplateCopyright()
    {
        return $this->m_template_copyright;
    }
    public function setTemplateCopyright($value)
    {
        $this->m_template_copyright = $value;
        return;
    }

    public function getTemplatePath()
    {
        return $this->m_template_path;
    }
    public function setTemplatePath($value)
    {
        $this->m_template_path = $value;
        return;
    }

    public function getBbcodeBitfield()
    {
        return $this->m_bbcode_bitfield;
    }
    public function setBbcodeBitfield($value)
    {
        $this->m_bbcode_bitfield = $value;
        return;
    }

    public function getTemplateStoredb()
    {
        return $this->m_template_storedb;
    }
    public function setTemplateStoredb($value)
    {
        $this->m_template_storedb = $value;
        return;
    }

    public function getTemplateInheritsId()
    {
        return $this->m_template_inherits_id;
    }
    public function setTemplateInheritsId($value)
    {
        $this->m_template_inherits_id = $value;
        return;
    }

    public function getTemplateInheritPath()
    {
        return $this->m_template_inherit_path;
    }
    public function setTemplateInheritPath($value)
    {
        $this->m_template_inherit_path = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setTemplateId($arrValues['template_id']);
        $this->setTemplateName($arrValues['template_name']);
        $this->setTemplateCopyright($arrValues['template_copyright']);
        $this->setTemplatePath($arrValues['template_path']);
        $this->setBbcodeBitfield($arrValues['bbcode_bitfield']);
        $this->setTemplateStoredb($arrValues['template_storedb']);
        $this->setTemplateInheritsId($arrValues['template_inherits_id']);
        $this->setTemplateInheritPath($arrValues['template_inherit_path']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'template_id':
                    $this->setTemplateId($val);
                    break;
                case 'template_name':
                    $this->setTemplateName($val);
                    break;
                case 'template_copyright':
                    $this->setTemplateCopyright($val);
                    break;
                case 'template_path':
                    $this->setTemplatePath($val);
                    break;
                case 'bbcode_bitfield':
                    $this->setBbcodeBitfield($val);
                    break;
                case 'template_storedb':
                    $this->setTemplateStoredb($val);
                    break;
                case 'template_inherits_id':
                    $this->setTemplateInheritsId($val);
                    break;
                case 'template_inherit_path':
                    $this->setTemplateInheritPath($val);
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
        $arrValues['template_name'] = $this->getTemplateName();
        $arrValues['template_copyright'] = $this->getTemplateCopyright();
        $arrValues['template_path'] = $this->getTemplatePath();
        $arrValues['bbcode_bitfield'] = $this->getBbcodeBitfield();
        $arrValues['template_storedb'] = $this->getTemplateStoredb();
        $arrValues['template_inherits_id'] = $this->getTemplateInheritsId();
        $arrValues['template_inherit_path'] = $this->getTemplateInheritPath();
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
