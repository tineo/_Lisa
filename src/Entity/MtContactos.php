<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtContactos
 *
 * @ORM\Table(name="mt_contactos")
 * @ORM\Entity
 */
class MtContactos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cont", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCont;

    /**
     * @var string|null
     *
     * @ORM\Column(name="saludo", type="string", length=4, nullable=true)
     */
    private $saludo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=100, nullable=false)
     */
    private $nombres = '';

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100, nullable=false)
     */
    private $apellidos = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="area", type="string", length=100, nullable=true)
     */
    private $area;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cargo", type="string", length=100, nullable=true)
     */
    private $cargo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono_oficina", type="string", length=50, nullable=true)
     */
    private $fonoOficina;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono_movil", type="string", length=50, nullable=true)
     */
    private $fonoMovil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono_casa", type="string", length=50, nullable=true)
     */
    private $fonoCasa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono_alter", type="string", length=50, nullable=true)
     */
    private $fonoAlter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nextel", type="string", length=50, nullable=true)
     */
    private $nextel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email1", type="string", length=150, nullable=true)
     */
    private $email1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email2", type="string", length=150, nullable=true)
     */
    private $email2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dir", type="string", length=100, nullable=true)
     */
    private $dir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dir_alter", type="string", length=100, nullable=true)
     */
    private $dirAlter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dir_ciudad", type="string", length=50, nullable=true)
     */
    private $dirCiudad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dir_ciudad_alter", type="string", length=50, nullable=true)
     */
    private $dirCiudadAlter;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_nacimiento", type="date", nullable=true)
     */
    private $fNacimiento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asistente_nombre", type="string", length=100, nullable=true)
     */
    private $asistenteNombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asistente_telf", type="string", length=60, nullable=true)
     */
    private $asistenteTelf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asistente_email", type="string", length=150, nullable=true)
     */
    private $asistenteEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_update", type="datetime", nullable=false)
     */
    private $fUpdate;

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
    private $deleted;

    /**
     * @var int
     *
     * @ORM\Column(name="creado_por", type="integer", nullable=false)
     */
    private $creadoPor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="asignado_a", type="integer", nullable=true)
     */
    private $asignadoA;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cli_pro", type="integer", nullable=true)
     */
    private $idCliPro;


}
