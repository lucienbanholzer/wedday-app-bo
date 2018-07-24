<?php

namespace App\Repository;

use App\Entity\GoldenBookMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GoldenBookMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method GoldenBookMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method GoldenBookMessage[]    findAll()
 * @method GoldenBookMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoldenBookMessageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GoldenBookMessage::class);
    }

//    /**
//     * @return GoldenBookMessage[] Returns an array of GoldenBookMessage objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GoldenBookMessage
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
