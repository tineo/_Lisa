<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComisionesDetalles
 *
 * @ORM\Table(name="comisiones_detalles")
 * @ORM\Entity
 */
class ComisionesDetalles
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
     * @var int
     *
     * @ORM\Column(name="comisiones_cabecera_id", type="bigint", nullable=false)
     */
    private $comisionesCabeceraId;

    /**
     * @var int
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId;

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
