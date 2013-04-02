<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_SitelistBase
{
    protected $m_site_id;
    protected $m_site_ip;
    protected $m_site_hostname;
    protected $m_ip_exclude;
    protected $m_site_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setSiteIp('');
            $this->setSiteHostname('');
            $this->setIpExclude(0);
        }
        return;
    }
    public function SitelistBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSiteId()
    {
        return $this->m_site_id;
    }
    public function setSiteId($value)
    {
        $this->m_site_id = $value;
        $this->setOrigSiteId($value);
        return;
    }

    public function getSiteIp()
    {
        return $this->m_site_ip;
    }
    public function setSiteIp($value)
    {
        $this->m_site_ip = $value;
        return;
    }

    public function getSiteHostname()
    {
        return $this->m_site_hostname;
    }
    public function setSiteHostname($value)
    {
        $this->m_site_hostname = $value;
        return;
    }

    public function getIpExclude()
    {
        return $this->m_ip_exclude;
    }
    public function setIpExclude($value)
    {
        $this->m_ip_exclude = $value;
        return;
    }

    public function getOrigSiteId()
    {
        return $this->m_site_id_Orig;
    }
    public function setOrigSiteId($value)
    {
        if (isset($this->m_site_id_Orig)) { return; }
        $this->m_site_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSiteId($arrValues['site_id']);
        $this->setSiteIp($arrValues['site_ip']);
        $this->setSiteHostname($arrValues['site_hostname']);
        $this->setIpExclude($arrValues['ip_exclude']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'site_id':
                    $this->setSiteId($val);
                    break;
                case 'site_ip':
                    $this->setSiteIp($val);
                    break;
                case 'site_hostname':
                    $this->setSiteHostname($val);
                    break;
                case 'ip_exclude':
                    $this->setIpExclude($val);
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
        $arrValues['site_id'] = $this->getSiteId();
        $arrValues['site_ip'] = $this->getSiteIp();
        $arrValues['site_hostname'] = $this->getSiteHostname();
        $arrValues['ip_exclude'] = $this->getIpExclude();
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
