<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtComprasLibresCabecera
 *
 * @ORM\Table(name="pt_Compras_Libres_Cabecera")
 * @ORM\Entity
 */
class PtComprasLibresCabecera
{
    /**
     * @var string|null
     * @ORM\Id
     * @ORM\Column(name="Cod_Compra", type="string", length=10, nullable=true)
     */
    private $codCompra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cli", type="string", length=10, nullable=true)
     */
    private $codCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_TipoDoc", type="string", length=6, nullable=true)
     */
    private $codTipodoc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Ingreso", type="datetime", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Doc", type="datetime", nullable=true)
     */
    private $fechaDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Doc", type="string", length=40, nullable=true)
     */
    private $numDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Moneda", type="string", length=2, nullable=true)
     */
    private $moneda;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Tipo_Cambio", type="float", precision=10, scale=0, nullable=true)
     */
    private $tipoCambio;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Valor_Venta", type="float", precision=10, scale=0, nullable=true)
     */
    private $valorVenta;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IGV", type="float", precision=10, scale=0, nullable=true)
     */
    private $igv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Glosa", type="string", length=500, nullable=true)
     */
    private $glosa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Area", type="string", length=10, nullable=true)
     */
    private $codArea;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Liquida", type="datetime", nullable=true)
     */
    private $fechaLiquida;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Liquida", type="string", length=20, nullable=true)
     */
    private $numLiquida;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUC", type="string", length=22, nullable=true)
     */
    private $ruc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Caja", type="string", length=10, nullable=true)
     */
    private $codCaja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Trab", type="string", length=10, nullable=true)
     */
    private $codTrab;


}
