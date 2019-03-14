<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atributos
 *
 * @ORM\Table(name="atributos")
 * @ORM\Entity
 */
class Atributos
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
     * @var int|null
     *
     * @ORM\Column(name="producto_id", type="bigint", nullable=true)
     */
    private $productoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor", type="text", length=65535, nullable=true)
     */
    private $valor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $tipo;


}
