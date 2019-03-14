<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoldersSubscriptions
 *
 * @ORM\Table(name="folders_subscriptions", indexes={@ORM\Index(name="idx_folder_id_assigned_user_id", columns={"folder_id", "assigned_user_id"})})
 * @ORM\Entity
 */
class FoldersSubscriptions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="folder_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $folderId;

    /**
     * @var string
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $assignedUserId;


}
