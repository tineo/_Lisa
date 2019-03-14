<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProspectListCampaigns
 *
 * @ORM\Table(name="prospect_list_campaigns", indexes={@ORM\Index(name="idx_pro_id", columns={"prospect_list_id"}), @ORM\Index(name="idx_prospect_list_campaigns", columns={"prospect_list_id", "campaign_id"}), @ORM\Index(name="idx_cam_id", columns={"campaign_id"})})
 * @ORM\Entity
 */
class ProspectListCampaigns
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
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

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
