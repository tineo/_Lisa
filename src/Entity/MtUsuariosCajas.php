<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtUsuariosCajas
 *
 * @ORM\Table(name="mt_Usuarios_Cajas")
 * @ORM\Entity
 */
class MtUsuariosCajas
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Caja", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codCaja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Usu", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dsc_Caja", type="string", length=60, nullable=true)
     */
    private $dscCaja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cuenta", type="string", length=18, nullable=true)
     */
    private $cuenta;


}
