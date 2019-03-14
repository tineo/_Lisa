<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlmkContactos
 *
 * @ORM\Table(name="tlmk_contactos")
 * @ORM\Entity
 */
class TlmkContactos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=150, nullable=false)
     */
    private $nombres = '';

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=150, nullable=false)
     */
    private $apellidos = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="area", type="string", length=150, nullable=true)
     */
    private $area;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cargo", type="string", length=150, nullable=true)
     */
    private $cargo;

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
     * @ORM\Column(name="correo_uno", type="string", length=50, nullable=true)
     */
    private $correoUno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correo_dos", type="string", length=50, nullable=true)
     */
    private $correoDos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccion", type="string", length=150, nullable=true)
     */
    private $direccion;

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
     * @ORM\Column(name="creado_por", type="integer", nullable=false)
     */
    private $creadoPor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="anulado", type="integer", nullable=false)
     */
    private $anulado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacion", type="string", length=150, nullable=true)
     */
    private $observacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cuenta", type="integer", nullable=true)
     */
    private $idCuenta;


}
