<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtProyectos
 *
 * @ORM\Table(name="pt_proyectos", indexes={@ORM\Index(name="b", columns={"account_id"}), @ORM\Index(name="a", columns={"opportunity_id"})})
 * @ORM\Entity
 */
class PtProyectos
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
     * @ORM\Column(name="tipo_proyecto", type="integer", nullable=false)
     */
    private $tipoProyecto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="urgente", type="integer", nullable=false)
     */
    private $urgente = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion_proyecto", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $fechaCreacionProyecto = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entrega_diseno", type="datetime", nullable=true)
     */
    private $fechaEntregaDiseno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caracteristicas_entorno", type="string", length=200, nullable=true)
     */
    private $caracteristicasEntorno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="publico_objetivo", type="string", length=200, nullable=true)
     */
    private $publicoObjetivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dimensiones_espacio", type="string", length=100, nullable=true)
     */
    private $dimensionesEspacio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nivel_seguridad", type="integer", nullable=true)
     */
    private $nivelSeguridad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="materiales", type="string", length=250, nullable=true)
     */
    private $materiales;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acabado", type="string", length=250, nullable=true)
     */
    private $acabado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vista_frente", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $vistaFrente = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vista_derecha", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $vistaDerecha = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vista_izquierda", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $vistaIzquierda = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vista_atras", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $vistaAtras = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vista_arriba", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $vistaArriba = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vista_abajo", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $vistaAbajo = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sugerencias", type="text", length=65535, nullable=true)
     */
    private $sugerencias;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recojo", type="integer", nullable=true)
     */
    private $recojo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="que_se_recojera", type="string", length=200, nullable=true)
     */
    private $queSeRecojera;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_recojo", type="date", nullable=true)
     */
    private $fechaRecojo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hora_recojo", type="time", nullable=true)
     */
    private $horaRecojo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lugar_recojo", type="string", length=200, nullable=true)
     */
    private $lugarRecojo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referencia_recojo", type="string", length=200, nullable=true)
     */
    private $referenciaRecojo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quien_paga_recojo", type="integer", nullable=true)
     */
    private $quienPagaRecojo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc_pago_recojo", type="string", length=100, nullable=true)
     */
    private $descPagoRecojo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entregar", type="date", nullable=true)
     */
    private $fechaEntregar;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hora_entrega_desde", type="time", nullable=true)
     */
    private $horaEntregaDesde;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hora_entrega_hasta", type="time", nullable=true)
     */
    private $horaEntregaHasta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccion_entregar", type="string", length=250, nullable=true)
     */
    private $direccionEntregar;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ubigeo_entregar", type="integer", nullable=true)
     */
    private $ubigeoEntregar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referencia_entregar", type="string", length=250, nullable=true)
     */
    private $referenciaEntregar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_costo", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valorCosto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $moneda;

    /**
     * @var string|null
     *
     * @ORM\Column(name="con_igv", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $conIgv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comision", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $comision;

    /**
     * @var string|null
     *
     * @ORM\Column(name="terminado", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $terminado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="perdido", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $perdido = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="otro_tipo", type="string", length=128, nullable=true)
     */
    private $otroTipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tiene_cotizaciones", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $tieneCotizaciones = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="opportunity_id", type="string", length=36, nullable=false)
     */
    private $opportunityId = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden_de_trabajo", type="integer", nullable=true)
     */
    private $ordenDeTrabajo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="empresa_vendedora", type="integer", nullable=true)
     */
    private $empresaVendedora;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tipo_de_venta", type="integer", nullable=true)
     */
    private $tipoDeVenta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entrega_planeamiento", type="datetime", nullable=true)
     */
    private $fechaEntregaPlaneamiento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entrega_costos", type="datetime", nullable=true)
     */
    private $fechaEntregaCostos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solo_entrega", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $soloEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alquiler", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $alquiler;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_de_presentacion", type="string", length=16, nullable=true)
     */
    private $tipoDePresentacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrega_en_un_punto", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $entregaEnUnPunto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lugares_de_entrega", type="text", length=65535, nullable=true)
     */
    private $lugaresDeEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="con_orden_de_trabajo", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $conOrdenDeTrabajo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="con_instalacion", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $conInstalacion = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden_id", type="bigint", nullable=true)
     */
    private $ordenId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_de_entrega_odt", type="datetime", nullable=true)
     */
    private $fechaDeEntregaOdt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_creacion_odt", type="datetime", nullable=true)
     */
    private $fechaCreacionOdt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="colores_aprobados", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $coloresAprobados;

    /**
     * @var string|null
     *
     * @ORM\Column(name="igual_al_arte_adjuntado", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $igualAlArteAdjuntado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="igual_al_codigo_pantones", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $igualAlCodigoPantones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="presentar_muestra_de_color", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $presentarMuestraDeColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="graficas_aprobadas", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $graficasAprobadas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_de_pago", type="text", length=65535, nullable=true)
     */
    private $formaDePago;

    /**
     * @var string|null
     *
     * @ORM\Column(name="incluye_igv_odt", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $incluyeIgvOdt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmar_medidas", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $confirmarMedidas;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_de_desmontaje", type="datetime", nullable=true)
     */
    private $fechaDeDesmontaje;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recojo_de_producto", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $recojoDeProducto = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="anulado", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $anulado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivo_anulacion", type="text", length=65535, nullable=true)
     */
    private $motivoAnulacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="urgente_diseno", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $urgenteDiseno = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="urgente_planeamiento", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $urgentePlaneamiento = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="urgente_costos", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $urgenteCostos = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facturado", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $facturado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="graf_igual_a_muestra", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $grafIgualAMuestra = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="graf_igual_a_pantones", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $grafIgualAPantones = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="graf_presentar_muestra", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $grafPresentarMuestra = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="monto_odt", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $montoOdt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda_odt", type="string", length=1, nullable=true, options={"default"="S","fixed"=true})
     */
    private $monedaOdt = 'S';

    /**
     * @var string|null
     *
     * @ORM\Column(name="postvendido", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $postvendido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proyecto_exportado", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $proyectoExportado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orden_exportada", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $ordenExportada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_pventa", type="datetime", nullable=true)
     */
    private $fechaPventa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="muy_urgente", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $muyUrgente;

    /**
     * @var float|null
     *
     * @ORM\Column(name="monto_adelanto", type="float", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $montoAdelanto = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dias_plazo", type="integer", nullable=true)
     */
    private $diasPlazo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_de_entrega_final", type="date", nullable=true)
     */
    private $fechaDeEntregaFinal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_facturacion", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $statusFacturacion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cancelado_sin_factura", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $canceladoSinFactura = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="canje", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $canje = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_de_entrega_total", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $statusDeEntregaTotal = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente_razon_social", type="string", length=255, nullable=true)
     */
    private $clienteRazonSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente_ruc", type="string", length=11, nullable=true)
     */
    private $clienteRuc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente_direccion", type="text", length=65535, nullable=true)
     */
    private $clienteDireccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente_contacto", type="string", length=255, nullable=true)
     */
    private $clienteContacto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente_telefono_fijo", type="string", length=128, nullable=true)
     */
    private $clienteTelefonoFijo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente_telefono_movil", type="string", length=128, nullable=true)
     */
    private $clienteTelefonoMovil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente_email", type="string", length=128, nullable=true)
     */
    private $clienteEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_razon_social", type="string", length=255, nullable=true)
     */
    private $facturaRazonSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_ruc", type="string", length=11, nullable=true)
     */
    private $facturaRuc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="factura_fecha_facturacion", type="datetime", nullable=true)
     */
    private $facturaFechaFacturacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_descripcion", type="text", length=65535, nullable=true)
     */
    private $facturaDescripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_contraentrega", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $facturaContraentrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_contacto_facturacion", type="string", length=255, nullable=true)
     */
    private $facturaContactoFacturacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_telefono_fijo", type="string", length=128, nullable=true)
     */
    private $facturaTelefonoFijo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_telefono_movil", type="string", length=128, nullable=true)
     */
    private $facturaTelefonoMovil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_email", type="string", length=128, nullable=true)
     */
    private $facturaEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_direccion", type="string", length=255, nullable=true)
     */
    private $facturaDireccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_observaciones", type="text", length=65535, nullable=true)
     */
    private $facturaObservaciones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_necesita_odt", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $facturaNecesitaOdt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_account_id", type="string", length=36, nullable=true)
     */
    private $facturaAccountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_direccion_fiscal", type="text", length=65535, nullable=true)
     */
    private $facturaDireccionFiscal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autorizado_para_facturar", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $autorizadoParaFacturar = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="se_necesita_supervisor", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $seNecesitaSupervisor = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="supervisor_asignado", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $supervisorAsignado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="promote_data_edited", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $promoteDataEdited = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_de_inicio_instalacion", type="datetime", nullable=true)
     */
    private $fechaDeInicioInstalacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inmutable", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $inmutable = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_cobranza", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $statusCobranza;

    /**
     * @var string|null
     *
     * @ORM\Column(name="guia_exportada", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $guiaExportada = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_standby", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $enStandby = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_de_recepcion_del_cliente", type="date", nullable=true)
     */
    private $fechaDeRecepcionDelCliente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="insumos_checked", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $insumosChecked = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="notificado_como_venta_asegurada", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $notificadoComoVentaAsegurada = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="con_datos_pendientes_promote", type="string", length=1, nullable=true, options={"default"="1","fixed"=true})
     */
    private $conDatosPendientesPromote = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="con_nota_de_credito", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $conNotaDeCredito = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="monto_credito", type="float", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $montoCredito = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="monto_activo", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $montoActivo = '0.00';

    /**
     * @var float|null
     *
     * @ORM\Column(name="costo_variable", type="float", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $costoVariable = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado_validacion", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $estadoValidacion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones_validacion", type="text", length=65535, nullable=true)
     */
    private $observacionesValidacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_cierre_odt", type="datetime", nullable=true)
     */
    private $fechaCierreOdt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="odt_cerrada", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $odtCerrada = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="monto_facturado", type="float", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $montoFacturado = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden_relacionada", type="bigint", nullable=true)
     */
    private $ordenRelacionada;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="instalaciones_fecha_visita_inicio", type="datetime", nullable=true)
     */
    private $instalacionesFechaVisitaInicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="instalaciones_fecha_visita_fin", type="datetime", nullable=true)
     */
    private $instalacionesFechaVisitaFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtipo_nuevo_proyecto", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $subtipoNuevoProyecto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datos_de_confirmacion_completos", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $datosDeConfirmacionCompletos = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="costo_insumos", type="float", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $costoInsumos = '0.00';

    /**
     * @var float|null
     *
     * @ORM\Column(name="costo_servicios", type="float", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $costoServicios = '0.00';

    /**
     * @var float|null
     *
     * @ORM\Column(name="costo_compras", type="float", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $costoCompras = '0.00';

    /**
     * @var int
     *
     * @ORM\Column(name="migrado_intranet", type="integer", nullable=false, options={"comment"="//SI FUE MIGRADO A INTRANET"})
     */
    private $migradoIntranet = '0';


}
