<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_StylesImagesetBase
{
    protected $m_imageset_id;
    protected $m_imageset_name;
    protected $m_imageset_copyright;
    protected $m_imageset_path;
    protected $m_imageset_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setImagesetName('');
            $this->setImagesetCopyright('');
            $this->setImagesetPath('');
        }
        return;
    }
    public function StylesImagesetBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getImagesetId()
    {
        return $this->m_imageset_id;
    }
    public function setImagesetId($value)
    {
        $this->m_imageset_id = $value;
        $this->setOrigImagesetId($value);
        return;
    }

    public function getImagesetName()
    {
        return $this->m_imageset_name;
    }
    public function setImagesetName($value)
    {
        $this->m_imageset_name = $value;
        return;
    }

    public function getImagesetCopyright()
    {
        return $this->m_imageset_copyright;
    }
    public function setImagesetCopyright($value)
    {
        $this->m_imageset_copyright = $value;
        return;
    }

    public function getImagesetPath()
    {
        return $this->m_imageset_path;
    }
    public function setImagesetPath($value)
    {
        $this->m_imageset_path = $value;
        return;
    }

    public function getOrigImagesetId()
    {
        return $this->m_imageset_id_Orig;
    }
    public function setOrigImagesetId($value)
    {
        if (isset($this->m_imageset_id_Orig)) { return; }
        $this->m_imageset_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setImagesetId($arrValues['imageset_id']);
        $this->setImagesetName($arrValues['imageset_name']);
        $this->setImagesetCopyright($arrValues['imageset_copyright']);
        $this->setImagesetPath($arrValues['imageset_path']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'imageset_id':
                    $this->setImagesetId($val);
                    break;
                case 'imageset_name':
                    $this->setImagesetName($val);
                    break;
                case 'imageset_copyright':
                    $this->setImagesetCopyright($val);
                    break;
                case 'imageset_path':
                    $this->setImagesetPath($val);
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
        $arrValues['imageset_id'] = $this->getImagesetId();
        $arrValues['imageset_name'] = $this->getImagesetName();
        $arrValues['imageset_copyright'] = $this->getImagesetCopyright();
        $arrValues['imageset_path'] = $this->getImagesetPath();
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
