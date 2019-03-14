<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CasesBugs
 *
 * @ORM\Table(name="cases_bugs", indexes={@ORM\Index(name="idx_cas_bug_cas", columns={"case_id"}), @ORM\Index(name="idx_case_bug", columns={"case_id", "bug_id"}), @ORM\Index(name="idx_cas_bug_bug", columns={"bug_id"})})
 * @ORM\Entity
 */
class CasesBugs
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
     * @ORM\Column(name="case_id", type="string", length=36, nullable=true)
     */
    private $caseId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bug_id", type="string", length=36, nullable=true)
     */
    private $bugId;

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
