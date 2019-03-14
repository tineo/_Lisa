<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchedulersTimes
 *
 * @ORM\Table(name="schedulers_times", indexes={@ORM\Index(name="idx_scheduler_id", columns={"scheduler_id", "execute_time"})})
 * @ORM\Entity
 */
class SchedulersTimes
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
     * @var string
     *
     * @ORM\Column(name="scheduler_id", type="string", length=36, nullable=false)
     */
    private $schedulerId = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="execute_time", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $executeTime = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=false, options={"default"="ready"})
     */
    private $status = 'ready';


}
