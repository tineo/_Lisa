<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SistemaModulos
 *
 * @ORM\Table(name="sistema_modulos", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id_modulo"}), @ORM\UniqueConstraint(name="cod_area", columns={"cod_modulo"}), @ORM\UniqueConstraint(name="cod_area_2", columns={"cod_modulo"})})
 * @ORM\Entity
 */
class SistemaModulos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_modulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_modulo", type="string", length=50, nullable=false)
     */
    private $codModulo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sistema", type="string", length=70, nullable=false)
     */
    private $sistema = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre = '';

    /**
     * @var int
     *
     * @ORM\Column(name="op_access", type="integer", nullable=false)
     */
    private $opAccess;

    /**
     * @var int
     *
     * @ORM\Column(name="op_add", type="integer", nullable=false)
     */
    private $opAdd;

    /**
     * @var int
     *
     * @ORM\Column(name="op_deleted", type="integer", nullable=false)
     */
    private $opDeleted;

    /**
     * @var int
     *
     * @ORM\Column(name="op_edit", type="integer", nullable=false)
     */
    private $opEdit;

    /**
     * @var int
     *
     * @ORM\Column(name="op_list", type="integer", nullable=false)
     */
    private $opList;


}
