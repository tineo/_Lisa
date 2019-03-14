<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoPagaresPagos
 *
 * @ORM\Table(name="teso_pagares_pagos")
 * @ORM\Entity
 */
class TesoPagaresPagos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pago_pagare", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPagoPagare;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pagare", type="integer", nullable=false)
     */
    private $idPagare;

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
    private $numCheque = '';

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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=false)
     */
    private $descripcion = '';

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
