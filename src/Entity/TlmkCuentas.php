<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlmkCuentas
 *
 * @ORM\Table(name="tlmk_cuentas", indexes={@ORM\Index(name="id_cuenta", columns={"id_cuenta"})})
 * @ORM\Entity
 */
class TlmkCuentas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cuenta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=150, nullable=false)
     */
    private $razonSocial = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccion", type="string", length=150, nullable=true)
     */
    private $direccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ciudad", type="string", length=150, nullable=true)
     */
    private $ciudad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pais", type="string", length=150, nullable=true)
     */
    private $pais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono_uno", type="string", length=50, nullable=true)
     */
    private $telefonoUno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono_dos", type="string", length=50, nullable=true)
     */
    private $telefonoDos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono_tres", type="string", length=50, nullable=true)
     */
    private $telefonoTres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="web", type="string", length=50, nullable=true)
     */
    private $web;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correo_uno", type="string", length=150, nullable=true)
     */
    private $correoUno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correo_dos", type="string", length=150, nullable=true)
     */
    private $correoDos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacion", type="string", length=150, nullable=true)
     */
    private $observacion;

    /**
     * @var int
     *
     * @ORM\Column(name="creado_por", type="integer", nullable=false)
     */
    private $creadoPor = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="asignado_a", type="string", length=150, nullable=true)
     */
    private $asignadoA;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_update", type="datetime", nullable=true)
     */
    private $fUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $fRegistro = '0000-00-00 00:00:00';

    /**
     * @var int
     *
     * @ORM\Column(name="anulado", type="integer", nullable=false)
     */
    private $anulado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ruc_dni", type="string", length=20, nullable=false, options={"default"="DNI -> 8 RUC -> 11"})
     */
    private $rucDni = 'DNI -> 8 RUC -> 11';


}
