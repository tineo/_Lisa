<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * APrueba
 *
 * @ORM\Table(name="___a_prueba")
 * @ORM\Entity
 */
class APrueba
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
     * @var float|null
     *
     * @ORM\Column(name="campo1", type="float", precision=12, scale=4, nullable=true)
     */
    private $campo1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="campo2", type="float", precision=10, scale=0, nullable=true)
     */
    private $campo2;

    /**
     * @var float|null
     *
     * @ORM\Column(name="campo3", type="float", precision=12, scale=4, nullable=true)
     */
    private $campo3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campo4", type="decimal", precision=12, scale=4, nullable=true)
     */
    private $campo4;

    /**
     * @var float|null
     *
     * @ORM\Column(name="campo5", type="float", precision=10, scale=4, nullable=true)
     */
    private $campo5;


}
