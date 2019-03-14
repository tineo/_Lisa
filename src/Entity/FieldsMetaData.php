<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldsMetaData
 *
 * @ORM\Table(name="fields_meta_data", indexes={@ORM\Index(name="idx_meta_id_del", columns={"id", "deleted"})})
 * @ORM\Entity
 */
class FieldsMetaData
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vname", type="string", length=255, nullable=true)
     */
    private $vname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true)
     */
    private $comments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help", type="string", length=255, nullable=true)
     */
    private $help;

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_module", type="string", length=255, nullable=true)
     */
    private $customModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="len", type="integer", nullable=true)
     */
    private $len;

    /**
     * @var string|null
     *
     * @ORM\Column(name="required", type="string", length=255, nullable=true)
     */
    private $required;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_value", type="string", length=255, nullable=true)
     */
    private $defaultValue;

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

    /**
     * @var bool|null
     *
     * @ORM\Column(name="audited", type="boolean", nullable=true)
     */
    private $audited = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="massupdate", type="boolean", nullable=true)
     */
    private $massupdate = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="duplicate_merge", type="smallint", nullable=true)
     */
    private $duplicateMerge = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reportable", type="boolean", nullable=true, options={"default"="1"})
     */
    private $reportable = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext1", type="string", length=255, nullable=true)
     */
    private $ext1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext2", type="string", length=255, nullable=true)
     */
    private $ext2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext3", type="string", length=255, nullable=true)
     */
    private $ext3 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext4", type="text", length=65535, nullable=true)
     */
    private $ext4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="importable", type="string", length=255, nullable=true)
     */
    private $importable;


}
