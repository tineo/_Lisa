<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectTask
 *
 * @ORM\Table(name="project_task")
 * @ORM\Entity
 */
class ProjectTask
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
     * @var string
     *
     * @ORM\Column(name="project_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $projectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_task_id", type="integer", nullable=true)
     */
    private $projectTaskId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="predecessors", type="text", length=65535, nullable=true)
     */
    private $predecessors;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="date", nullable=true)
     */
    private $dateStart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_start", type="integer", nullable=true)
     */
    private $timeStart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_finish", type="integer", nullable=true)
     */
    private $timeFinish;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish", type="date", nullable=true)
     */
    private $dateFinish;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration_unit", type="text", length=65535, nullable=true)
     */
    private $durationUnit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actual_duration", type="integer", nullable=true)
     */
    private $actualDuration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_complete", type="integer", nullable=true)
     */
    private $percentComplete;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_due", type="date", nullable=true)
     */
    private $dateDue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_due", type="time", nullable=true)
     */
    private $timeDue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_task_id", type="integer", nullable=true)
     */
    private $parentTaskId;

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
     * @ORM\Column(name="priority", type="string", length=255, nullable=true)
     */
    private $priority;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $createdBy;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="milestone_flag", type="boolean", nullable=true)
     */
    private $milestoneFlag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_number", type="integer", nullable=true, options={"default"="1"})
     */
    private $orderNumber = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="task_number", type="integer", nullable=true)
     */
    private $taskNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estimated_effort", type="integer", nullable=true)
     */
    private $estimatedEffort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actual_effort", type="integer", nullable=true)
     */
    private $actualEffort;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="utilization", type="integer", nullable=true, options={"default"="100"})
     */
    private $utilization = '100';


}
