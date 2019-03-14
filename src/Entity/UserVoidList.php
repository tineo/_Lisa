<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserVoidList
 *
 * @ORM\Table(name="user_void_list")
 * @ORM\Entity
 */
class UserVoidList
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
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;


}
