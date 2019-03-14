<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailMarketing
 *
 * @ORM\Table(name="email_marketing", indexes={@ORM\Index(name="idx_emmkit_del", columns={"deleted"}), @ORM\Index(name="idx_emmkt_name", columns={"name"})})
 * @ORM\Entity
 */
class EmailMarketing
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
     * @var string|null
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_addr", type="string", length=100, nullable=true)
     */
    private $fromAddr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_name", type="string", length=100, nullable=true)
     */
    private $fromName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inbound_email_id", type="string", length=36, nullable=true)
     */
    private $inboundEmailId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="date", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_start", type="time", nullable=true)
     */
    private $timeStart;

    /**
     * @var string
     *
     * @ORM\Column(name="template_id", type="string", length=36, nullable=false)
     */
    private $templateId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=false)
     */
    private $status = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="all_prospect_lists", type="boolean", nullable=true)
     */
    private $allProspectLists = '0';


}
