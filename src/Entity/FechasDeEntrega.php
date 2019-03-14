<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FechasDeEntrega
 *
 * @ORM\Table(name="fechas_de_entrega")
 * @ORM\Entity
 */
class FechasDeEntrega
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
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_original", type="datetime", nullable=true)
     */
    private $fechaOriginal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalle", type="text", length=65535, nullable=true)
     */
    private $detalle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mod_fecha", type="datetime", nullable=true)
     */
    private $modFecha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mod_motivo", type="text", length=65535, nullable=true)
     */
    private $modMotivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mod_propuesto_por_user", type="string", length=36, nullable=true)
     */
    private $modPropuestoPorUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mod_propuesto_por_area", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $modPropuestoPorArea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mod_solicitado_por", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $modSolicitadoPor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    private $updatedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;


}
