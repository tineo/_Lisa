<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtInsumosFamilias
 *
 * @ORM\Table(name="mt_insumos_familias")
 * @ORM\Entity
 */
class MtInsumosFamilias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_familia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFamilia;

    /**
     * @var int
     *
     * @ORM\Column(name="id_familia_sup", type="integer", nullable=false)
     */
    private $idFamiliaSup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nivel", type="string", length=50, nullable=true)
     */
    private $nivel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partida", type="string", length=11, nullable=true)
     */
    private $partida;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
