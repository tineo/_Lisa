<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GruposCuentas
 *
 * @ORM\Table(name="grupos_cuentas")
 * @ORM\Entity
 */
class GruposCuentas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cuenta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCuenta;

    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     */
    private $idGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cuenta", type="string", length=100, nullable=false)
     */
    private $nombreCuenta;

    /**
     * @var int
     *
     * @ORM\Column(name="grupo", type="integer", nullable=false)
     */
    private $grupo = '0';


}
