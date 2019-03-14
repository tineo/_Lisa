<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoAreas
 *
 * @ORM\Table(name="proyecto_areas")
 * @ORM\Entity
 */
class ProyectoAreas
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
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="en_diseno", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $enDiseno = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ingreso_diseno", type="datetime", nullable=true)
     */
    private $ingresoDiseno;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salida_diseno", type="datetime", nullable=true)
     */
    private $salidaDiseno;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estado_diseno", type="integer", nullable=true)
     */
    private $estadoDiseno = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="encargado_diseno", type="string", length=36, nullable=true)
     */
    private $encargadoDiseno = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones_diseno", type="text", length=65535, nullable=true)
     */
    private $observacionesDiseno;

    /**
     * @var string
     *
     * @ORM\Column(name="en_planeamiento", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $enPlaneamiento = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ingreso_planeamiento", type="datetime", nullable=true)
     */
    private $ingresoPlaneamiento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salida_planeamiento", type="datetime", nullable=true)
     */
    private $salidaPlaneamiento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estado_planeamiento", type="integer", nullable=true)
     */
    private $estadoPlaneamiento = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="encargado_planeamiento", type="string", length=36, nullable=true)
     */
    private $encargadoPlaneamiento = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones_planeamiento", type="text", length=65535, nullable=true)
     */
    private $observacionesPlaneamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="en_costos", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $enCostos = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ingreso_costos", type="datetime", nullable=true)
     */
    private $ingresoCostos;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salida_costos", type="datetime", nullable=true)
     */
    private $salidaCostos;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estado_costos", type="integer", nullable=true)
     */
    private $estadoCostos = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="encargado_costos", type="string", length=36, nullable=true)
     */
    private $encargadoCostos = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones_costos", type="text", length=65535, nullable=true)
     */
    private $observacionesCostos;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ingreso_operaciones", type="datetime", nullable=true)
     */
    private $ingresoOperaciones;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salida_operaciones", type="datetime", nullable=true)
     */
    private $salidaOperaciones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_operaciones", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $enOperaciones;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estado_operaciones", type="integer", nullable=true)
     */
    private $estadoOperaciones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones_operaciones", type="text", length=65535, nullable=true)
     */
    private $observacionesOperaciones;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estado_ejecutivo", type="integer", nullable=true)
     */
    private $estadoEjecutivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_desarrollo", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $enDesarrollo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ingreso_desarrollo", type="datetime", nullable=true)
     */
    private $ingresoDesarrollo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_innovaciones", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $enInnovaciones = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="estado_innovaciones", type="integer", nullable=true)
     */
    private $estadoInnovaciones;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ingreso_innovaciones", type="datetime", nullable=true)
     */
    private $ingresoInnovaciones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_instalaciones", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $enInstalaciones = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="estado_instalaciones", type="integer", nullable=true)
     */
    private $estadoInstalaciones;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ingreso_instalaciones", type="datetime", nullable=true)
     */
    private $ingresoInstalaciones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_validacion_operaciones", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $enValidacionOperaciones = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones_validacion_operaciones", type="text", length=65535, nullable=true)
     */
    private $observacionesValidacionOperaciones;


}
