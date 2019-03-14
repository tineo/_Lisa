<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GraficaVentas
 *
 * @ORM\Table(name="grafica_ventas")
 * @ORM\Entity
 */
class GraficaVentas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_venta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVenta;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_nombre", type="string", length=150, nullable=false)
     */
    private $cliNombre = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_ruc_dni", type="string", length=12, nullable=true)
     */
    private $cliRucDni;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_contacto", type="string", length=100, nullable=true)
     */
    private $cliContacto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_email", type="string", length=120, nullable=true)
     */
    private $cliEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_fono", type="string", length=50, nullable=true)
     */
    private $cliFono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_id", type="string", length=50, nullable=true)
     */
    private $cliId;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_tipo", type="string", length=0, nullable=false)
     */
    private $cliTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=150, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccion_entrega", type="string", length=150, nullable=true)
     */
    private $direccionEntrega;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=8, scale=2, nullable=false)
     */
    private $precio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entrega", type="date", nullable=true)
     */
    private $fechaEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hora_entrega", type="string", length=10, nullable=true)
     */
    private $horaEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_pago", type="string", length=60, nullable=true)
     */
    private $formaPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false)
     */
    private $fRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
