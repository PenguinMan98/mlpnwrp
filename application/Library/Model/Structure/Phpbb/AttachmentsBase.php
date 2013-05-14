<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_AttachmentsBase
{
    protected $m_attach_id;
    protected $m_post_msg_id;
    protected $m_topic_id;
    protected $m_in_message;
    protected $m_poster_id;
    protected $m_is_orphan;
    protected $m_physical_filename;
    protected $m_real_filename;
    protected $m_download_count;
    protected $m_attach_comment;
    protected $m_extension;
    protected $m_mimetype;
    protected $m_filesize;
    protected $m_filetime;
    protected $m_thumbnail;
    protected $m_attach_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPostMsgId(0);
            $this->setTopicId(0);
            $this->setInMessage(0);
            $this->setPosterId(0);
            $this->setIsOrphan(1);
            $this->setPhysicalFilename('');
            $this->setRealFilename('');
            $this->setDownloadCount(0);
            $this->setExtension('');
            $this->setMimetype('');
            $this->setFilesize(0);
            $this->setFiletime(0);
            $this->setThumbnail(0);
        }
        return;
    }
    public function AttachmentsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAttachId()
    {
        return $this->m_attach_id;
    }
    public function setAttachId($value)
    {
        $this->m_attach_id = $value;
        $this->setOrigAttachId($value);
        return;
    }

    public function getPostMsgId()
    {
        return $this->m_post_msg_id;
    }
    public function setPostMsgId($value)
    {
        $this->m_post_msg_id = $value;
        return;
    }

    public function getTopicId()
    {
        return $this->m_topic_id;
    }
    public function setTopicId($value)
    {
        $this->m_topic_id = $value;
        return;
    }

    public function getInMessage()
    {
        return $this->m_in_message;
    }
    public function setInMessage($value)
    {
        $this->m_in_message = $value;
        return;
    }

    public function getPosterId()
    {
        return $this->m_poster_id;
    }
    public function setPosterId($value)
    {
        $this->m_poster_id = $value;
        return;
    }

    public function getIsOrphan()
    {
        return $this->m_is_orphan;
    }
    public function setIsOrphan($value)
    {
        $this->m_is_orphan = $value;
        return;
    }

    public function getPhysicalFilename()
    {
        return $this->m_physical_filename;
    }
    public function setPhysicalFilename($value)
    {
        $this->m_physical_filename = $value;
        return;
    }

    public function getRealFilename()
    {
        return $this->m_real_filename;
    }
    public function setRealFilename($value)
    {
        $this->m_real_filename = $value;
        return;
    }

    public function getDownloadCount()
    {
        return $this->m_download_count;
    }
    public function setDownloadCount($value)
    {
        $this->m_download_count = $value;
        return;
    }

    public function getAttachComment()
    {
        return $this->m_attach_comment;
    }
    public function setAttachComment($value)
    {
        $this->m_attach_comment = $value;
        return;
    }

    public function getExtension()
    {
        return $this->m_extension;
    }
    public function setExtension($value)
    {
        $this->m_extension = $value;
        return;
    }

    public function getMimetype()
    {
        return $this->m_mimetype;
    }
    public function setMimetype($value)
    {
        $this->m_mimetype = $value;
        return;
    }

    public function getFilesize()
    {
        return $this->m_filesize;
    }
    public function setFilesize($value)
    {
        $this->m_filesize = $value;
        return;
    }

    public function getFiletime()
    {
        return $this->m_filetime;
    }
    public function setFiletime($value)
    {
        $this->m_filetime = $value;
        return;
    }

    public function getThumbnail()
    {
        return $this->m_thumbnail;
    }
    public function setThumbnail($value)
    {
        $this->m_thumbnail = $value;
        return;
    }

    public function getOrigAttachId()
    {
        return $this->m_attach_id_Orig;
    }
    public function setOrigAttachId($value)
    {
        if (isset($this->m_attach_id_Orig)) { return; }
        $this->m_attach_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAttachId($arrValues['attach_id']);
        $this->setPostMsgId($arrValues['post_msg_id']);
        $this->setTopicId($arrValues['topic_id']);
        $this->setInMessage($arrValues['in_message']);
        $this->setPosterId($arrValues['poster_id']);
        $this->setIsOrphan($arrValues['is_orphan']);
        $this->setPhysicalFilename($arrValues['physical_filename']);
        $this->setRealFilename($arrValues['real_filename']);
        $this->setDownloadCount($arrValues['download_count']);
        $this->setAttachComment($arrValues['attach_comment']);
        $this->setExtension($arrValues['extension']);
        $this->setMimetype($arrValues['mimetype']);
        $this->setFilesize($arrValues['filesize']);
        $this->setFiletime($arrValues['filetime']);
        $this->setThumbnail($arrValues['thumbnail']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'attach_id':
                    $this->setAttachId($val);
                    break;
                case 'post_msg_id':
                    $this->setPostMsgId($val);
                    break;
                case 'topic_id':
                    $this->setTopicId($val);
                    break;
                case 'in_message':
                    $this->setInMessage($val);
                    break;
                case 'poster_id':
                    $this->setPosterId($val);
                    break;
                case 'is_orphan':
                    $this->setIsOrphan($val);
                    break;
                case 'physical_filename':
                    $this->setPhysicalFilename($val);
                    break;
                case 'real_filename':
                    $this->setRealFilename($val);
                    break;
                case 'download_count':
                    $this->setDownloadCount($val);
                    break;
                case 'attach_comment':
                    $this->setAttachComment($val);
                    break;
                case 'extension':
                    $this->setExtension($val);
                    break;
                case 'mimetype':
                    $this->setMimetype($val);
                    break;
                case 'filesize':
                    $this->setFilesize($val);
                    break;
                case 'filetime':
                    $this->setFiletime($val);
                    break;
                case 'thumbnail':
                    $this->setThumbnail($val);
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
        $arrValues['attach_id'] = $this->getAttachId();
        $arrValues['post_msg_id'] = $this->getPostMsgId();
        $arrValues['topic_id'] = $this->getTopicId();
        $arrValues['in_message'] = $this->getInMessage();
        $arrValues['poster_id'] = $this->getPosterId();
        $arrValues['is_orphan'] = $this->getIsOrphan();
        $arrValues['physical_filename'] = $this->getPhysicalFilename();
        $arrValues['real_filename'] = $this->getRealFilename();
        $arrValues['download_count'] = $this->getDownloadCount();
        $arrValues['attach_comment'] = $this->getAttachComment();
        $arrValues['extension'] = $this->getExtension();
        $arrValues['mimetype'] = $this->getMimetype();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['filetime'] = $this->getFiletime();
        $arrValues['thumbnail'] = $this->getThumbnail();
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
