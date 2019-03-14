<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignLog
 *
 * @ORM\Table(name="campaign_log", indexes={@ORM\Index(name="idx_camp_campaign_id", columns={"campaign_id"}), @ORM\Index(name="idx_camp_tracker", columns={"target_tracker_key"}), @ORM\Index(name="idx_camp_more_info", columns={"more_information"})})
 * @ORM\Entity
 */
class CampaignLog
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
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target_tracker_key", type="string", length=36, nullable=true)
     */
    private $targetTrackerKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target_id", type="string", length=36, nullable=true)
     */
    private $targetId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target_type", type="string", length=25, nullable=true)
     */
    private $targetType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_type", type="string", length=25, nullable=true)
     */
    private $activityType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activity_date", type="datetime", nullable=true)
     */
    private $activityDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_id", type="string", length=36, nullable=true)
     */
    private $relatedId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_type", type="string", length=25, nullable=true)
     */
    private $relatedType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="archived", type="boolean", nullable=true)
     */
    private $archived = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="hits", type="integer", nullable=true)
     */
    private $hits = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="list_id", type="string", length=36, nullable=true)
     */
    private $listId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="more_information", type="string", length=100, nullable=true)
     */
    private $moreInformation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marketing_id", type="string", length=36, nullable=true)
     */
    private $marketingId;


}
