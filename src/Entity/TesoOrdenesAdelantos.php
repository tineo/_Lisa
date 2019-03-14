<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoOrdenesAdelantos
 *
 * @ORM\Table(name="teso_ordenes_adelantos")
 * @ORM\Entity
 */
class TesoOrdenesAdelantos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_adelanto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdelanto;

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
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_pago", type="string", length=0, nullable=true)
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
     * @ORM\Column(name="importe_saldado", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importeSaldado = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=true)
     */
    private $descripcion;

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
