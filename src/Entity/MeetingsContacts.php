<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingsContacts
 *
 * @ORM\Table(name="meetings_contacts", indexes={@ORM\Index(name="idx_con_mtg_mtg", columns={"meeting_id"}), @ORM\Index(name="idx_meeting_contact", columns={"meeting_id", "contact_id"}), @ORM\Index(name="idx_con_mtg_con", columns={"contact_id"})})
 * @ORM\Entity
 */
class MeetingsContacts
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
     * @var string|null
     *
     * @ORM\Column(name="meeting_id", type="string", length=36, nullable=true)
     */
    private $meetingId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="required", type="string", length=1, nullable=true, options={"default"="1","fixed"=true})
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
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';


}
