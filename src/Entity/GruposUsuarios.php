<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GruposUsuarios
 *
 * @ORM\Table(name="grupos_usuarios")
 * @ORM\Entity
 */
class GruposUsuarios
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
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     */
    private $idGrupo;

    /**
     * @var int
     *
     * @ORM\Column(name="principal", type="integer", nullable=false)
     */
    private $principal = '0';


}
