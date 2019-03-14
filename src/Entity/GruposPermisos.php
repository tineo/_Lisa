<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GruposPermisos
 *
 * @ORM\Table(name="grupos_permisos", indexes={@ORM\Index(name="sistema_areas_grupos_permisos", columns={"id_modulo"}), @ORM\Index(name="usuarios_grupos_grupos_permisos", columns={"id_grupo"})})
 * @ORM\Entity
 */
class GruposPermisos
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     */
    private $idGrupo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_modulo", type="integer", nullable=true)
     */
    private $idModulo;

    /**
     * @var int
     *
     * @ORM\Column(name="op_access", type="integer", nullable=false)
     */
    private $opAccess;

    /**
     * @var int
     *
     * @ORM\Column(name="op_add", type="integer", nullable=false)
     */
    private $opAdd;

    /**
     * @var int
     *
     * @ORM\Column(name="op_deleted", type="integer", nullable=false)
     */
    private $opDeleted;

    /**
     * @var int
     *
     * @ORM\Column(name="op_edit", type="integer", nullable=false)
     */
    private $opEdit;

    /**
     * @var int
     *
     * @ORM\Column(name="op_list", type="integer", nullable=false)
     */
    private $opList;


}
