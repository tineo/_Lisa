<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotaDetalles
 *
 * @ORM\Table(name="nota_detalles")
 * @ORM\Entity
 */
class NotaDetalles
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
     * @ORM\Column(name="nota_de_credito_id", type="bigint", nullable=false)
     */
    private $notaDeCreditoId;

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


}
