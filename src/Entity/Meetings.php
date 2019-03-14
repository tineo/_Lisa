<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meetings
 *
 * @ORM\Table(name="meetings", indexes={@ORM\Index(name="idx_meet_date_start", columns={"date_start"}), @ORM\Index(name="idx_meet_par_del", columns={"parent_id", "parent_type", "deleted"}), @ORM\Index(name="idx_mtg_name", columns={"name"}), @ORM\Index(name="idx_meet_stat_del", columns={"assigned_user_id", "status", "deleted"})})
 * @ORM\Entity
 */
class Meetings
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="join_url", type="string", length=200, nullable=true)
     */
    private $joinUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="host_url", type="string", length=400, nullable=true)
     */
    private $hostUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="displayed_url", type="string", length=400, nullable=true)
     */
    private $displayedUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="creator", type="string", length=50, nullable=true)
     */
    private $creator;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_id", type="string", length=50, nullable=true)
     */
    private $externalId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration_hours", type="integer", nullable=true)
     */
    private $durationHours;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration_minutes", type="integer", nullable=true)
     */
    private $durationMinutes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=true)
     */
    private $dateEnd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_type", type="string", length=100, nullable=true)
     */
    private $parentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="Sugar"})
     */
    private $type = 'Sugar';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true)
     */
    private $parentId;

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="reminder_time", type="integer", nullable=true, options={"default"="-1"})
     */
    private $reminderTime = '-1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="email_reminder_time", type="integer", nullable=true, options={"default"="-1"})
     */
    private $emailReminderTime = '-1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="email_reminder_sent", type="boolean", nullable=true, options={"default"="-1"})
     */
    private $emailReminderSent = '-1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true)
     */
    private $sequence = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="repeat_type", type="string", length=36, nullable=true)
     */
    private $repeatType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="repeat_interval", type="integer", nullable=true)
     */
    private $repeatInterval;

    /**
     * @var string|null
     *
     * @ORM\Column(name="repeat_dow", type="string", length=7, nullable=true)
     */
    private $repeatDow;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="repeat_until", type="date", nullable=true)
     */
    private $repeatUntil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="repeat_count", type="integer", nullable=true)
     */
    private $repeatCount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="repeat_parent_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $repeatParentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recurring_source", type="string", length=36, nullable=true)
     */
    private $recurringSource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outlook_id", type="string", length=255, nullable=true)
     */
    private $outlookId;


}
