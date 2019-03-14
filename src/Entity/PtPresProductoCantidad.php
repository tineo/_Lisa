<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresProductoCantidad
 *
 * @ORM\Table(name="pt_pres_producto_cantidad")
 * @ORM\Entity
 */
class PtPresProductoCantidad
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pres", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPres;

    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProducto;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $cantidad = '1';

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
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deleted = '0';


}
