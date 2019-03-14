<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtReqServicios
 *
 * @ORM\Table(name="pt_req_servicios", indexes={@ORM\Index(name="id_servicio", columns={"id_servicio"}), @ORM\Index(name="id_req", columns={"id_req"})})
 * @ORM\Entity
 */
class PtReqServicios
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
     * @ORM\Column(name="id_servicio", type="integer", nullable=false, options={"comment"="ID_SERVICIO DE LA TABLA DE INSUMOS_SERVICIOS"})
     */
    private $idServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cuenta", type="integer", nullable=false, options={"comment"="ID DE LA CUENTA CONTABLE"})
     */
    private $idCuenta;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_unidad", type="integer", nullable=true)
     */
    private $idUnidad;

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
     * @var float
     *
     * @ORM\Column(name="cant_requerida", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantRequerida = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_atendida", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="//CANTIDAD SOLICITADA PARA ORDEN DE SERVICIO"})
     */
    private $cantAtendida = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=0, nullable=false, options={"default"="DE","comment"="DE => DESARROLLO SE => SERVICIOS"})
     */
    private $origen = 'DE';

    /**
     * @var int
     *
     * @ORM\Column(name="cerrado", type="integer", nullable=false)
     */
    private $cerrado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="anulado", type="integer", nullable=false)
     */
    private $anulado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_pedido", type="datetime", nullable=true)
     */
    private $fPedido;


}
