<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtReqServiciosTmp
 *
 * @ORM\Table(name="pt_req_servicios_tmp", indexes={@ORM\Index(name="time", columns={"time"})})
 * @ORM\Entity
 */
class PtReqServiciosTmp
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_servicio", type="integer", nullable=false)
     */
    private $idServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cuenta", type="integer", nullable=false)
     */
    private $idCuenta;

    /**
     * @var int
     *
     * @ORM\Column(name="id_unidad", type="integer", nullable=false)
     */
    private $idUnidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_entrega", type="date", nullable=false)
     */
    private $fEntrega;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=false)
     */
    private $ordenId;

    /**
     * @var int
     *
     * @ORM\Column(name="area_id", type="integer", nullable=false)
     */
    private $areaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantidad = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $precio = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;


}
