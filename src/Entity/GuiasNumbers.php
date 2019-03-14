<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuiasNumbers
 *
 * @ORM\Table(name="guias_numbers")
 * @ORM\Entity
 */
class GuiasNumbers
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
     * @ORM\Column(name="serie", type="integer", nullable=true)
     */
    private $serie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="bigint", nullable=true)
     */
    private $numero;

    /**
     * @var int|null
     *
     * @ORM\Column(name="empresa", type="integer", nullable=true)
     */
    private $empresa;


}
