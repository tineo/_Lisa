<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tracker
 *
 * @ORM\Table(name="tracker", indexes={@ORM\Index(name="idx_tracker_userid_vis_id", columns={"user_id", "visible", "id"}), @ORM\Index(name="idx_tracker_monitor_id", columns={"monitor_id"}), @ORM\Index(name="idx_tracker_date_modified", columns={"date_modified"}), @ORM\Index(name="idx_tracker_iid", columns={"item_id"}), @ORM\Index(name="idx_tracker_userid_itemid_vis", columns={"user_id", "item_id", "visible"})})
 * @ORM\Entity
 */
class Tracker
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
     * @var string
     *
     * @ORM\Column(name="monitor_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $monitorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=255, nullable=true)
     */
    private $moduleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_id", type="string", length=36, nullable=true)
     */
    private $itemId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_summary", type="string", length=255, nullable=true)
     */
    private $itemSummary;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_id", type="string", length=36, nullable=true)
     */
    private $sessionId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
