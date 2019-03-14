<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPres
 *
 * @ORM\Table(name="pt_pres")
 * @ORM\Entity
 */
class PtPres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pres", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPres;

    /**
     * @var int
     *
     * @ORM\Column(name="id_proyecto", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_cambio", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $tipoCambio;

    /**
     * @var string
     *
     * @ORM\Column(name="imprevistos", type="decimal", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $imprevistos = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="depre_maq", type="decimal", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $depreMaq = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="gastos_finan", type="decimal", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $gastosFinan = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="margen", type="decimal", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $margen = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_creacion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecCreacion = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fec_modificacion", type="datetime", nullable=true)
     */
    private $fecModificacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';


}
