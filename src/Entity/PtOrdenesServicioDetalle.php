<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtOrdenesServicioDetalle
 *
 * @ORM\Table(name="pt_ordenes_servicio_detalle", indexes={@ORM\Index(name="id_req", columns={"id_req"}), @ORM\Index(name="id_orden_servicio", columns={"id_orden_servicio"})})
 * @ORM\Entity
 */
class PtOrdenesServicioDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetalle;

    /**
     * @var int
     *
     * @ORM\Column(name="id_orden_servicio", type="integer", nullable=false)
     */
    private $idOrdenServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="id_req", type="integer", nullable=false)
     */
    private $idReq;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_solicitada", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantSolicitada = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $precio = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_entrega", type="date", nullable=true)
     */
    private $fEntrega;

    /**
     * @var int|null
     *
     * @ORM\Column(name="anulado", type="integer", nullable=true)
     */
    private $anulado = '0';


}
