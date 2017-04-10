<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Nines\UtilBundle\Entity\AbstractEntity;

/**
 * Caption
 *
 * @ORM\Table(name="caption")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CaptionRepository")
 */
class Caption extends AbstractEntity {

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $youtubeId;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $etag;
    
     /**
     * @var DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastUpdated;
        
    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $trackKind;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $language;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $name;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $audioTrackType;
    
    /**
     * @var string
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isCC;
    
    /**
     * @var string
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isDraft;
    
    /**
     * @var string
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isAutoSynced;
    
    /**
     * @var string
     * @ORM\Column(type="text", nullable=true);
     */
    private $content;

    /**
     * @var Video
     * @ORM\ManyToOne(targetEntity="Video", inversedBy="captions")
     */
    private $video;

    public function __toString() {
        if($this->name) {
            return $this->name;
        }
        return $this->youtubeId;
    }


    /**
     * Set youtubeId
     *
     * @param string $youtubeId
     *
     * @return Caption
     */
    public function setYoutubeId($youtubeId)
    {
        $this->youtubeId = $youtubeId;

        return $this;
    }

    /**
     * Get youtubeId
     *
     * @return string
     */
    public function getYoutubeId()
    {
        return $this->youtubeId;
    }

    /**
     * Set etag
     *
     * @param string $etag
     *
     * @return Caption
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }

    /**
     * Get etag
     *
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Set lastUpdated
     *
     * @param DateTime $lastUpdated
     *
     * @return Caption
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Get lastUpdated
     *
     * @return DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Set trackKind
     *
     * @param string $trackKind
     *
     * @return Caption
     */
    public function setTrackKind($trackKind)
    {
        $this->trackKind = $trackKind;

        return $this;
    }

    /**
     * Get trackKind
     *
     * @return string
     */
    public function getTrackKind()
    {
        return $this->trackKind;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Caption
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Caption
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set audioTrackType
     *
     * @param string $audioTrackType
     *
     * @return Caption
     */
    public function setAudioTrackType($audioTrackType)
    {
        $this->audioTrackType = $audioTrackType;

        return $this;
    }

    /**
     * Get audioTrackType
     *
     * @return string
     */
    public function getAudioTrackType()
    {
        return $this->audioTrackType;
    }

    /**
     * Set isCC
     *
     * @param boolean $isCC
     *
     * @return Caption
     */
    public function setIsCC($isCC)
    {
        $this->isCC = $isCC;

        return $this;
    }

    /**
     * Get isCC
     *
     * @return boolean
     */
    public function getIsCC()
    {
        return $this->isCC;
    }

    /**
     * Set isDraft
     *
     * @param boolean $isDraft
     *
     * @return Caption
     */
    public function setIsDraft($isDraft)
    {
        $this->isDraft = $isDraft;

        return $this;
    }

    /**
     * Get isDraft
     *
     * @return boolean
     */
    public function getIsDraft()
    {
        return $this->isDraft;
    }

    /**
     * Set isAutoSynced
     *
     * @param boolean $isAutoSynced
     *
     * @return Caption
     */
    public function setIsAutoSynced($isAutoSynced)
    {
        $this->isAutoSynced = $isAutoSynced;

        return $this;
    }

    /**
     * Get isAutoSynced
     *
     * @return boolean
     */
    public function getIsAutoSynced()
    {
        return $this->isAutoSynced;
    }

    /**
     * Set video
     *
     * @param Video $video
     *
     * @return Caption
     */
    public function setVideo(Video $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return Video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Caption
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}