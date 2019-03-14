<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", uniqueConstraints={@ORM\UniqueConstraint(name="usuario", columns={"usuario"})}, indexes={@ORM\Index(name="areas_usuarios", columns={"id_area"}), @ORM\Index(name="usuarios_grupos_usuarios", columns={"id_grupo"}), @ORM\Index(name="usuarios_usuarios", columns={"asignado_a"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=15, nullable=false)
     */
    private $usuario = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=50, nullable=false)
     */
    private $nombres = '';

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=50, nullable=false)
     */
    private $apellidos = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email1", type="string", length=200, nullable=true)
     */
    private $email1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email2", type="string", length=200, nullable=true)
     */
    private $email2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono_movil", type="string", length=40, nullable=true)
     */
    private $fonoMovil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono_casa", type="string", length=40, nullable=true)
     */
    private $fonoCasa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono_trabajo", type="string", length=40, nullable=true)
     */
    private $fonoTrabajo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_registro", type="datetime", nullable=true)
     */
    private $dateRegistro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_update", type="datetime", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado", type="string", length=0, nullable=true)
     */
    private $estado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="empresas", type="string", length=200, nullable=true)
     */
    private $empresas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="areas", type="string", length=40, nullable=true)
     */
    private $areas;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_admin", type="integer", nullable=true)
     */
    private $isAdmin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=true)
     */
    private $idGrupo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_area", type="integer", nullable=true)
     */
    private $idArea;

    /**
     * @var int
     *
     * @ORM\Column(name="id_subarea", type="integer", nullable=false)
     */
    private $idSubarea;

    /**
     * @var int|null
     *
     * @ORM\Column(name="asignado_a", type="integer", nullable=true)
     */
    private $asignadoA;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_last_login", type="datetime", nullable=true)
     */
    private $dateLastLogin;

    /**
     * @var int
     *
     * @ORM\Column(name="acceso_externo", type="integer", nullable=false)
     */
    private $accesoExterno = '0';


}
