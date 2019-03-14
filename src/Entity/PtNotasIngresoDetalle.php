<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtNotasIngresoDetalle
 *
 * @ORM\Table(name="pt_notas_ingreso_detalle", indexes={@ORM\Index(name="id_ingreso", columns={"id_ingreso"}), @ORM\Index(name="id_documento", columns={"id_documento"}), @ORM\Index(name="id_orden_detalle", columns={"id_orden_detalle"}), @ORM\Index(name="id_insumo", columns={"id_insumo"})})
 * @ORM\Entity
 */
class PtNotasIngresoDetalle
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
     * @ORM\Column(name="id_ingreso", type="integer", nullable=false)
     */
    private $idIngreso;

    /**
     * @var int
     *
     * @ORM\Column(name="id_orden_detalle", type="integer", nullable=false)
     */
    private $idOrdenDetalle;

    /**
     * @var int
     *
     * @ORM\Column(name="id_insumo", type="integer", nullable=false)
     */
    private $idInsumo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_documento", type="integer", nullable=false)
     */
    private $idDocumento = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_ingresada", type="float", precision=10, scale=4, nullable=false)
     */
    private $cantIngresada;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=true)
     */
    private $ordenId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="area_id", type="integer", nullable=true)
     */
    private $areaId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="deleted", type="integer", nullable=true)
     */
    private $deleted = '0';


}
