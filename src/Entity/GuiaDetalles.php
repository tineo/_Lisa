<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuiaDetalles
 *
 * @ORM\Table(name="guia_detalles")
 * @ORM\Entity
 */
class GuiaDetalles
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
     * @ORM\Column(name="guia_de_remision_id", type="bigint", nullable=false)
     */
    private $guiaDeRemisionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medida", type="string", length=16, nullable=true)
     */
    private $medida;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fechas_de_entrega_id", type="bigint", nullable=true)
     */
    private $fechasDeEntregaId;


}
