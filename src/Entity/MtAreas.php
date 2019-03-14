<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtAreas
 *
 * @ORM\Table(name="mt_areas")
 * @ORM\Entity
 */
class MtAreas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_area", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_area", type="string", length=30, nullable=true)
     */
    private $nombreArea;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=0, nullable=false, options={"default"="ADM"})
     */
    private $area = 'ADM';


}
