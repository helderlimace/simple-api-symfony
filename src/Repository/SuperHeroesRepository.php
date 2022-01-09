<?php

namespace App\Repository;

use App\Entity\SuperHeroes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SuperHeroes|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuperHeroes|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuperHeroes[]    findAll()
 * @method SuperHeroes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuperHeroesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuperHeroes::class);
    }

    // /**
    //  * @return SuperHeroes[] Returns an array of SuperHeroes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SuperHeroes
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
