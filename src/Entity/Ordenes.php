<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenes
 *
 * @ORM\Table(name="ordenes")
 * @ORM\Entity
 */
class Ordenes
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
     * @ORM\Column(name="fecha_de_entrega", type="datetime", nullable=true)
     */
    private $fechaDeEntrega;

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
     * @ORM\Column(name="colores_aprobados", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $coloresAprobados = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="igual_al_arte_adjuntado", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $igualAlArteAdjuntado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="igual_al_codigo_pantones", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $igualAlCodigoPantones = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="presentar_muestra_de_color", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $presentarMuestraDeColor = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="graficas_aprobadas", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $graficasAprobadas = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_de_pago", type="string", length=255, nullable=true)
     */
    private $formaDePago;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=true, options={"default"="D","fixed"=true})
     */
    private $moneda = 'D';

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmar_medidas", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $confirmarMedidas = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="incluye_igv", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $incluyeIgv = '0';


}
