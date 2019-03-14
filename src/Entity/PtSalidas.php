<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtSalidas
 *
 * @ORM\Table(name="pt_salidas")
 * @ORM\Entity
 */
class PtSalidas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_salida", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalida;

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
     * @ORM\Column(name="num_req_pedido", type="string", length=100, nullable=false)
     */
    private $numReqPedido = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_salida", type="datetime", nullable=false)
     */
    private $fSalida;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
