<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuotas
 *
 * @ORM\Table(name="cuotas")
 * @ORM\Entity
 */
class Cuotas
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
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $userId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cuota", type="float", precision=10, scale=2, nullable=true)
     */
    private $cuota;

    /**
     * @var float|null
     *
     * @ORM\Column(name="comision", type="float", precision=10, scale=2, nullable=true)
     */
    private $comision;

    /**
     * @var float|null
     *
     * @ORM\Column(name="bonificacion", type="float", precision=10, scale=2, nullable=true)
     */
    private $bonificacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="periodo", type="datetime", nullable=true)
     */
    private $periodo;

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
