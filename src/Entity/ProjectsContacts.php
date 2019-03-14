<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectsContacts
 *
 * @ORM\Table(name="projects_contacts", indexes={@ORM\Index(name="idx_proj_con_con", columns={"contact_id"}), @ORM\Index(name="idx_proj_con_proj", columns={"project_id"}), @ORM\Index(name="projects_contacts_alt", columns={"project_id", "contact_id"})})
 * @ORM\Entity
 */
class ProjectsContacts
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
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_id", type="string", length=36, nullable=true)
     */
    private $projectId;

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
