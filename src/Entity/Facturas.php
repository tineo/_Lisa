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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Facturas
     */
    public function setId(int $id): Facturas
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     * @return Facturas
     */
    public function setNumero(int $numero): Facturas
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return Facturas
     */
    public function setStatus(?string $status): Facturas
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEmpresa(): ?int
    {
        return $this->empresa;
    }

    /**
     * @param int|null $empresa
     * @return Facturas
     */
    public function setEmpresa(?int $empresa): Facturas
    {
        $this->empresa = $empresa;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFechaEmision(): ?\DateTime
    {
        return $this->fechaEmision;
    }

    /**
     * @param \DateTime|null $fechaEmision
     * @return Facturas
     */
    public function setFechaEmision(?\DateTime $fechaEmision): Facturas
    {
        $this->fechaEmision = $fechaEmision;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFechaRecepcion(): ?\DateTime
    {
        return $this->fechaRecepcion;
    }

    /**
     * @param \DateTime|null $fechaRecepcion
     * @return Facturas
     */
    public function setFechaRecepcion(?\DateTime $fechaRecepcion): Facturas
    {
        $this->fechaRecepcion = $fechaRecepcion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuienLoDejo(): ?string
    {
        return $this->quienLoDejo;
    }

    /**
     * @param string|null $quienLoDejo
     * @return Facturas
     */
    public function setQuienLoDejo(?string $quienLoDejo): Facturas
    {
        $this->quienLoDejo = $quienLoDejo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMonto(): ?string
    {
        return $this->monto;
    }

    /**
     * @param string|null $monto
     * @return Facturas
     */
    public function setMonto(?string $monto): Facturas
    {
        $this->monto = $monto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMoneda(): ?string
    {
        return $this->moneda;
    }

    /**
     * @param string|null $moneda
     * @return Facturas
     */
    public function setMoneda(?string $moneda): Facturas
    {
        $this->moneda = $moneda;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTipoDeCambio(): ?float
    {
        return $this->tipoDeCambio;
    }

    /**
     * @param float|null $tipoDeCambio
     * @return Facturas
     */
    public function setTipoDeCambio(?float $tipoDeCambio): Facturas
    {
        $this->tipoDeCambio = $tipoDeCambio;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    /**
     * @param string|null $comentarios
     * @return Facturas
     */
    public function setComentarios(?string $comentarios): Facturas
    {
        $this->comentarios = $comentarios;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnulada(): ?string
    {
        return $this->anulada;
    }

    /**
     * @param string|null $anulada
     * @return Facturas
     */
    public function setAnulada(?string $anulada): Facturas
    {
        $this->anulada = $anulada;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompleta(): ?string
    {
        return $this->completa;
    }

    /**
     * @param string|null $completa
     * @return Facturas
     */
    public function setCompleta(?string $completa): Facturas
    {
        $this->completa = $completa;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    /**
     * @param string|null $tipo
     * @return Facturas
     */
    public function setTipo(?string $tipo): Facturas
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCanje(): ?string
    {
        return $this->canje;
    }

    /**
     * @param string|null $canje
     * @return Facturas
     */
    public function setCanje(?string $canje): Facturas
    {
        $this->canje = $canje;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEnBlanco(): ?string
    {
        return $this->enBlanco;
    }

    /**
     * @param string|null $enBlanco
     * @return Facturas
     */
    public function setEnBlanco(?string $enBlanco): Facturas
    {
        $this->enBlanco = $enBlanco;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRazonSocial(): ?string
    {
        return $this->razonSocial;
    }

    /**
     * @param string|null $razonSocial
     * @return Facturas
     */
    public function setRazonSocial(?string $razonSocial): Facturas
    {
        $this->razonSocial = $razonSocial;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRuc(): ?string
    {
        return $this->ruc;
    }

    /**
     * @param string|null $ruc
     * @return Facturas
     */
    public function setRuc(?string $ruc): Facturas
    {
        $this->ruc = $ruc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroOrdenDeCompra(): ?string
    {
        return $this->numeroOrdenDeCompra;
    }

    /**
     * @param string|null $numeroOrdenDeCompra
     * @return Facturas
     */
    public function setNumeroOrdenDeCompra(?string $numeroOrdenDeCompra): Facturas
    {
        $this->numeroOrdenDeCompra = $numeroOrdenDeCompra;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @param string|null $accountId
     * @return Facturas
     */
    public function setAccountId(?string $accountId): Facturas
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCobrada(): ?string
    {
        return $this->cobrada;
    }

    /**
     * @param string|null $cobrada
     * @return Facturas
     */
    public function setCobrada(?string $cobrada): Facturas
    {
        $this->cobrada = $cobrada;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConfirmada(): ?string
    {
        return $this->confirmada;
    }

    /**
     * @param string|null $confirmada
     * @return Facturas
     */
    public function setConfirmada(?string $confirmada): Facturas
    {
        $this->confirmada = $confirmada;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getConfirmedOn(): ?\DateTime
    {
        return $this->confirmedOn;
    }

    /**
     * @param \DateTime|null $confirmedOn
     * @return Facturas
     */
    public function setConfirmedOn(?\DateTime $confirmedOn): Facturas
    {
        $this->confirmedOn = $confirmedOn;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getModalidadPago(): ?string
    {
        return $this->modalidadPago;
    }

    /**
     * @param string|null $modalidadPago
     * @return Facturas
     */
    public function setModalidadPago(?string $modalidadPago): Facturas
    {
        $this->modalidadPago = $modalidadPago;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFechaProbable(): ?\DateTime
    {
        return $this->fechaProbable;
    }

    /**
     * @param \DateTime|null $fechaProbable
     * @return Facturas
     */
    public function setFechaProbable(?\DateTime $fechaProbable): Facturas
    {
        $this->fechaProbable = $fechaProbable;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * @param \DateTime|null $createdOn
     * @return Facturas
     */
    public function setCreatedOn(?\DateTime $createdOn): Facturas
    {
        $this->createdOn = $createdOn;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedOn(): ?\DateTime
    {
        return $this->updatedOn;
    }

    /**
     * @param \DateTime|null $updatedOn
     * @return Facturas
     */
    public function setUpdatedOn(?\DateTime $updatedOn): Facturas
    {
        $this->updatedOn = $updatedOn;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCargoCobranza(): ?string
    {
        return $this->cargoCobranza;
    }

    /**
     * @param string|null $cargoCobranza
     * @return Facturas
     */
    public function setCargoCobranza(?string $cargoCobranza): Facturas
    {
        $this->cargoCobranza = $cargoCobranza;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFechaCargoCobranza(): ?\DateTime
    {
        return $this->fechaCargoCobranza;
    }

    /**
     * @param \DateTime|null $fechaCargoCobranza
     * @return Facturas
     */
    public function setFechaCargoCobranza(?\DateTime $fechaCargoCobranza): Facturas
    {
        $this->fechaCargoCobranza = $fechaCargoCobranza;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFechaCobranza(): ?\DateTime
    {
        return $this->fechaCobranza;
    }

    /**
     * @param \DateTime|null $fechaCobranza
     * @return Facturas
     */
    public function setFechaCobranza(?\DateTime $fechaCobranza): Facturas
    {
        $this->fechaCobranza = $fechaCobranza;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImprimida(): ?string
    {
        return $this->imprimida;
    }

    /**
     * @param string|null $imprimida
     * @return Facturas
     */
    public function setImprimida(?string $imprimida): Facturas
    {
        $this->imprimida = $imprimida;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInmutable(): ?string
    {
        return $this->inmutable;
    }

    /**
     * @param string|null $inmutable
     * @return Facturas
     */
    public function setInmutable(?string $inmutable): Facturas
    {
        $this->inmutable = $inmutable;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConUnaSolaDescripcion(): ?string
    {
        return $this->conUnaSolaDescripcion;
    }

    /**
     * @param string|null $conUnaSolaDescripcion
     * @return Facturas
     */
    public function setConUnaSolaDescripcion(?string $conUnaSolaDescripcion): Facturas
    {
        $this->conUnaSolaDescripcion = $conUnaSolaDescripcion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFacturaDireccionFiscal(): ?string
    {
        return $this->facturaDireccionFiscal;
    }

    /**
     * @param string|null $facturaDireccionFiscal
     * @return Facturas
     */
    public function setFacturaDireccionFiscal(?string $facturaDireccionFiscal): Facturas
    {
        $this->facturaDireccionFiscal = $facturaDireccionFiscal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConNotaDeCredito(): ?string
    {
        return $this->conNotaDeCredito;
    }

    /**
     * @param string|null $conNotaDeCredito
     * @return Facturas
     */
    public function setConNotaDeCredito(?string $conNotaDeCredito): Facturas
    {
        $this->conNotaDeCredito = $conNotaDeCredito;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMontoCredito(): ?string
    {
        return $this->montoCredito;
    }

    /**
     * @param string|null $montoCredito
     * @return Facturas
     */
    public function setMontoCredito(?string $montoCredito): Facturas
    {
        $this->montoCredito = $montoCredito;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMontoActivo(): ?string
    {
        return $this->montoActivo;
    }

    /**
     * @param string|null $montoActivo
     * @return Facturas
     */
    public function setMontoActivo(?string $montoActivo): Facturas
    {
        $this->montoActivo = $montoActivo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUltimaFactura(): ?string
    {
        return $this->ultimaFactura;
    }

    /**
     * @param string|null $ultimaFactura
     * @return Facturas
     */
    public function setUltimaFactura(?string $ultimaFactura): Facturas
    {
        $this->ultimaFactura = $ultimaFactura;
        return $this;
    }




}
