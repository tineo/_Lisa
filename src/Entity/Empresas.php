<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 *
 * @ORM\Table(name="empresas", uniqueConstraints={@ORM\UniqueConstraint(name="ruc", columns={"ruc"})})
 * @ORM\Entity
 */
class Empresas
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
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=false, options={"fixed"=true})
     */
    private $ruc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_fiscal", type="string", length=150, nullable=true)
     */
    private $nombreFiscal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="string", length=100, nullable=true)
     */
    private $imagen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=true)
     */
    private $direccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=150, nullable=true)
     */
    private $telefono;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
