<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currencies
 *
 * @ORM\Table(name="currencies", indexes={@ORM\Index(name="idx_currency_name", columns={"name", "deleted"})})
 * @ORM\Entity
 */
class Currencies
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=36, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=36, nullable=false)
     */
    private $symbol = '';

    /**
     * @var string
     *
     * @ORM\Column(name="iso4217", type="string", length=3, nullable=false)
     */
    private $iso4217 = '';

    /**
     * @var float
     *
     * @ORM\Column(name="conversion_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $conversionRate = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

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
     * @ORM\Column(name="created_by", type="string", length=36, nullable=false)
     */
    private $createdBy = '';


}
