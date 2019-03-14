<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedulers
 *
 * @ORM\Table(name="schedulers", indexes={@ORM\Index(name="idx_schedule", columns={"date_time_start", "deleted"})})
 * @ORM\Entity
 */
class Schedulers
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
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255, nullable=false)
     */
    private $job = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time_start", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateTimeStart = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_time_end", type="datetime", nullable=true)
     */
    private $dateTimeEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="job_interval", type="string", length=100, nullable=false)
     */
    private $jobInterval = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_from", type="time", nullable=true)
     */
    private $timeFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_to", type="time", nullable=true)
     */
    private $timeTo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_run", type="datetime", nullable=true)
     */
    private $lastRun;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="catch_up", type="boolean", nullable=true, options={"default"="1"})
     */
    private $catchUp = '1';


}
