<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoPagaresPagosCuenta
 *
 * @ORM\Table(name="teso_pagares_pagos_cuenta")
 * @ORM\Entity
 */
class TesoPagaresPagosCuenta
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
     * @ORM\Column(name="id_pagare", type="integer", nullable=false)
     */
    private $idPagare = '0';

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
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

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
