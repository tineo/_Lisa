<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtReingresos
 *
 * @ORM\Table(name="pt_reingresos")
 * @ORM\Entity
 */
class PtReingresos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reing", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReing;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_trab", type="integer", nullable=false)
     */
    private $idTrab;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=false)
     */
    private $ordenId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="area_id", type="integer", nullable=false)
     */
    private $areaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="num_reing", type="string", length=100, nullable=false)
     */
    private $numReing = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_reing", type="datetime", nullable=true)
     */
    private $fReing;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
