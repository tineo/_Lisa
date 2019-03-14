<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturasGuias
 *
 * @ORM\Table(name="facturas_guias")
 * @ORM\Entity
 */
class FacturasGuias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="factura_id", type="bigint", nullable=false)
     */
    private $facturaId;

    /**
     * @var int
     *
     * @ORM\Column(name="guia_de_remision_id", type="bigint", nullable=false)
     */
    private $guiaDeRemisionId;


}
