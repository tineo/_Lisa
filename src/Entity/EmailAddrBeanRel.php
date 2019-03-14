<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailAddrBeanRel
 *
 * @ORM\Table(name="email_addr_bean_rel", indexes={@ORM\Index(name="idx_email_address_id", columns={"email_address_id"}), @ORM\Index(name="idx_bean_id", columns={"bean_id", "bean_module"})})
 * @ORM\Entity
 */
class EmailAddrBeanRel
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
     * @ORM\Column(name="email_address_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $emailAddressId;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $beanId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bean_module", type="string", length=100, nullable=true)
     */
    private $beanModule;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="primary_address", type="boolean", nullable=true)
     */
    private $primaryAddress = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reply_to_address", type="boolean", nullable=true)
     */
    private $replyToAddress = '0';

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
