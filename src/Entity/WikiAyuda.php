<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WikiAyuda
 *
 * @ORM\Table(name="wiki_ayuda")
 * @ORM\Entity
 */
class WikiAyuda
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=150, nullable=false)
     */
    private $titulo = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenido", type="text", length=0, nullable=true)
     */
    private $contenido;

    /**
     * @var int
     *
     * @ORM\Column(name="modify_user", type="integer", nullable=false)
     */
    private $modifyUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modify_date", type="datetime", nullable=false)
     */
    private $modifyDate;


}
