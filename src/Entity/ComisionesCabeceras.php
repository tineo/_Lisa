<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComisionesCabeceras
 *
 * @ORM\Table(name="comisiones_cabeceras")
 * @ORM\Entity
 */
class ComisionesCabeceras
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
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_origen", type="datetime", nullable=true)
     */
    private $fechaOrigen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_cobrada", type="datetime", nullable=true)
     */
    private $fechaCobrada;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pre_monto", type="float", precision=10, scale=2, nullable=true)
     */
    private $preMonto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="monto", type="float", precision=10, scale=2, nullable=true)
     */
    private $monto;

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


}
