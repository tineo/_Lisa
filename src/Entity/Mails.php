<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mails
 *
 * @ORM\Table(name="mails")
 * @ORM\Entity
 */
class Mails
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_name", type="string", length=255, nullable=true)
     */
    private $fromName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_address", type="string", length=255, nullable=true)
     */
    private $fromAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="to_address", type="string", length=255, nullable=true)
     */
    private $toAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="text", length=65535, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=true)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_html", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $isHtml = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sent", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $sent = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    private $updatedOn;


}
