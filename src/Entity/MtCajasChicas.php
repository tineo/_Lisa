<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtCajasChicas
 *
 * @ORM\Table(name="mt_cajas_chicas", indexes={@ORM\Index(name="a", columns={"id_caja"})})
 * @ORM\Entity
 */
class MtCajasChicas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_caja", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCaja;

    /**
     * @var int
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_asignado", type="float", precision=8, scale=4, nullable=false)
     */
    private $montoAsignado;

    /**
     * @var string
     *
     * @ORM\Column(name="cuenta", type="string", length=50, nullable=false)
     */
    private $cuenta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false)
     */
    private $fRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="tesoreria", type="integer", nullable=false, options={"comment"="// PAGAR TESORERIA"})
     */
    private $tesoreria = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
