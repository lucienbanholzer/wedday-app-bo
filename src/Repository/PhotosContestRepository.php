<?php

namespace App\Repository;

use App\Entity\PhotosContest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PhotosContest|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotosContest|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotosContest[]    findAll()
 * @method PhotosContest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotosContestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PhotosContest::class);
    }

//    /**
//     * @return PhotosContest[] Returns an array of PhotosContest objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PhotosContest
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
