<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opportunities
 *
 * @ORM\Table(name="opportunities", indexes={@ORM\Index(name="idx_opp_name", columns={"name"}), @ORM\Index(name="a", columns={"id"}), @ORM\Index(name="idx_opp_assigned", columns={"assigned_user_id"}), @ORM\Index(name="idx_opp_id_deleted", columns={"id", "deleted"})})
 * @ORM\Entity
 */
class Opportunities
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $modifiedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $createdBy;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opportunity_type", type="string", length=255, nullable=true)
     */
    private $opportunityType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lead_source", type="string", length=50, nullable=true)
     */
    private $leadSource;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_backup", type="string", length=25, nullable=true)
     */
    private $amountBackup;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount_usdollar", type="float", precision=10, scale=0, nullable=true)
     */
    private $amountUsdollar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $currencyId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_closed", type="date", nullable=true)
     */
    private $dateClosed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="next_step", type="string", length=100, nullable=true)
     */
    private $nextStep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sales_stage", type="string", length=100, nullable=true, options={"default"="Negotiation/Review"})
     */
    private $salesStage = 'Negotiation/Review';

    /**
     * @var float|null
     *
     * @ORM\Column(name="probability", type="float", precision=10, scale=0, nullable=true)
     */
    private $probability;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $campaignId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="with_project", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $withProject = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="used_in_vera", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $usedInVera = '0';


}
