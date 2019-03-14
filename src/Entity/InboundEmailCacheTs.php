<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InboundEmailCacheTs
 *
 * @ORM\Table(name="inbound_email_cache_ts")
 * @ORM\Entity
 */
class InboundEmailCacheTs
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ie_timestamp", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ieTimestamp;


}
