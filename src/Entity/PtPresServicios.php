<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresServicios
 *
 * @ORM\Table(name="pt_pres_servicios")
 * @ORM\Entity
 */
class PtPresServicios
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
     * @ORM\Column(name="id_pres", type="integer", nullable=false)
     */
    private $idPres;

    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer", nullable=false)
     */
    private $idProducto = '0';

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
    private $idCuenta = '0';

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
    private $descripcion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=2, nullable=false)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=8, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $precio = '0.0000';


}
