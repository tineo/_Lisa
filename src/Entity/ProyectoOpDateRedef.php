<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoOpDateRedef
 *
 * @ORM\Table(name="proyecto_op_date_redef")
 * @ORM\Entity
 */
class ProyectoOpDateRedef
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="nueva_fecha", type="datetime", nullable=true)
     */
    private $nuevaFecha;

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
     * @ORM\Column(name="auth_op", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $authOp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="auth_exec_date", type="datetime", nullable=true)
     */
    private $authExecDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="auth_op_date", type="datetime", nullable=true)
     */
    private $authOpDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="modified_on", type="datetime", nullable=true)
     */
    private $modifiedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="propuesto_por", type="string", length=36, nullable=true)
     */
    private $propuestoPor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="propuesto_por_area", type="string", length=2, nullable=true, options={"fixed"=true})
     */
    private $propuestoPorArea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solicitado_por", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $solicitadoPor;


}
