<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UpgradeHistory
 *
 * @ORM\Table(name="upgrade_history", uniqueConstraints={@ORM\UniqueConstraint(name="upgrade_history_md5_uk", columns={"md5sum"})})
 * @ORM\Entity
 */
class UpgradeHistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="md5sum", type="string", length=32, nullable=true)
     */
    private $md5sum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="version", type="string", length=64, nullable=true)
     */
    private $version;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_name", type="string", length=255, nullable=true)
     */
    private $idName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manifest", type="text", length=0, nullable=true)
     */
    private $manifest;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true, options={"default"="1"})
     */
    private $enabled = '1';


}
