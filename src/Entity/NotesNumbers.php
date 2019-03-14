<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotesNumbers
 *
 * @ORM\Table(name="notes_numbers")
 * @ORM\Entity
 */
class NotesNumbers
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
     * @ORM\Column(name="numero", type="bigint", nullable=false)
     */
    private $numero;

    /**
     * @var int|null
     *
     * @ORM\Column(name="empresa", type="integer", nullable=true)
     */
    private $empresa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $tipo;


}
