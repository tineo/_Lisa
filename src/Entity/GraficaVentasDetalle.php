<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GraficaVentasDetalle
 *
 * @ORM\Table(name="grafica_ventas_detalle")
 * @ORM\Entity
 */
class GraficaVentasDetalle
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
     * @ORM\Column(name="id_venta", type="integer", nullable=false)
     */
    private $idVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=false)
     */
    private $codigo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="largo", type="string", length=30, nullable=false)
     */
    private $largo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alto", type="string", length=30, nullable=false)
     */
    private $alto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="espesor", type="string", length=30, nullable=false)
     */
    private $espesor = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruta", type="string", length=100, nullable=true)
     */
    private $ruta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entrega", type="date", nullable=true)
     */
    private $fechaEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vinil_color", type="string", length=80, nullable=true)
     */
    private $vinilColor;

    /**
     * @var int
     *
     * @ORM\Column(name="muestra", type="integer", nullable=false)
     */
    private $muestra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="material", type="string", length=20, nullable=false)
     */
    private $material = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=true)
     */
    private $tipo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resolucion", type="integer", nullable=true)
     */
    private $resolucion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acabado", type="string", length=20, nullable=true)
     */
    private $acabado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="otro", type="string", length=50, nullable=true)
     */
    private $otro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nota", type="text", length=65535, nullable=true)
     */
    private $nota;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
