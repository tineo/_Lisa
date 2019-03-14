<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsUsers
 *
 * @ORM\Table(name="contacts_users", indexes={@ORM\Index(name="idx_con_users_user", columns={"user_id"}), @ORM\Index(name="idx_con_users_con", columns={"contact_id"}), @ORM\Index(name="idx_contacts_users", columns={"contact_id", "user_id"})})
 * @ORM\Entity
 */
class ContactsUsers
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
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

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
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';


}
