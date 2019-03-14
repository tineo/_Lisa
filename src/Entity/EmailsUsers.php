<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsUsers
 *
 * @ORM\Table(name="emails_users", indexes={@ORM\Index(name="idx_usr_email_email", columns={"email_id"}), @ORM\Index(name="idx_usr_email_usr", columns={"user_id"})})
 * @ORM\Entity
 */
class EmailsUsers
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
     * @ORM\Column(name="email_id", type="string", length=36, nullable=true)
     */
    private $emailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_data", type="text", length=65535, nullable=true)
     */
    private $campaignData;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';


}
