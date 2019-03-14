<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtComprasCabecera
 *
 * @ORM\Table(name="pt_Compras_Cabecera")
 * @ORM\Entity
 */
class PtComprasCabecera
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Compra", type="string", length=10, nullable=true)
     * @ORM\Id
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
     * @ORM\Column(name="Exoneracion", type="float", precision=10, scale=0, nullable=true)
     */
    private $exoneracion;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IGV", type="float", precision=10, scale=0, nullable=true)
     */
    private $igv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Monto", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalMonto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Asegura_Compra", type="string", length=2, nullable=true)
     */
    private $aseguraCompra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Compra", type="string", length=20, nullable=true)
     */
    private $tipoCompra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Doc_Origen", type="string", length=40, nullable=true)
     */
    private $numDocOrigen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Devolucion_NC", type="string", length=2, nullable=true)
     */
    private $devolucionNc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cheque", type="string", length=10, nullable=true)
     */
    private $codCheque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cheque2", type="string", length=10, nullable=true)
     */
    private $codCheque2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cheque3", type="string", length=10, nullable=true)
     */
    private $codCheque3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cheque4", type="string", length=10, nullable=true)
     */
    private $codCheque4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SPOT", type="string", length=30, nullable=true)
     */
    private $spot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dias_Pago", type="string", length=6, nullable=true)
     */
    private $diasPago;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Origen", type="string", length=2, nullable=true)
     */
    private $origen;

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


}
