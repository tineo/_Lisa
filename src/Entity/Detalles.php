<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detalles
 *
 * @ORM\Table(name="detalles")
 * @ORM\Entity
 */
class Detalles
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
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=true)
     */
    private $proyectoId;

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
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="servicio_id", type="bigint", nullable=false)
     */
    private $servicioId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aprobado", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $aprobado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var float|null
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=true)
     */
    private $precio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marcados", type="text", length=65535, nullable=true)
     */
    private $marcados;


}
