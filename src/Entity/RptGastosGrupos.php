<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RptGastosGrupos
 *
 * @ORM\Table(name="rpt_gastos_grupos")
 * @ORM\Entity
 */
class RptGastosGrupos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false, options={"default"="GRUPO"})
     */
    private $tipo = 'GRUPO';

    /**
     * @var int
     *
     * @ORM\Column(name="lista_manual", type="integer", nullable=false)
     */
    private $listaManual = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=false)
     */
    private $fSistema;


}
