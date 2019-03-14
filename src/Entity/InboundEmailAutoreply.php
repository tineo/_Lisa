<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InboundEmailAutoreply
 *
 * @ORM\Table(name="inbound_email_autoreply", indexes={@ORM\Index(name="idx_ie_autoreplied_to", columns={"autoreplied_to"})})
 * @ORM\Entity
 */
class InboundEmailAutoreply
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
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

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
     * @var string
     *
     * @ORM\Column(name="autoreplied_to", type="string", length=100, nullable=false)
     */
    private $autorepliedTo = '';


}
