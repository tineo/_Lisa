<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenid
 *
 * @ORM\Table(name="ordenid")
 * @ORM\Entity
 */
class Ordenid
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
