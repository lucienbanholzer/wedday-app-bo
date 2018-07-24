<?php

namespace App\Repository;

use App\Entity\Wedday;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Wedday|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wedday|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wedday[]    findAll()
 * @method Wedday[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeddayRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Wedday::class);
    }

//    /**
//     * @return Wedday[] Returns an array of Wedday objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Wedday
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
