<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 *
 * @ORM\Table(name="facturas")
 * @ORM\Entity
 */
class Facturas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="bigint", nullable=false)
     */
    private $numero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $status = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="empresa", type="integer", nullable=true)
     */
    private $empresa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_emision", type="datetime", nullable=true)
     */
    private $fechaEmision;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_recepcion", type="datetime", nullable=true)
     */
    private $fechaRecepcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quien_lo_dejo", type="string", length=255, nullable=true)
     */
    private $quienLoDejo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="monto", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $moneda;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tipo_de_cambio", type="float", precision=10, scale=2, nullable=true)
     */
    private $tipoDeCambio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentarios", type="text", length=65535, nullable=true)
     */
    private $comentarios;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anulada", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $anulada = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="completa", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $completa = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true, options={"default"="F","fixed"=true})
     */
    private $tipo = 'F';

    /**
     * @var string|null
     *
     * @ORM\Column(name="canje", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $canje = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_blanco", type="string", length=1, nullable=true, options={"default"="1","fixed"=true})
     */
    private $enBlanco = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="razon_social", type="string", length=255, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=true)
     */
    private $ruc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_orden_de_compra", type="string", length=128, nullable=true)
     */
    private $numeroOrdenDeCompra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cobrada", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $cobrada;

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmada", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $confirmada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="confirmed_on", type="datetime", nullable=true)
     */
    private $confirmedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modalidad_pago", type="text", length=65535, nullable=true)
     */
    private $modalidadPago;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_probable", type="datetime", nullable=true)
     */
    private $fechaProbable;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    private $updatedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cargo_cobranza", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $cargoCobranza;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_cargo_cobranza", type="datetime", nullable=true)
     */
    private $fechaCargoCobranza;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_cobranza", type="datetime", nullable=true)
     */
    private $fechaCobranza;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imprimida", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $imprimida = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="inmutable", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $inmutable = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="con_una_sola_descripcion", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $conUnaSolaDescripcion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_direccion_fiscal", type="text", length=65535, nullable=true)
     */
    private $facturaDireccionFiscal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="con_nota_de_credito", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $conNotaDeCredito = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="monto_credito", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $montoCredito = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="monto_activo", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $montoActivo = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ultima_factura", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $ultimaFactura = '0';


}
