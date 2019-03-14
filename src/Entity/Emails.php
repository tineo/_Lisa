<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emails
 *
 * @ORM\Table(name="emails", indexes={@ORM\Index(name="idx_message_id", columns={"message_id"}), @ORM\Index(name="idx_email_assigned", columns={"assigned_user_id", "type", "status"}), @ORM\Index(name="idx_email_name", columns={"name"}), @ORM\Index(name="idx_email_parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class Emails
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
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignedUserId;

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
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_sent", type="datetime", nullable=true)
     */
    private $dateSent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_id", type="string", length=255, nullable=true)
     */
    private $messageId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="flagged", type="boolean", nullable=true)
     */
    private $flagged;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reply_to_status", type="boolean", nullable=true)
     */
    private $replyToStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intent", type="string", length=100, nullable=true, options={"default"="pick"})
     */
    private $intent = 'pick';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailbox_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $mailboxId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_type", type="string", length=100, nullable=true)
     */
    private $parentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $parentId;


}
