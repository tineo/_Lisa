<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersFeeds
 *
 * @ORM\Table(name="users_feeds", indexes={@ORM\Index(name="idx_ud_user_id", columns={"user_id", "feed_id"})})
 * @ORM\Entity
 */
class UsersFeeds
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     * @ORM\Id
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="feed_id", type="string", length=36, nullable=true)
     * @ORM\Id
     */
    private $feedId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

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
