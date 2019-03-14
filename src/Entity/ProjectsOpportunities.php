<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectsOpportunities
 *
 * @ORM\Table(name="projects_opportunities", indexes={@ORM\Index(name="idx_proj_opp_proj", columns={"project_id"}), @ORM\Index(name="projects_opportunities_alt", columns={"project_id", "opportunity_id"}), @ORM\Index(name="idx_proj_opp_opp", columns={"opportunity_id"})})
 * @ORM\Entity
 */
class ProjectsOpportunities
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
     * @ORM\Column(name="opportunity_id", type="string", length=36, nullable=true)
     */
    private $opportunityId;

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
