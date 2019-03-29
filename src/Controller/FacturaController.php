<?php

namespace App\Controller;

use App\Entity\Accounts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Facturas;

class FacturaController extends AbstractController
{
    /**
     * @Route("/factura", name="factura")
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(EntityManagerInterface $entityManager)
    {

        $entityManager = $this->getDoctrine()->getManager('crm');

        /*$query = $entityManager
            ->createQuery('SELECT f FROM App\Entity\Facturas f WHERE f.nEmpresa = 5 ORDER BY f.nNumero DESC');
        $facturas = $query->getResult();
        ;*/

        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->select('f.numero, f.status, f.anulada, f.fechaEmision, f.fechaRecepcion, f.fechaCobranza, f.monto, f.tipoDeCambio,  f.moneda, a.name')
            ->from(Facturas::class, 'f');
        $queryBuilder->leftJoin(
            Accounts::class,
            'a',
            \Doctrine\ORM\Query\Expr\Join::WITH,
            'a.id = f.accountId'
        );
        $queryBuilder->orderBy('f.numero', 'DESC');


        $queryBuilder
            ->where('f.empresa = :empresa')
            ->setParameter('empresa', 5);
        $query = $queryBuilder->getQuery();

        $facturas = $query->getResult();

        return $this->render('factura/index.html.twig', [
            'controller_name' => 'FacturaController',
            'facturas' => $facturas
        ]);
    }
}
