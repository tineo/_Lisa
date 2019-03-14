<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportMaps
 *
 * @ORM\Table(name="import_maps", indexes={@ORM\Index(name="idx_owner_module_name", columns={"assigned_user_id", "module", "name", "deleted"})})
 * @ORM\Entity
 */
class ImportMaps
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=36, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=36, nullable=false)
     */
    private $source = '';

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=36, nullable=false)
     */
    private $module = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="blob", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var bool
     *
     * @ORM\Column(name="has_header", type="boolean", nullable=false, options={"default"="1"})
     */
    private $hasHeader = '1';

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
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="is_published", type="string", length=3, nullable=false, options={"default"="no"})
     */
    private $isPublished = 'no';


}
