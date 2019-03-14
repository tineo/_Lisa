<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailTemplates
 *
 * @ORM\Table(name="email_templates", indexes={@ORM\Index(name="idx_email_template_name", columns={"name"})})
 * @ORM\Entity
 */
class EmailTemplates
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
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="published", type="string", length=3, nullable=true)
     */
    private $published;

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
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=true)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body_html", type="text", length=65535, nullable=true)
     */
    private $bodyHtml;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignedUserId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="text_only", type="boolean", nullable=true)
     */
    private $textOnly;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;


}
