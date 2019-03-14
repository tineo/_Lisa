<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RptGastosCuentas
 *
 * @ORM\Table(name="rpt_gastos_cuentas")
 * @ORM\Entity
 */
class RptGastosCuentas
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
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre = '';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=false)
     */
    private $fSistema;


}
