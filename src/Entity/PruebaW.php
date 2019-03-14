<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PruebaW
 *
 * @ORM\Table(name="prueba_w")
 * @ORM\Entity
 */
class PruebaW
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
     * @ORM\Column(name="nombre", type="string", length=15, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="rango_odt", type="string", length=25, nullable=false)
     */
    private $rangoOdt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tiempo", type="time", nullable=false)
     */
    private $tiempo;


}
