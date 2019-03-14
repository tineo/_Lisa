<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutboundEmail
 *
 * @ORM\Table(name="outbound_email", indexes={@ORM\Index(name="oe_user_id_idx", columns={"id", "user_id"})})
 * @ORM\Entity
 */
class OutboundEmail
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=true, options={"default"="user"})
     */
    private $type = 'user';

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_sendtype", type="string", length=8, nullable=true, options={"default"="smtp"})
     */
    private $mailSendtype = 'smtp';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_smtptype", type="string", length=20, nullable=true, options={"default"="other"})
     */
    private $mailSmtptype = 'other';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_smtpserver", type="string", length=100, nullable=true)
     */
    private $mailSmtpserver;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mail_smtpport", type="integer", nullable=true)
     */
    private $mailSmtpport = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_smtpuser", type="string", length=100, nullable=true)
     */
    private $mailSmtpuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_smtppass", type="string", length=100, nullable=true)
     */
    private $mailSmtppass;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mail_smtpauth_req", type="boolean", nullable=true)
     */
    private $mailSmtpauthReq = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mail_smtpssl", type="integer", nullable=true)
     */
    private $mailSmtpssl = '0';


}
