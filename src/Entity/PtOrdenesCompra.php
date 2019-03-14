<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtOrdenesCompra
 *
 * @ORM\Table(name="pt_ordenes_compra")
 * @ORM\Entity
 */
class PtOrdenesCompra
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_orden_compra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdenCompra;

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
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

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
     * @ORM\Column(name="comentarios", type="string", length=800, nullable=true)
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
     * @var \DateTime
     *
     * @ORM\Column(name="f_orden", type="datetime", nullable=false)
     */
    private $fOrden;

    /**
     * @var int
     *
     * @ORM\Column(name="enviado_mail", type="integer", nullable=false)
     */
    private $enviadoMail = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="contado", type="integer", nullable=false, options={"comment"="// si la orden fue generada por una orden al contado"})
     */
    private $contado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_anulada", type="datetime", nullable=true)
     */
    private $fAnulada;

    /**
     * @var int
     *
     * @ORM\Column(name="cambios", type="integer", nullable=false, options={"comment"="//SI SE HIZO ALGUN CAMBIO EN LA ORDEN"})
     */
    private $cambios = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="anulado", type="integer", nullable=true)
     */
    private $anulado = '0';


}
