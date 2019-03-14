<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsCases
 *
 * @ORM\Table(name="contacts_cases", indexes={@ORM\Index(name="idx_con_case_case", columns={"case_id"}), @ORM\Index(name="idx_con_case_con", columns={"contact_id"}), @ORM\Index(name="idx_contacts_cases", columns={"contact_id", "case_id"})})
 * @ORM\Entity
 */
class ContactsCases
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
     * @ORM\Column(name="case_id", type="string", length=36, nullable=true)
     */
    private $caseId;

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
