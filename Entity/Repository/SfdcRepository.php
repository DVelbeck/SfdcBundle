<?php

namespace SfdcBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Custom query repository for SFDC cases
 */
class SfdcRepository extends EntityRepository {

    public function getAllOrigins() {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('c.origin')
                ->from('CiscoSystemsSalesforceBundle:SfdcCase', 'c')
                ->where($qb->expr()->isNotNull('c.origin'))
                ->distinct()
                ->orderBy('c.origin');
        $array = $qb->getQuery()->getResult();

        foreach ($array as $values) {
            foreach ($values as $value) {
                $result[$value] = $value;
            }
        }
        return $result;
    }

}
