<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtRequerimientos
 *
 * @ORM\Table(name="pt_Requerimientos")
 * @ORM\Entity
 */
class PtRequerimientos
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_requerida", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codRequerida;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cod_ot", type="bigint", nullable=true)
     */
    private $codOt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_ins", type="string", length=10, nullable=true)
     */
    private $codIns;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_requerida", type="datetime", nullable=true)
     */
    private $fechaRequerida;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cant_requerida", type="float", precision=10, scale=0, nullable=true)
     */
    private $cantRequerida;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cant_disponible", type="float", precision=10, scale=0, nullable=true)
     */
    private $cantDisponible;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cant_compra", type="float", precision=10, scale=0, nullable=true)
     */
    private $cantCompra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asegura_requerida", type="string", length=2, nullable=true)
     */
    private $aseguraRequerida;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_lote", type="string", length=10, nullable=true)
     */
    private $codLote;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_prov", type="string", length=10, nullable=true)
     */
    private $codProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda_prov", type="string", length=2, nullable=true)
     */
    private $monedaProv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="precio_prov", type="float", precision=10, scale=0, nullable=true)
     */
    private $precioProv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_lote", type="datetime", nullable=true)
     */
    private $fechaLote;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vinculado_compra", type="string", length=2, nullable=true)
     */
    private $vinculadoCompra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_compra", type="string", length=10, nullable=true)
     */
    private $codCompra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_pago", type="string", length=400, nullable=true)
     */
    private $formaPago;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tipo_cambio", type="float", precision=10, scale=0, nullable=true)
     */
    private $tipoCambio;

    /**
     * @var float|null
     *
     * @ORM\Column(name="percepcion", type="float", precision=10, scale=0, nullable=true)
     */
    private $percepcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_cheque", type="string", length=10, nullable=true)
     */
    private $codCheque;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cant_ingresada_NI", type="float", precision=10, scale=0, nullable=true)
     */
    private $cantIngresadaNi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Anula_Requerida", type="string", length=100, nullable=true)
     */
    private $anulaRequerida;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Origen_Requerida", type="string", length=2, nullable=true)
     */
    private $origenRequerida;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Lim_Almacen", type="datetime", nullable=true)
     */
    private $fechaLimAlmacen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Envio_OC", type="datetime", nullable=true)
     */
    private $fechaEnvioOc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entrega", type="datetime", nullable=true)
     */
    private $fechaEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lugar_entrega", type="string", length=100, nullable=true)
     */
    private $lugarEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="atencion_entrega", type="string", length=100, nullable=true)
     */
    private $atencionEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alerta_a_OC", type="string", length=2, nullable=true)
     */
    private $alertaAOc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alerta_a_req", type="string", length=2, nullable=true)
     */
    private $alertaAReq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Motivo", type="string", length=10, nullable=true)
     */
    private $codMotivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Usu", type="string", length=10, nullable=true)
     */
    private $codUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comentario", type="string", length=510, nullable=true)
     */
    private $comentario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Destino", type="string", length=2, nullable=true)
     */
    private $destino;


}
