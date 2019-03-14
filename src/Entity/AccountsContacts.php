<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountsContacts
 *
 * @ORM\Table(name="accounts_contacts", indexes={@ORM\Index(name="idx_acc_cont_cont", columns={"contact_id"}), @ORM\Index(name="idx_acc_cont_acc", columns={"account_id"}), @ORM\Index(name="idx_account_contact", columns={"account_id", "contact_id"})})
 * @ORM\Entity
 */
class AccountsContacts
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
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

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
