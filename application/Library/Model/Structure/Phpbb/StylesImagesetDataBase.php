<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_StylesImagesetDataBase
{
    protected $m_image_id;
    protected $m_image_name;
    protected $m_image_filename;
    protected $m_image_lang;
    protected $m_image_height;
    protected $m_image_width;
    protected $m_imageset_id;
    protected $m_image_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setImageName('');
            $this->setImageFilename('');
            $this->setImageLang('');
            $this->setImageHeight(0);
            $this->setImageWidth(0);
            $this->setImagesetId(0);
        }
        return;
    }
    public function StylesImagesetDataBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getImageId()
    {
        return $this->m_image_id;
    }
    public function setImageId($value)
    {
        $this->m_image_id = $value;
        $this->setOrigImageId($value);
        return;
    }

    public function getImageName()
    {
        return $this->m_image_name;
    }
    public function setImageName($value)
    {
        $this->m_image_name = $value;
        return;
    }

    public function getImageFilename()
    {
        return $this->m_image_filename;
    }
    public function setImageFilename($value)
    {
        $this->m_image_filename = $value;
        return;
    }

    public function getImageLang()
    {
        return $this->m_image_lang;
    }
    public function setImageLang($value)
    {
        $this->m_image_lang = $value;
        return;
    }

    public function getImageHeight()
    {
        return $this->m_image_height;
    }
    public function setImageHeight($value)
    {
        $this->m_image_height = $value;
        return;
    }

    public function getImageWidth()
    {
        return $this->m_image_width;
    }
    public function setImageWidth($value)
    {
        $this->m_image_width = $value;
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

    public function getOrigImageId()
    {
        return $this->m_image_id_Orig;
    }
    public function setOrigImageId($value)
    {
        if (isset($this->m_image_id_Orig)) { return; }
        $this->m_image_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setImageId($arrValues['image_id']);
        $this->setImageName($arrValues['image_name']);
        $this->setImageFilename($arrValues['image_filename']);
        $this->setImageLang($arrValues['image_lang']);
        $this->setImageHeight($arrValues['image_height']);
        $this->setImageWidth($arrValues['image_width']);
        $this->setImagesetId($arrValues['imageset_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'image_id':
                    $this->setImageId($val);
                    break;
                case 'image_name':
                    $this->setImageName($val);
                    break;
                case 'image_filename':
                    $this->setImageFilename($val);
                    break;
                case 'image_lang':
                    $this->setImageLang($val);
                    break;
                case 'image_height':
                    $this->setImageHeight($val);
                    break;
                case 'image_width':
                    $this->setImageWidth($val);
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
        $arrValues['image_id'] = $this->getImageId();
        $arrValues['image_name'] = $this->getImageName();
        $arrValues['image_filename'] = $this->getImageFilename();
        $arrValues['image_lang'] = $this->getImageLang();
        $arrValues['image_height'] = $this->getImageHeight();
        $arrValues['image_width'] = $this->getImageWidth();
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
