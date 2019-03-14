<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtTrabajadoresAreas
 *
 * @ORM\Table(name="mt_trabajadores_areas")
 * @ORM\Entity
 */
class MtTrabajadoresAreas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_trab", type="integer", nullable=false)
     * @ORM\Id
     */
    private $idTrab;

    /**
     * @var int
     *
     * @ORM\Column(name="id_area", type="integer", nullable=false)
     * @ORM\Id
     */
    private $idArea;


}
