<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailCache
 *
 * @ORM\Table(name="email_cache", indexes={@ORM\Index(name="idx_mail_to", columns={"toaddr"}), @ORM\Index(name="idx_ie_id", columns={"ie_id"}), @ORM\Index(name="idx_mail_from", columns={"ie_id", "mbox", "fromaddr"}), @ORM\Index(name="idx_mail_date", columns={"ie_id", "mbox", "senddate"}), @ORM\Index(name="idx_mail_subj", columns={"subject"})})
 * @ORM\Entity
 */
class EmailCache
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="ie_id", type="string", length=36, nullable=true, options={"fixed"=true})
     * @ORM\Id
     */
    private $ieId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbox", type="string", length=60, nullable=true)
     */
    private $mbox;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fromaddr", type="string", length=100, nullable=true)
     */
    private $fromaddr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="toaddr", type="string", length=255, nullable=true)
     */
    private $toaddr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="senddate", type="datetime", nullable=true)
     */
    private $senddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_id", type="string", length=255, nullable=true)
     */
    private $messageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mailsize", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $mailsize;

    /**
     * @var int|null
     *
     * @ORM\Column(name="imap_uid", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $imapUid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="msgno", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $msgno;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="recent", type="boolean", nullable=true)
     */
    private $recent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="flagged", type="boolean", nullable=true)
     */
    private $flagged;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="answered", type="boolean", nullable=true)
     */
    private $answered;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="seen", type="boolean", nullable=true)
     */
    private $seen;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="draft", type="boolean", nullable=true)
     */
    private $draft;


}
