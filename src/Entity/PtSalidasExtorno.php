<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtSalidasExtorno
 *
 * @ORM\Table(name="pt_salidas_extorno")
 * @ORM\Entity
 */
class PtSalidasExtorno
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_extorno", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExtorno;

    /**
     * @var int
     *
     * @ORM\Column(name="id_sal_det", type="integer", nullable=false)
     */
    private $idSalDet;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_extorno", type="float", precision=10, scale=4, nullable=false)
     */
    private $cantExtorno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_extorno", type="datetime", nullable=false)
     */
    private $fExtorno;


}
