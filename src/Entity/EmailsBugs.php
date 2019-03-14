<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsBugs
 *
 * @ORM\Table(name="emails_bugs", indexes={@ORM\Index(name="idx_bug_email_bug", columns={"bug_id"}), @ORM\Index(name="idx_bug_email_email", columns={"email_id"})})
 * @ORM\Entity
 */
class EmailsBugs
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
