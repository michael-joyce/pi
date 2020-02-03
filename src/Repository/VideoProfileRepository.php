<?php

declare(strict_types=1);

/*
 * (c) 2020 Michael Joyce <mjoyce@sfu.ca>
 * This source file is subject to the GPL v2, bundled
 * with this source code in the file LICENSE.
 */

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * VideoProfileRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VideoProfileRepository extends ServiceEntityRepository {
    public function userSummary() {
        $dql = 'SELECT u, count(vp) as ct FROM App:VideoProfile vp JOIN NinesUserBundle:User u WITH vp.user = u GROUP BY vp.user';
        $query = $this->_em->createQuery($dql);

        return $query->execute();
    }

    public function videoSummary() {
        $dql = 'SELECT v, count(vp) as ct FROM App:VideoProfile vp JOIN App:Video v WITH vp.video = v GROUP BY vp.video';
        $query = $this->_em->createQuery($dql);

        return $query->execute();
    }
}
