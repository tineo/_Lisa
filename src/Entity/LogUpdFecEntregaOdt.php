<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogUpdFecEntregaOdt
 *
 * @ORM\Table(name="log_upd_fec_entrega_odt")
 * @ORM\Entity
 */
class LogUpdFecEntregaOdt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
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
     * @var \DateTime
     *
     * @ORM\Column(name="fec_changed", type="datetime", nullable=false)
     */
    private $fecChanged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_reg", type="datetime", nullable=false)
     */
    private $fecReg;


}
