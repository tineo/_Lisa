<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuariosSubareas
 *
 * @ORM\Table(name="usuarios_subareas")
 * @ORM\Entity
 */
class UsuariosSubareas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_subarea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSubarea;

    /**
     * @var int
     *
     * @ORM\Column(name="id_area", type="integer", nullable=false)
     */
    private $idArea;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cuenta", type="integer", nullable=false)
     */
    private $cuenta;


}
