<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDeCambio
 *
 * @ORM\Table(name="tipo_de_cambio")
 * @ORM\Entity
 */
class TipoDeCambio
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cambio", type="float", precision=10, scale=4, nullable=true)
     */
    private $cambio;

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
