<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReporteCacheW
 *
 * @ORM\Table(name="reporte_cache_w")
 * @ORM\Entity
 */
class ReporteCacheW
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
     * @var string
     *
     * @ORM\Column(name="tiempo", type="string", length=15, nullable=false)
     */
    private $tiempo;


}
