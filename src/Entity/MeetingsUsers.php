<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingsUsers
 *
 * @ORM\Table(name="meetings_users", indexes={@ORM\Index(name="idx_usr_mtg_usr", columns={"user_id"}), @ORM\Index(name="idx_usr_mtg_mtg", columns={"meeting_id"}), @ORM\Index(name="idx_meeting_users", columns={"meeting_id", "user_id"})})
 * @ORM\Entity
 */
class MeetingsUsers
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
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

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
