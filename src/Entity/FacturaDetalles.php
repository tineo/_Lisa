<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaDetalles
 *
 * @ORM\Table(name="factura_detalles")
 * @ORM\Entity
 */
class FacturaDetalles
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
     * @var float|null
     *
     * @ORM\Column(name="valor_unitario", type="float", precision=10, scale=2, nullable=true)
     */
    private $valorUnitario;

    /**
     * @var int
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId;


}
