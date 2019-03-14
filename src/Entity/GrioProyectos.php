<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrioProyectos
 *
 * @ORM\Table(name="grio_proyectos")
 * @ORM\Entity
 */
class GrioProyectos
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
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId;

    /**
     * @var int
     *
     * @ORM\Column(name="grio_id", type="bigint", nullable=false)
     */
    private $grioId;


}
