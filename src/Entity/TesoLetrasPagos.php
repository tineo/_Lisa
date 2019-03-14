<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoLetrasPagos
 *
 * @ORM\Table(name="teso_letras_pagos")
 * @ORM\Entity
 */
class TesoLetrasPagos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pago_letra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPagoLetra;

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
     * @var string
     *
     * @ORM\Column(name="forma_pago", type="string", length=0, nullable=false)
     */
    private $formaPago;

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
     * @var float
     *
     * @ORM\Column(name="importe", type="float", precision=10, scale=4, nullable=false)
     */
    private $importe;

    /**
     * @var float
     *
     * @ORM\Column(name="importe_adelanto", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importeAdelanto = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var int
     *
     * @ORM\Column(name="renovada", type="integer", nullable=false)
     */
    private $renovada = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_pago", type="datetime", nullable=true)
     */
    private $fPago;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=true)
     */
    private $fSistema;


}
