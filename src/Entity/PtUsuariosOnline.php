<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtUsuariosOnline
 *
 * @ORM\Table(name="pt_usuarios_online")
 * @ORM\Entity
 */
class PtUsuariosOnline
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="fecha", type="integer", nullable=false)
     */
    private $fecha;


}
