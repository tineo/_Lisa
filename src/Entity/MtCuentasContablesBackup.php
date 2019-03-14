<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtCuentasContablesBackup
 *
 * @ORM\Table(name="mt_cuentas_contables_backup")
 * @ORM\Entity
 */
class MtCuentasContablesBackup
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
     * @var int|null
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=true)
     */
    private $idGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=0, nullable=false)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_cuenta", type="string", length=15, nullable=false)
     */
    private $numeroCuenta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=11, nullable=false)
     */
    private $empresa = '';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
