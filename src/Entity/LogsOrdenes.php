<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogsOrdenes
 *
 * @ORM\Table(name="logs_ordenes")
 * @ORM\Entity
 */
class LogsOrdenes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false, options={"comment"="// USUARIO QUE HIZO EL CAMBIO"})
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_orden", type="integer", nullable=false)
     */
    private $idOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_orden", type="string", length=0, nullable=false, options={"comment"="// C = ORDEN DE COMPRA
// S = ORDEN DE SERVICIO"})
     */
    private $tipoOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="accion", type="string", length=0, nullable=false)
     */
    private $accion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=true)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="campo", type="string", length=20, nullable=false)
     */
    private $campo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="val_from", type="string", length=50, nullable=false)
     */
    private $valFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="val_to", type="string", length=50, nullable=false)
     */
    private $valTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condicion", type="string", length=200, nullable=true)
     */
    private $condicion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario_sistemas", type="string", length=250, nullable=true)
     */
    private $comentarioSistemas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false, options={"comment"="//FECHA DEL CAMBIO"})
     */
    private $fecha;


}
