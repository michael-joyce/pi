<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Nines\UtilBundle\Entity\AbstractTerm;

/**
 * ProfileElement
 *
 * @ORM\Table(name="profile_element")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfileElementRepository")
 */
class ProfileElement extends AbstractTerm {

    /**
     * @ORM\OneToMany(targetEntity="ProfileKeyword", mappedBy="profileElement")
     */
    private $profileKeywords;
    
    public function __construct() {
        parent::__construct();
        $this->profileKeywords = new ArrayCollection();
    }
    
    /**
     * Add profileKeyword
     *
     * @param ProfileKeyword $profileKeyword
     *
     * @return ProfileElement
     */
    public function addProfileKeyword(ProfileKeyword $profileKeyword)
    {
        $this->profileKeywords[] = $profileKeyword;

        return $this;
    }

    /**
     * Remove profileKeyword
     *
     * @param ProfileKeyword $profileKeyword
     */
    public function removeProfileKeyword(ProfileKeyword $profileKeyword)
    {
        $this->profileKeywords->removeElement($profileKeyword);
    }

    /**
     * Get profileKeywords
     *
     * @return Collection
     */
    public function getProfileKeywords()
    {
        return $this->profileKeywords;
    }
}
