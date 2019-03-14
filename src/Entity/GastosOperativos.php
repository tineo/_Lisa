<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GastosOperativos
 *
 * @ORM\Table(name="____gastos_operativos")
 * @ORM\Entity
 */
class GastosOperativos
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
     * @var string
     *
     * @ORM\Column(name="mes", type="string", length=2, nullable=false, options={"fixed"=true})
     */
    private $mes = '';

    /**
     * @var string
     *
     * @ORM\Column(name="anho", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $anho = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="monto", type="float", precision=10, scale=4, nullable=true)
     */
    private $monto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;


}
