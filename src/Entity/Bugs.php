<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bugs
 *
 * @ORM\Table(name="bugs", indexes={@ORM\Index(name="bug_number", columns={"bug_number"}), @ORM\Index(name="idx_bug_name", columns={"name"})})
 * @ORM\Entity
 */
class Bugs
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
     * @var int
     *
     * @ORM\Column(name="bug_number", type="integer", nullable=false)
     */
    private $bugNumber;

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
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="priority", type="string", length=25, nullable=true)
     */
    private $priority;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resolution", type="string", length=255, nullable=true)
     */
    private $resolution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="found_in_release", type="string", length=255, nullable=true)
     */
    private $foundInRelease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fixed_in_release", type="string", length=255, nullable=true)
     */
    private $fixedInRelease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="work_log", type="text", length=65535, nullable=true)
     */
    private $workLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_category", type="string", length=255, nullable=true)
     */
    private $productCategory;


}
