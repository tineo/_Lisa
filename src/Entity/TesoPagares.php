<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoPagares
 *
 * @ORM\Table(name="teso_pagares")
 * @ORM\Entity
 */
class TesoPagares
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pagare", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="num_pagare", type="string", length=100, nullable=false)
     */
    private $numPagare = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=true)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="tea", type="string", length=100, nullable=false)
     */
    private $tea = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="capital", type="float", precision=10, scale=4, nullable=true)
     */
    private $capital;

    /**
     * @var float|null
     *
     * @ORM\Column(name="interes_gasto", type="float", precision=10, scale=4, nullable=true)
     */
    private $interesGasto;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_adelanto", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $montoAdelanto = '0.0000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_emision", type="date", nullable=true)
     */
    private $fEmision;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_vencimiento", type="date", nullable=true)
     */
    private $fVencimiento;

    /**
     * @var int
     *
     * @ORM\Column(name="pagado", type="integer", nullable=false)
     */
    private $pagado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=true)
     */
    private $fSistema;


}
