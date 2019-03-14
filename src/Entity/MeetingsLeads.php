<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingsLeads
 *
 * @ORM\Table(name="meetings_leads", indexes={@ORM\Index(name="idx_lead_meeting_meeting", columns={"meeting_id"}), @ORM\Index(name="idx_meeting_lead", columns={"meeting_id", "lead_id"}), @ORM\Index(name="idx_lead_meeting_lead", columns={"lead_id"})})
 * @ORM\Entity
 */
class MeetingsLeads
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
     * @var string|null
     *
     * @ORM\Column(name="meeting_id", type="string", length=36, nullable=true)
     */
    private $meetingId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lead_id", type="string", length=36, nullable=true)
     */
    private $leadId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="required", type="string", length=1, nullable=true, options={"default"="1"})
     */
    private $required = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="accept_status", type="string", length=25, nullable=true, options={"default"="none"})
     */
    private $acceptStatus = 'none';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
