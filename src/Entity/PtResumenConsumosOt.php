<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtResumenConsumosOt
 *
 * @ORM\Table(name="pt_Resumen_Consumos_OT")
 * @ORM\Entity
 */
class PtResumenConsumosOt
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="Cod_OT", type="bigint", nullable=true)
     * @ORM\Id
     */
    private $codOt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Ins", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codIns;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Requerido_OT", type="float", precision=10, scale=0, nullable=true)
     */
    private $requeridoOt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Requerido_Posterior", type="float", precision=10, scale=0, nullable=true)
     */
    private $requeridoPosterior;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Compras", type="float", precision=10, scale=0, nullable=true)
     */
    private $compras;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Vinculados", type="float", precision=10, scale=0, nullable=true)
     */
    private $vinculados;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Salidas", type="float", precision=10, scale=0, nullable=true)
     */
    private $salidas;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Reingresos", type="float", precision=10, scale=0, nullable=true)
     */
    private $reingresos;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desvinculados", type="float", precision=10, scale=0, nullable=true)
     */
    private $desvinculados;


}
