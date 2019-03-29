<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", uniqueConstraints={@ORM\UniqueConstraint(name="usuario", columns={"usuario"})}, indexes={@ORM\Index(name="areas_usuarios", columns={"id_area"}), @ORM\Index(name="usuarios_grupos_usuarios", columns={"id_grupo"}), @ORM\Index(name="usuarios_usuarios", columns={"asignado_a"})})
 * @ORM\Entity
 */
class Usuarios  implements UserInterface
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

    /**
     * @return int
     */
    public function getIdUsuario(): int
    {
        return $this->idUsuario;
    }

    /**
     * @param int $idUsuario
     * @return Usuarios
     */
    public function setIdUsuario(int $idUsuario): Usuarios
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsuario(): string
    {
        return $this->usuario;
    }

    /**
     * @param string $usuario
     * @return Usuarios
     */
    public function setUsuario(string $usuario): Usuarios
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Usuarios
     */
    public function setPassword(string $password): Usuarios
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombres(): string
    {
        return $this->nombres;
    }

    /**
     * @param string $nombres
     * @return Usuarios
     */
    public function setNombres(string $nombres): Usuarios
    {
        $this->nombres = $nombres;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     * @return Usuarios
     */
    public function setApellidos(string $apellidos): Usuarios
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail1(): ?string
    {
        return $this->email1;
    }

    /**
     * @param string|null $email1
     * @return Usuarios
     */
    public function setEmail1(?string $email1): Usuarios
    {
        $this->email1 = $email1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail2(): ?string
    {
        return $this->email2;
    }

    /**
     * @param string|null $email2
     * @return Usuarios
     */
    public function setEmail2(?string $email2): Usuarios
    {
        $this->email2 = $email2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFonoMovil(): ?string
    {
        return $this->fonoMovil;
    }

    /**
     * @param string|null $fonoMovil
     * @return Usuarios
     */
    public function setFonoMovil(?string $fonoMovil): Usuarios
    {
        $this->fonoMovil = $fonoMovil;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFonoCasa(): ?string
    {
        return $this->fonoCasa;
    }

    /**
     * @param string|null $fonoCasa
     * @return Usuarios
     */
    public function setFonoCasa(?string $fonoCasa): Usuarios
    {
        $this->fonoCasa = $fonoCasa;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFonoTrabajo(): ?string
    {
        return $this->fonoTrabajo;
    }

    /**
     * @param string|null $fonoTrabajo
     * @return Usuarios
     */
    public function setFonoTrabajo(?string $fonoTrabajo): Usuarios
    {
        $this->fonoTrabajo = $fonoTrabajo;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateRegistro(): ?\DateTime
    {
        return $this->dateRegistro;
    }

    /**
     * @param \DateTime|null $dateRegistro
     * @return Usuarios
     */
    public function setDateRegistro(?\DateTime $dateRegistro): Usuarios
    {
        $this->dateRegistro = $dateRegistro;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateUpdate(): ?\DateTime
    {
        return $this->dateUpdate;
    }

    /**
     * @param \DateTime|null $dateUpdate
     * @return Usuarios
     */
    public function setDateUpdate(?\DateTime $dateUpdate): Usuarios
    {
        $this->dateUpdate = $dateUpdate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEstado(): ?string
    {
        return $this->estado;
    }

    /**
     * @param string|null $estado
     * @return Usuarios
     */
    public function setEstado(?string $estado): Usuarios
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmpresas(): ?string
    {
        return $this->empresas;
    }

    /**
     * @param string|null $empresas
     * @return Usuarios
     */
    public function setEmpresas(?string $empresas): Usuarios
    {
        $this->empresas = $empresas;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAreas(): ?string
    {
        return $this->areas;
    }

    /**
     * @param string|null $areas
     * @return Usuarios
     */
    public function setAreas(?string $areas): Usuarios
    {
        $this->areas = $areas;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeleted(): int
    {
        return $this->deleted;
    }

    /**
     * @param int $deleted
     * @return Usuarios
     */
    public function setDeleted(int $deleted): Usuarios
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getisAdmin(): ?int
    {
        return $this->isAdmin;
    }

    /**
     * @param int|null $isAdmin
     * @return Usuarios
     */
    public function setIsAdmin(?int $isAdmin): Usuarios
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdGrupo(): ?int
    {
        return $this->idGrupo;
    }

    /**
     * @param int|null $idGrupo
     * @return Usuarios
     */
    public function setIdGrupo(?int $idGrupo): Usuarios
    {
        $this->idGrupo = $idGrupo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdArea(): ?int
    {
        return $this->idArea;
    }

    /**
     * @param int|null $idArea
     * @return Usuarios
     */
    public function setIdArea(?int $idArea): Usuarios
    {
        $this->idArea = $idArea;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdSubarea(): int
    {
        return $this->idSubarea;
    }

    /**
     * @param int $idSubarea
     * @return Usuarios
     */
    public function setIdSubarea(int $idSubarea): Usuarios
    {
        $this->idSubarea = $idSubarea;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAsignadoA(): ?int
    {
        return $this->asignadoA;
    }

    /**
     * @param int|null $asignadoA
     * @return Usuarios
     */
    public function setAsignadoA(?int $asignadoA): Usuarios
    {
        $this->asignadoA = $asignadoA;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateLastLogin(): ?\DateTime
    {
        return $this->dateLastLogin;
    }

    /**
     * @param \DateTime|null $dateLastLogin
     * @return Usuarios
     */
    public function setDateLastLogin(?\DateTime $dateLastLogin): Usuarios
    {
        $this->dateLastLogin = $dateLastLogin;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccesoExterno(): int
    {
        return $this->accesoExterno;
    }

    /**
     * @param int $accesoExterno
     * @return Usuarios
     */
    public function setAccesoExterno(int $accesoExterno): Usuarios
    {
        $this->accesoExterno = $accesoExterno;
        return $this;
    }


    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->usuario;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
