<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecbExcluir
 *
 * @ORM\Table(name="recb_excluir")
 * @ORM\Entity
 */
class RecbExcluir
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
     * @var string|null
     *
     * @ORM\Column(name="codigo", type="string", length=6, nullable=true, options={"fixed"=true})
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=true)
     */
    private $tipo;


}
