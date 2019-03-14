<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historico
 *
 * @ORM\Table(name="historico")
 * @ORM\Entity
 */
class Historico
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=19, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=45, nullable=false)
     */
    private $file;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecha = 'CURRENT_TIMESTAMP';


}
