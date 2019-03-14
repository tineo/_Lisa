<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poked
 *
 * @ORM\Table(name="poked")
 * @ORM\Entity
 */
class Poked
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=16, nullable=false)
     * @ORM\Id
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="workgroup", type="string", length=50, nullable=false)
     */
    private $workgroup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_poked", type="datetime", nullable=false)
     */
    private $lastPoked;


}
