<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailMarketingProspectLists
 *
 * @ORM\Table(name="email_marketing_prospect_lists", indexes={@ORM\Index(name="email_mp_prospects", columns={"email_marketing_id", "prospect_list_id"})})
 * @ORM\Entity
 */
class EmailMarketingProspectLists
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
     * @ORM\Column(name="prospect_list_id", type="string", length=36, nullable=true)
     */
    private $prospectListId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_marketing_id", type="string", length=36, nullable=true)
     */
    private $emailMarketingId;

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
