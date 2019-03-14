<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vcals
 *
 * @ORM\Table(name="vcals", indexes={@ORM\Index(name="idx_vcal", columns={"type", "user_id"})})
 * @ORM\Entity
 */
class Vcals
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false)
     */
    private $userId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=25, nullable=true)
     */
    private $source;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;


}
