<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dashboards
 *
 * @ORM\Table(name="dashboards", indexes={@ORM\Index(name="idx_dashboard_name", columns={"name", "deleted"})})
 * @ORM\Entity
 */
class Dashboards
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
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
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
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;


}
