<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sugarfeed
 *
 * @ORM\Table(name="sugarfeed", indexes={@ORM\Index(name="sgrfeed_date", columns={"date_entered", "deleted"}), @ORM\Index(name="idx_sgrfeed_rmod_rid_date", columns={"related_module", "related_id", "date_entered"})})
 * @ORM\Entity
 */
class Sugarfeed
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

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
     * @var string|null
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $modifiedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_module", type="string", length=100, nullable=true)
     */
    private $relatedModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $relatedId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_url", type="string", length=255, nullable=true)
     */
    private $linkUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_type", type="string", length=30, nullable=true)
     */
    private $linkType;


}
