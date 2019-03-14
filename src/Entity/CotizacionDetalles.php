<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CotizacionDetalles
 *
 * @ORM\Table(name="cotizacion_detalles")
 * @ORM\Entity
 */
class CotizacionDetalles
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
     * @var int|null
     *
     * @ORM\Column(name="cotizacion_id", type="bigint", nullable=true)
     */
    private $cotizacionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=true)
     */
    private $nombre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var int|null
     *
     * @ORM\Column(name="producto_id", type="bigint", nullable=true)
     */
    private $productoId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="servicio_id", type="bigint", nullable=true)
     */
    private $servicioId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $tipo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=true)
     */
    private $precio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;


}
