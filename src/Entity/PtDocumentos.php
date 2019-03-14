<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtDocumentos
 *
 * @ORM\Table(name="pt_documentos", indexes={@ORM\Index(name="id_importado", columns={"id_importado"}), @ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="f_documento", columns={"f_documento"}), @ORM\Index(name="id_trabajador", columns={"id_trabajador"}), @ORM\Index(name="origen", columns={"origen"}), @ORM\Index(name="id_proveedor", columns={"id_proveedor"}), @ORM\Index(name="a", columns={"id_caja"}), @ORM\Index(name="id_tipo_doc", columns={"id_tipo_doc"})})
 * @ORM\Entity
 */
class PtDocumentos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_doc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDoc;

    /**
     * @var int
     *
     * @ORM\Column(name="id_importado", type="integer", nullable=false)
     */
    private $idImportado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_proveedor", type="integer", nullable=false)
     */
    private $idProveedor;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_doc", type="integer", nullable=false)
     */
    private $idTipoDoc;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_trabajador", type="integer", nullable=true)
     */
    private $idTrabajador;

    /**
     * @var string
     *
     * @ORM\Column(name="num_doc", type="string", length=20, nullable=false)
     */
    private $numDoc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_ingreso", type="string", length=0, nullable=false, options={"comment"="//COMPRA
//GASTO
//ACTIVO"})
     */
    private $tipoIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=0, nullable=false, options={"comment"="C=>Compras
S=>Servicios
L=>Liquidaciones
D=>Documentos
R=>Rendiciones"})
     */
    private $origen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="glosa", type="text", length=65535, nullable=true)
     */
    private $glosa;

    /**
     * @var float
     *
     * @ORM\Column(name="tipo_cambio", type="float", precision=6, scale=3, nullable=false)
     */
    private $tipoCambio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_pago", type="string", length=100, nullable=true)
     */
    private $formaPago;

    /**
     * @var int
     *
     * @ORM\Column(name="dias_pago", type="integer", nullable=false)
     */
    private $diasPago;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="igv_porcent", type="float", precision=4, scale=2, nullable=false, options={"default"="18.00"})
     */
    private $igvPorcent = '18.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_venta", type="float", precision=11, scale=5, nullable=false, options={"default"="0.00000"})
     */
    private $valorVenta = '0.00000';

    /**
     * @var float
     *
     * @ORM\Column(name="igv", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $igv = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="detraccion", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $detraccion = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="percepcion", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $percepcion = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="monto_adelanto", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $montoAdelanto = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_documento", type="date", nullable=false)
     */
    private $fDocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_ingreso", type="datetime", nullable=false)
     */
    private $fIngreso;

    /**
     * @var int
     *
     * @ORM\Column(name="contado", type="integer", nullable=false, options={"comment"="// DOCUMENTO DE COMPRA AL CONTADO"})
     */
    private $contado = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_pago", type="integer", nullable=true)
     */
    private $idPago;

    /**
     * @var int
     *
     * @ORM\Column(name="pagado", type="integer", nullable=false)
     */
    private $pagado = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_caja", type="integer", nullable=true)
     */
    private $idCaja;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_liquidacion", type="datetime", nullable=true)
     */
    private $fLiquidacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_liquidacion", type="integer", nullable=true)
     */
    private $numLiquidacion;

    /**
     * @var int
     *
     * @ORM\Column(name="liquidado", type="integer", nullable=false, options={"default"="1","comment"="// LIQUIDADO O RENDIDO"})
     */
    private $liquidado = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="gasto", type="integer", nullable=false, options={"comment"="// 0 => NO ES GASTO
// 1 => ES GASTO"})
     */
    private $gasto = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_anulado", type="datetime", nullable=true)
     */
    private $fAnulado;

    /**
     * @var int
     *
     * @ORM\Column(name="anulado", type="integer", nullable=false)
     */
    private $anulado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="anulado_motivo", type="string", length=200, nullable=true)
     */
    private $anuladoMotivo;


}
