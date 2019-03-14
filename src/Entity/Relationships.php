<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationships
 *
 * @ORM\Table(name="relationships", indexes={@ORM\Index(name="idx_rel_name", columns={"relationship_name"})})
 * @ORM\Entity
 */
class Relationships
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
     * @ORM\Column(name="relationship_name", type="string", length=150, nullable=false)
     */
    private $relationshipName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lhs_module", type="string", length=100, nullable=false)
     */
    private $lhsModule = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lhs_table", type="string", length=64, nullable=false)
     */
    private $lhsTable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lhs_key", type="string", length=64, nullable=false)
     */
    private $lhsKey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rhs_module", type="string", length=100, nullable=false)
     */
    private $rhsModule = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rhs_table", type="string", length=64, nullable=false)
     */
    private $rhsTable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rhs_key", type="string", length=64, nullable=false)
     */
    private $rhsKey = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="join_table", type="string", length=64, nullable=true)
     */
    private $joinTable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="join_key_lhs", type="string", length=64, nullable=true)
     */
    private $joinKeyLhs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="join_key_rhs", type="string", length=64, nullable=true)
     */
    private $joinKeyRhs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="relationship_type", type="string", length=64, nullable=true)
     */
    private $relationshipType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="relationship_role_column", type="string", length=64, nullable=true)
     */
    private $relationshipRoleColumn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="relationship_role_column_value", type="string", length=50, nullable=true)
     */
    private $relationshipRoleColumnValue;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reverse", type="boolean", nullable=true)
     */
    private $reverse = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
