<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtServiciosItems
 *
 * @ORM\Table(name="pt_Servicios_Items")
 * @ORM\Entity
 */
class PtServiciosItems
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Servicio", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Item", type="string", length=10, nullable=true)
     */
    private $item;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_OT", type="string", length=10, nullable=true)
     */
    private $codOt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $cantidad;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio", type="float", precision=10, scale=0, nullable=true)
     */
    private $precio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Moneda", type="string", length=2, nullable=true)
     */
    private $moneda;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_CtaServicio", type="string", length=10, nullable=true)
     */
    private $codCtaservicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Origen", type="string", length=2, nullable=true)
     */
    private $origen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_OT_Servicio", type="string", length=10, nullable=true)
     */
    private $codOtServicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Almacen", type="datetime", nullable=true)
     */
    private $fechaAlmacen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Unid", type="string", length=10, nullable=true)
     */
    private $codUnid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Planta", type="datetime", nullable=true)
     */
    private $fechaPlanta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Area", type="string", length=255, nullable=true)
     */
    private $codArea;


}
