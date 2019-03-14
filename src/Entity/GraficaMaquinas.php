<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GraficaMaquinas
 *
 * @ORM\Table(name="grafica_maquinas")
 * @ORM\Entity
 */
class GraficaMaquinas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_maquina", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaquina;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;


}
