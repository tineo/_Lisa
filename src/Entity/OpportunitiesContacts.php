<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpportunitiesContacts
 *
 * @ORM\Table(name="opportunities_contacts", indexes={@ORM\Index(name="idx_con_opp_opp", columns={"opportunity_id"}), @ORM\Index(name="idx_con_opp_con", columns={"contact_id"}), @ORM\Index(name="idx_opportunities_contacts", columns={"opportunity_id", "contact_id"})})
 * @ORM\Entity
 */
class OpportunitiesContacts
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
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opportunity_id", type="string", length=36, nullable=true)
     */
    private $opportunityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_role", type="string", length=50, nullable=true)
     */
    private $contactRole;

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
