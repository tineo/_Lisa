<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsOpportunities
 *
 * @ORM\Table(name="emails_opportunities", indexes={@ORM\Index(name="idx_opp_email_email", columns={"email_id"}), @ORM\Index(name="idx_opp_email_opp", columns={"opportunity_id"})})
 * @ORM\Entity
 */
class EmailsOpportunities
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
     * @ORM\Column(name="opportunity_id", type="string", length=36, nullable=true)
     */
    private $opportunityId;

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
