<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsBugs
 *
 * @ORM\Table(name="contacts_bugs", indexes={@ORM\Index(name="idx_con_bug_bug", columns={"bug_id"}), @ORM\Index(name="idx_con_bug_con", columns={"contact_id"}), @ORM\Index(name="idx_contact_bug", columns={"contact_id", "bug_id"})})
 * @ORM\Entity
 */
class ContactsBugs
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
     * @ORM\Column(name="bug_id", type="string", length=36, nullable=true)
     */
    private $bugId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_role", type="string", length=50, nullable=true)
     */
    private $contactRole;

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
