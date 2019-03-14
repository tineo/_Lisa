<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoGirados
 *
 * @ORM\Table(name="teso_girados")
 * @ORM\Entity
 */
class TesoGirados
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_girado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGirado;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre = '';


}
