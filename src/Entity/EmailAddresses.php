<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailAddresses
 *
 * @ORM\Table(name="email_addresses", indexes={@ORM\Index(name="idx_ea_opt_out_invalid", columns={"email_address", "opt_out", "invalid_email"}), @ORM\Index(name="idx_ea_caps_opt_out_invalid", columns={"email_address_caps", "opt_out", "invalid_email"})})
 * @ORM\Entity
 */
class EmailAddresses
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_address", type="string", length=255, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_address_caps", type="string", length=255, nullable=true)
     */
    private $emailAddressCaps;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invalid_email", type="boolean", nullable=true)
     */
    private $invalidEmail = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="opt_out", type="boolean", nullable=true)
     */
    private $optOut = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
