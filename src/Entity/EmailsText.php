<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsText
 *
 * @ORM\Table(name="emails_text", indexes={@ORM\Index(name="emails_textfromaddr", columns={"from_addr"})})
 * @ORM\Entity
 */
class EmailsText
{
    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_addr", type="string", length=255, nullable=true)
     */
    private $fromAddr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_to_addr", type="string", length=255, nullable=true)
     */
    private $replyToAddr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="to_addrs", type="text", length=65535, nullable=true)
     */
    private $toAddrs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cc_addrs", type="text", length=65535, nullable=true)
     */
    private $ccAddrs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bcc_addrs", type="text", length=65535, nullable=true)
     */
    private $bccAddrs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_html", type="text", length=0, nullable=true)
     */
    private $descriptionHtml;

    /**
     * @var string|null
     *
     * @ORM\Column(name="raw_source", type="text", length=0, nullable=true)
     */
    private $rawSource;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
