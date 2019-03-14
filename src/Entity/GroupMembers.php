<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMembers
 *
 * @ORM\Table(name="group_members")
 * @ORM\Entity
 */
class GroupMembers
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
     * @var int
     *
     * @ORM\Column(name="group_id", type="bigint", nullable=false)
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false)
     */
    private $userId;


}
