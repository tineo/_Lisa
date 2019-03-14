<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPreferences
 *
 * @ORM\Table(name="user_preferences", indexes={@ORM\Index(name="idx_userprefnamecat", columns={"assigned_user_id", "category"})})
 * @ORM\Entity
 */
class UserPreferences
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
     * @ORM\Column(name="category", type="string", length=50, nullable=true)
     */
    private $category;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

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
     * @var string
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=false)
     */
    private $assignedUserId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contents", type="text", length=65535, nullable=true)
     */
    private $contents;


}
