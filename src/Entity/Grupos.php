<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupos
 *
 * @ORM\Table(name="grupos")
 * @ORM\Entity
 */
class Grupos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;


}
