<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areas
 *
 * @ORM\Table(name="areas")
 * @ORM\Entity
 */
class Areas
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cuenta", type="integer", nullable=false)
     */
    private $cuenta;

    /**
     * @var int
     *
     * @ORM\Column(name="parentid", type="integer", nullable=false)
     */
    private $parentid;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
