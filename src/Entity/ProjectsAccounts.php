<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectsAccounts
 *
 * @ORM\Table(name="projects_accounts", indexes={@ORM\Index(name="idx_proj_acct_proj", columns={"project_id"}), @ORM\Index(name="projects_accounts_alt", columns={"project_id", "account_id"}), @ORM\Index(name="idx_proj_acct_acct", columns={"account_id"})})
 * @ORM\Entity
 */
class ProjectsAccounts
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
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

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
