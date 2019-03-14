<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoPagosCuenta
 *
 * @ORM\Table(name="teso_pagos_cuenta")
 * @ORM\Entity
 */
class TesoPagosCuenta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pago_cuenta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPagoCuenta;

    /**
     * @var int
     *
     * @ORM\Column(name="id_doc", type="integer", nullable=false)
     */
    private $idDoc;

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
     * @var int
     *
     * @ORM\Column(name="id_usuario_rendicion", type="integer", nullable=false)
     */
    private $idUsuarioRendicion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_banco", type="integer", nullable=false)
     */
    private $idBanco;

    /**
     * @var int
     *
     * @ORM\Column(name="id_girado", type="integer", nullable=false)
     */
    private $idGirado;

    /**
     * @var int
     *
     * @ORM\Column(name="id_caja", type="integer", nullable=false)
     */
    private $idCaja = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_liquidacion", type="integer", nullable=false)
     */
    private $idLiquidacion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_cheque", type="string", length=100, nullable=true)
     */
    private $numCheque;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var float
     *
     * @ORM\Column(name="importe", type="float", precision=10, scale=4, nullable=false)
     */
    private $importe;

    /**
     * @var int
     *
     * @ORM\Column(name="adelanto", type="integer", nullable=false, options={"comment"="SI VIENE MIGRADO DE UN ADELANTO"})
     */
    private $adelanto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="liquidacion", type="integer", nullable=false)
     */
    private $liquidacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rendicion", type="integer", nullable=false)
     */
    private $rendicion = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_pago", type="datetime", nullable=false)
     */
    private $fPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=false)
     */
    private $fSistema;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
