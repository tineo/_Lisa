<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsProjectTasks
 *
 * @ORM\Table(name="emails_project_tasks", indexes={@ORM\Index(name="idx_ept_email", columns={"email_id"}), @ORM\Index(name="idx_ept_project_task", columns={"project_task_id"})})
 * @ORM\Entity
 */
class EmailsProjectTasks
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
     * @ORM\Column(name="email_id", type="string", length=36, nullable=true)
     */
    private $emailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_task_id", type="string", length=36, nullable=true)
     */
    private $projectTaskId;

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
