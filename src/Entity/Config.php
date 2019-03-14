<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="config")
 * @ORM\Entity
 */
class Config
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
     * @ORM\Column(name="conf_key", type="string", length=100, nullable=false)
     */
    private $confKey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conf_value", type="string", length=100, nullable=false)
     */
    private $confValue = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=150, nullable=true)
     */
    private $descripcion;


}
