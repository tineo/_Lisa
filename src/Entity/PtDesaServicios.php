<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtDesaServicios
 *
 * @ORM\Table(name="pt_desa_servicios")
 * @ORM\Entity
 */
class PtDesaServicios
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
     * @ORM\Column(name="id_desa", type="integer", nullable=false)
     */
    private $idDesa;

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
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_unidad", type="integer", nullable=true)
     */
    private $idUnidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=2, nullable=false)
     */
    private $cantidad;


}
