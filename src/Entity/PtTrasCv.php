<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtTrasCv
 *
 * @ORM\Table(name="pt_tras_cv")
 * @ORM\Entity
 */
class PtTrasCv
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tras", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTras;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=false)
     */
    private $ordenId;

    /**
     * @var string
     *
     * @ORM\Column(name="costo_variable", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $costoVariable = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_traslado", type="datetime", nullable=false)
     */
    private $fecTraslado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_sistema", type="datetime", nullable=false)
     */
    private $fecSistema;

    /**
     * @var bool
     *
     * @ORM\Column(name="anulado", type="boolean", nullable=false)
     */
    private $anulado = '0';


}
