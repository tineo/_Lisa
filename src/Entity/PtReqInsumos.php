<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtReqInsumos
 *
 * @ORM\Table(name="pt_req_insumos", indexes={@ORM\Index(name="id_insumo", columns={"id_insumo"}), @ORM\Index(name="id_req", columns={"id_req"}), @ORM\Index(name="orden_id", columns={"orden_id"}), @ORM\Index(name="anulado", columns={"anulado"})})
 * @ORM\Entity
 */
class PtReqInsumos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_req", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReq;

    /**
     * @var int
     *
     * @ORM\Column(name="id_insumo", type="integer", nullable=false)
     */
    private $idInsumo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_motivo", type="integer", nullable=true)
     */
    private $idMotivo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=false)
     */
    private $ordenId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="area_id", type="integer", nullable=false)
     */
    private $areaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_limite", type="date", nullable=false)
     */
    private $fLimite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_pedido", type="datetime", nullable=false)
     */
    private $fPedido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_pedido_compra", type="datetime", nullable=true)
     */
    private $fPedidoCompra;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_requerida", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="// CANT. REQUERIDA PARA PLANTA"})
     */
    private $cantRequerida = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_asegurada", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="// CANT. REQUERIDA PARA SER ATENDIDA"})
     */
    private $cantAsegurada = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_atendida", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="// CANT. QUE SE VA ATENDIENDO"})
     */
    private $cantAtendida = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_compra", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="// CANT. DE SOLICITUD DE COMPRA"})
     */
    private $cantCompra = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_compra_pedida", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="// CANT. DE COMPRA PEDIDA"})
     */
    private $cantCompraPedida = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_comprada", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="// CANT. QUE SE VA COMPRANDO"})
     */
    private $cantComprada = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=true)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=0, nullable=false, options={"default"="DE","comment"="DE => DESARROLLO
AL => ALMACEN
NR => NUEVO REQUERIMIENTO
SI => SISTEMA"})
     */
    private $origen = 'DE';

    /**
     * @var int
     *
     * @ORM\Column(name="procesado", type="integer", nullable=false, options={"comment"="// si almacen hizo algo con este requerimiento"})
     */
    private $procesado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="asegura_destino", type="integer", nullable=false)
     */
    private $aseguraDestino = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destino", type="string", length=0, nullable=true, options={"default"="N","comment"="N  => NINGUNO
OC => ORDEN DE COMPRA
CO => CONTADO
OB => OBSERVADOS"})
     */
    private $destino = 'N';

    /**
     * @var int
     *
     * @ORM\Column(name="anulado", type="integer", nullable=false)
     */
    private $anulado = '0';


}
