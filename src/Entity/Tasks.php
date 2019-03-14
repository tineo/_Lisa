<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table(name="tasks", indexes={@ORM\Index(name="idx_tsk_name", columns={"name"}), @ORM\Index(name="idx_task_assigned", columns={"assigned_user_id"}), @ORM\Index(name="idx_task_con_del", columns={"contact_id", "deleted"}), @ORM\Index(name="idx_task_par_del", columns={"parent_id", "parent_type", "deleted"}), @ORM\Index(name="idx_task_status", columns={"status"})})
 * @ORM\Entity
 */
class Tasks
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true, options={"default"="Not Started"})
     */
    private $status = 'Not Started';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="date_due_flag", type="boolean", nullable=true)
     */
    private $dateDueFlag = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_due", type="datetime", nullable=true)
     */
    private $dateDue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_due", type="time", nullable=true)
     */
    private $timeDue;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="date_start_flag", type="boolean", nullable=true)
     */
    private $dateStartFlag = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_start", type="time", nullable=true)
     */
    private $timeStart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_type", type="string", length=255, nullable=true)
     */
    private $parentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $parentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $contactId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="priority", type="string", length=100, nullable=true)
     */
    private $priority;

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


}
