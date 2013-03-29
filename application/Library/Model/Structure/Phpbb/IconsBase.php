<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_IconsBase
{
    protected $m_icons_id;
    protected $m_icons_url;
    protected $m_icons_width;
    protected $m_icons_height;
    protected $m_icons_order;
    protected $m_display_on_posting;
    protected $m_icons_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setIconsUrl('');
            $this->setIconsWidth(0);
            $this->setIconsHeight(0);
            $this->setIconsOrder(0);
            $this->setDisplayOnPosting(1);
        }
        return;
    }
    public function IconsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getIconsId()
    {
        return $this->m_icons_id;
    }
    public function setIconsId($value)
    {
        $this->m_icons_id = $value;
        $this->setOrigIconsId($value);
        return;
    }

    public function getIconsUrl()
    {
        return $this->m_icons_url;
    }
    public function setIconsUrl($value)
    {
        $this->m_icons_url = $value;
        return;
    }

    public function getIconsWidth()
    {
        return $this->m_icons_width;
    }
    public function setIconsWidth($value)
    {
        $this->m_icons_width = $value;
        return;
    }

    public function getIconsHeight()
    {
        return $this->m_icons_height;
    }
    public function setIconsHeight($value)
    {
        $this->m_icons_height = $value;
        return;
    }

    public function getIconsOrder()
    {
        return $this->m_icons_order;
    }
    public function setIconsOrder($value)
    {
        $this->m_icons_order = $value;
        return;
    }

    public function getDisplayOnPosting()
    {
        return $this->m_display_on_posting;
    }
    public function setDisplayOnPosting($value)
    {
        $this->m_display_on_posting = $value;
        return;
    }

    public function getOrigIconsId()
    {
        return $this->m_icons_id_Orig;
    }
    public function setOrigIconsId($value)
    {
        if (isset($this->m_icons_id_Orig)) { return; }
        $this->m_icons_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setIconsId($arrValues['icons_id']);
        $this->setIconsUrl($arrValues['icons_url']);
        $this->setIconsWidth($arrValues['icons_width']);
        $this->setIconsHeight($arrValues['icons_height']);
        $this->setIconsOrder($arrValues['icons_order']);
        $this->setDisplayOnPosting($arrValues['display_on_posting']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'icons_id':
                    $this->setIconsId($val);
                    break;
                case 'icons_url':
                    $this->setIconsUrl($val);
                    break;
                case 'icons_width':
                    $this->setIconsWidth($val);
                    break;
                case 'icons_height':
                    $this->setIconsHeight($val);
                    break;
                case 'icons_order':
                    $this->setIconsOrder($val);
                    break;
                case 'display_on_posting':
                    $this->setDisplayOnPosting($val);
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
        $arrValues['icons_id'] = $this->getIconsId();
        $arrValues['icons_url'] = $this->getIconsUrl();
        $arrValues['icons_width'] = $this->getIconsWidth();
        $arrValues['icons_height'] = $this->getIconsHeight();
        $arrValues['icons_order'] = $this->getIconsOrder();
        $arrValues['display_on_posting'] = $this->getDisplayOnPosting();
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
