<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Versions
 *
 * @ORM\Table(name="versions", indexes={@ORM\Index(name="idx_version", columns={"name", "deleted"})})
 * @ORM\Entity
 */
class Versions
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateEntered = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModified = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=false)
     */
    private $modifiedUserId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="file_version", type="string", length=255, nullable=false)
     */
    private $fileVersion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="db_version", type="string", length=255, nullable=false)
     */
    private $dbVersion = '';


}
