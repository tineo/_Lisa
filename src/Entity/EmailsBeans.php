<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsBeans
 *
 * @ORM\Table(name="emails_beans", indexes={@ORM\Index(name="idx_emails_beans_email_bean", columns={"email_id", "bean_id", "deleted"}), @ORM\Index(name="idx_emails_beans_bean_id", columns={"bean_id"})})
 * @ORM\Entity
 */
class EmailsBeans
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
     * @ORM\Column(name="email_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $emailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $beanId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bean_module", type="string", length=100, nullable=true)
     */
    private $beanModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_data", type="text", length=65535, nullable=true)
     */
    private $campaignData;

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
