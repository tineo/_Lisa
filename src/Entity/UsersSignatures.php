<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersSignatures
 *
 * @ORM\Table(name="users_signatures", indexes={@ORM\Index(name="idx_usersig_uid", columns={"user_id"})})
 * @ORM\Entity
 */
class UsersSignatures
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateEntered = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModified = '0000-00-00 00:00:00';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature", type="text", length=65535, nullable=true)
     */
    private $signature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature_html", type="text", length=65535, nullable=true)
     */
    private $signatureHtml;


}
