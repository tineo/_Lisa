<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table(name="notes", indexes={@ORM\Index(name="idx_notes_parent", columns={"parent_id", "parent_type"}), @ORM\Index(name="idx_note_contact", columns={"contact_id"}), @ORM\Index(name="idx_note_name", columns={"name"}), @ORM\Index(name="idx_notes_assigned_del", columns={"deleted", "assigned_user_id"})})
 * @ORM\Entity
 */
class Notes
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
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignedUserId;

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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_mime_type", type="string", length=100, nullable=true)
     */
    private $fileMimeType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_type", type="string", length=255, nullable=true)
     */
    private $parentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $parentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $contactId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="portal_flag", type="boolean", nullable=true)
     */
    private $portalFlag;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="embed_flag", type="boolean", nullable=true)
     */
    private $embedFlag = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
