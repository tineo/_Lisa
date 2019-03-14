<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignTrkrs
 *
 * @ORM\Table(name="campaign_trkrs", indexes={@ORM\Index(name="campaign_tracker_key_idx", columns={"tracker_key"})})
 * @ORM\Entity
 */
class CampaignTrkrs
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
     * @ORM\Column(name="tracker_name", type="string", length=30, nullable=true)
     */
    private $trackerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracker_url", type="string", length=255, nullable=true, options={"default"="http://"})
     */
    private $trackerUrl = 'http://';

    /**
     * @var int
     *
     * @ORM\Column(name="tracker_key", type="integer", nullable=false)
     */
    private $trackerKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateEntered = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModified = '0000-00-00 00:00:00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_optout", type="boolean", nullable=false)
     */
    private $isOptout = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';


}
