<?php

namespace Laposte\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;

/**
 * Comment
 *
 * @ORM\Table(name="laposte_comment")
 * @ORM\Entity(repositoryClass="Laposte\CommentBundle\Entity\CommentRepository")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="Laposte\CommentBundle\Entity\Thread")
     */
    protected $thread;
}