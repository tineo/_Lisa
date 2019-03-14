<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campaigns
 *
 * @ORM\Table(name="campaigns", indexes={@ORM\Index(name="idx_campaign_name", columns={"name"}), @ORM\Index(name="camp_auto_tracker_key", columns={"tracker_key"})})
 * @ORM\Entity
 */
class Campaigns
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
     * @var int
     *
     * @ORM\Column(name="tracker_key", type="integer", nullable=false)
     */
    private $trackerKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tracker_count", type="integer", nullable=true)
     */
    private $trackerCount = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="refer_url", type="string", length=255, nullable=true, options={"default"="http://"})
     */
    private $referUrl = 'http://';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracker_text", type="string", length=255, nullable=true)
     */
    private $trackerText;

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
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="impressions", type="integer", nullable=true)
     */
    private $impressions = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency_id", type="string", length=36, nullable=true)
     */
    private $currencyId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=true)
     */
    private $budget;

    /**
     * @var float|null
     *
     * @ORM\Column(name="expected_cost", type="float", precision=10, scale=0, nullable=true)
     */
    private $expectedCost;

    /**
     * @var float|null
     *
     * @ORM\Column(name="actual_cost", type="float", precision=10, scale=0, nullable=true)
     */
    private $actualCost;

    /**
     * @var float|null
     *
     * @ORM\Column(name="expected_revenue", type="float", precision=10, scale=0, nullable=true)
     */
    private $expectedRevenue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_type", type="string", length=25, nullable=true)
     */
    private $campaignType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objective", type="text", length=65535, nullable=true)
     */
    private $objective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var string|null
     *
     * @ORM\Column(name="frequency", type="string", length=25, nullable=true)
     */
    private $frequency;


}
