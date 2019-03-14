<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtReingresosDetalle
 *
 * @ORM\Table(name="pt_reingresos_detalle")
 * @ORM\Entity
 */
class PtReingresosDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reing_det", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReingDet;

    /**
     * @var int
     *
     * @ORM\Column(name="id_reing", type="integer", nullable=false)
     */
    private $idReing;

    /**
     * @var int
     *
     * @ORM\Column(name="id_sal_det", type="integer", nullable=false)
     */
    private $idSalDet;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_reing", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $cantReing = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=8, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $precio = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=true)
     */
    private $moneda;


}
