<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoPagos
 *
 * @ORM\Table(name="teso_pagos")
 * @ORM\Entity
 */
class TesoPagos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pago", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPago;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

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
     * @ORM\Column(name="id_proveedor", type="integer", nullable=false)
     */
    private $idProveedor;

    /**
     * @var int
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="forma_pago", type="string", length=0, nullable=false)
     */
    private $formaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="num_cheque", type="string", length=100, nullable=false)
     */
    private $numCheque = '';

    /**
     * @var int
     *
     * @ORM\Column(name="letras", type="integer", nullable=false)
     */
    private $letras;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="importe_debito", type="float", precision=10, scale=4, nullable=false)
     */
    private $importeDebito;

    /**
     * @var float
     *
     * @ORM\Column(name="importe_credito", type="float", precision=10, scale=4, nullable=false)
     */
    private $importeCredito;

    /**
     * @var float
     *
     * @ORM\Column(name="importe", type="float", precision=10, scale=4, nullable=false)
     */
    private $importe;

    /**
     * @var float
     *
     * @ORM\Column(name="detraccion", type="float", precision=10, scale=4, nullable=false)
     */
    private $detraccion;

    /**
     * @var float
     *
     * @ORM\Column(name="percepcion", type="float", precision=10, scale=4, nullable=false)
     */
    private $percepcion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=false)
     */
    private $descripcion = '';

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
     * @var string|null
     *
     * @ORM\Column(name="num_liquida", type="string", length=25, nullable=true)
     */
    private $numLiquida;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_rendicion", type="integer", nullable=false)
     */
    private $idUsuarioRendicion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_caja", type="integer", nullable=false)
     */
    private $idCaja = '0';

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


}
