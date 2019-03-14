<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InboundEmail
 *
 * @ORM\Table(name="inbound_email")
 * @ORM\Entity
 */
class InboundEmail
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
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
     * @ORM\Column(name="status", type="string", length=100, nullable=true, options={"default"="Active"})
     */
    private $status = 'Active';

    /**
     * @var string|null
     *
     * @ORM\Column(name="server_url", type="string", length=100, nullable=true)
     */
    private $serverUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_user", type="string", length=100, nullable=true)
     */
    private $emailUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_password", type="string", length=100, nullable=true)
     */
    private $emailPassword;

    /**
     * @var int|null
     *
     * @ORM\Column(name="port", type="integer", nullable=true)
     */
    private $port;

    /**
     * @var string|null
     *
     * @ORM\Column(name="service", type="string", length=50, nullable=true)
     */
    private $service;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailbox", type="text", length=65535, nullable=true)
     */
    private $mailbox;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="delete_seen", type="boolean", nullable=true)
     */
    private $deleteSeen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailbox_type", type="string", length=10, nullable=true)
     */
    private $mailboxType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $templateId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stored_options", type="text", length=65535, nullable=true)
     */
    private $storedOptions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $groupId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_personal", type="boolean", nullable=true)
     */
    private $isPersonal = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="groupfolder_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $groupfolderId;


}
