<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emailman
 *
 * @ORM\Table(name="emailman", indexes={@ORM\Index(name="idx_eman_list", columns={"list_id", "user_id", "deleted"}), @ORM\Index(name="idx_eman_campaign_id", columns={"campaign_id"})})
 * @ORM\Entity
 */
class Emailman
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
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
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marketing_id", type="string", length=36, nullable=true)
     */
    private $marketingId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="list_id", type="string", length=36, nullable=true)
     */
    private $listId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="send_date_time", type="datetime", nullable=true)
     */
    private $sendDateTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="in_queue", type="boolean", nullable=true)
     */
    private $inQueue = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="in_queue_date", type="datetime", nullable=true)
     */
    private $inQueueDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="send_attempts", type="integer", nullable=true)
     */
    private $sendAttempts = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_id", type="string", length=36, nullable=true)
     */
    private $relatedId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_type", type="string", length=100, nullable=true)
     */
    private $relatedType;


}
