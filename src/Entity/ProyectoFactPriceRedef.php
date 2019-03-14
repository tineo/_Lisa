<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoFactPriceRedef
 *
 * @ORM\Table(name="proyecto_fact_price_redef")
 * @ORM\Entity
 */
class ProyectoFactPriceRedef
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="old_monto", type="float", precision=10, scale=2, nullable=true)
     */
    private $oldMonto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="new_monto", type="float", precision=10, scale=2, nullable=true)
     */
    private $newMonto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivo", type="text", length=65535, nullable=true)
     */
    private $motivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auth_exec", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $authExec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auth_fact", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $authFact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    private $updatedOn;


}
