<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsEmailAddrRel
 *
 * @ORM\Table(name="emails_email_addr_rel", indexes={@ORM\Index(name="idx_eearl_email_id", columns={"email_id", "address_type"}), @ORM\Index(name="idx_eearl_address_id", columns={"email_address_id"})})
 * @ORM\Entity
 */
class EmailsEmailAddrRel
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
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $emailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_type", type="string", length=4, nullable=true)
     */
    private $addressType;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $emailAddressId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
