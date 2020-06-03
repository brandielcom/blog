<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Traits\SluggableTrait;
use App\Entity\Traits\SoftDeleteableTrait;
use App\Entity\Traits\TimestampableImmutableTrait;
use App\Entity\Traits\UuidTrait;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    use TimestampableImmutableTrait;
    use SoftDeleteableTrait;
    use UuidTrait;
    use SluggableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    public function __construct()
    {
        $this->uuid = Uuid::uuid4();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }
}
