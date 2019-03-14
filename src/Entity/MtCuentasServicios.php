<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtCuentasServicios
 *
 * @ORM\Table(name="mt_Cuentas_Servicios")
 * @ORM\Entity
 */
class MtCuentasServicios
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_CtaServicio", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codCtaservicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dsc_CtaServicio", type="string", length=60, nullable=true)
     */
    private $dscCtaservicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cuenta_CtaServicio", type="string", length=20, nullable=true)
     */
    private $cuentaCtaservicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUC", type="string", length=22, nullable=true)
     */
    private $ruc;


}
