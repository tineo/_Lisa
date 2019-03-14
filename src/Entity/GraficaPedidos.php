<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GraficaPedidos
 *
 * @ORM\Table(name="grafica_pedidos")
 * @ORM\Entity
 */
class GraficaPedidos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedido;

    /**
     * @var int
     *
     * @ORM\Column(name="id_maquina", type="integer", nullable=false)
     */
    private $idMaquina;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_nombre", type="string", length=150, nullable=false)
     */
    private $clienteNombre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_ruc", type="string", length=20, nullable=false)
     */
    private $clienteRuc = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="odt", type="integer", nullable=true)
     */
    private $odt;

    /**
     * @var int
     *
     * @ORM\Column(name="venta_id", type="integer", nullable=false)
     */
    private $ventaId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="trabajo", type="string", length=150, nullable=true)
     */
    private $trabajo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $precio = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dia", type="date", nullable=false)
     */
    private $dia;

    /**
     * @var string
     *
     * @ORM\Column(name="hora_inicio", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $horaInicio = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hora_fin", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $horaFin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=6, nullable=false, options={"fixed"=true})
     */
    private $color = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false)
     */
    private $fRegistro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_update", type="datetime", nullable=true)
     */
    private $fUpdate;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
