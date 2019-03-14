<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtOrdenesServicio
 *
 * @ORM\Table(name="pt_ordenes_servicio")
 * @ORM\Entity
 */
class PtOrdenesServicio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_orden_servicio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdenServicio;

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
     * @ORM\Column(name="id_trabajador", type="integer", nullable=false)
     */
    private $idTrabajador;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_documento", type="integer", nullable=false)
     */
    private $idDocumento = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_entrega", type="date", nullable=false)
     */
    private $fEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lugar_entrega", type="string", length=150, nullable=true)
     */
    private $lugarEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_compra", type="string", length=0, nullable=false, options={"default"="S"})
     */
    private $monedaCompra = 'S';

    /**
     * @var float
     *
     * @ORM\Column(name="igv_porcent", type="float", precision=4, scale=2, nullable=false, options={"default"="18.00"})
     */
    private $igvPorcent = '18.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_pago", type="string", length=150, nullable=true)
     */
    private $formaPago;

    /**
     * @var string|null
     *
     * @ORM\Column(name="atencion", type="string", length=150, nullable=true)
     */
    private $atencion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentarios", type="string", length=250, nullable=true)
     */
    private $comentarios;

    /**
     * @var float
     *
     * @ORM\Column(name="tipo_cambio", type="float", precision=6, scale=3, nullable=false)
     */
    private $tipoCambio;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_adelanto", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $montoAdelanto = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="monto_saldado", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $montoSaldado = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="monto_ajuste", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $montoAjuste = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="detraccion", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $detraccion = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_servicio", type="string", length=150, nullable=false)
     */
    private $tipoServicio = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_otro", type="string", length=100, nullable=false)
     */
    private $tipoOtro = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_orden", type="datetime", nullable=false)
     */
    private $fOrden;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_recibido", type="datetime", nullable=true)
     */
    private $fRecibido;

    /**
     * @var int
     *
     * @ORM\Column(name="recibido", type="integer", nullable=false)
     */
    private $recibido = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_anulada", type="datetime", nullable=true)
     */
    private $fAnulada;

    /**
     * @var int|null
     *
     * @ORM\Column(name="anulado", type="integer", nullable=true)
     */
    private $anulado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cambios", type="integer", nullable=false)
     */
    private $cambios = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=true)
     */
    private $fSistema;


}
