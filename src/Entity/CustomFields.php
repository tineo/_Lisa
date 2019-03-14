<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFields
 *
 * @ORM\Table(name="custom_fields", indexes={@ORM\Index(name="idx_beanid_set_num", columns={"bean_id", "set_num"})})
 * @ORM\Entity
 */
class CustomFields
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=true)
     * @ORM\Id
     */
    private $beanId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_num", type="integer", nullable=true)
     */
    private $setNum = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="field0", type="string", length=255, nullable=true)
     */
    private $field0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field1", type="string", length=255, nullable=true)
     */
    private $field1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field2", type="string", length=255, nullable=true)
     */
    private $field2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field3", type="string", length=255, nullable=true)
     */
    private $field3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field4", type="string", length=255, nullable=true)
     */
    private $field4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field5", type="string", length=255, nullable=true)
     */
    private $field5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field6", type="string", length=255, nullable=true)
     */
    private $field6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field7", type="string", length=255, nullable=true)
     */
    private $field7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field8", type="string", length=255, nullable=true)
     */
    private $field8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field9", type="string", length=255, nullable=true)
     */
    private $field9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
