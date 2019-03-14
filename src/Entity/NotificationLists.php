<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationLists
 *
 * @ORM\Table(name="notification_lists")
 * @ORM\Entity
 */
class NotificationLists
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="list", type="string", length=64, nullable=true)
     */
    private $list;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;


}
