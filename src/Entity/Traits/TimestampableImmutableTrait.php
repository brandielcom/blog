<?php

declare(strict_types=1);

namespace App\Entity\Traits;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Behaviour;

/**
 * Timestampable Trait.
 *
 * Adds immutable created at & updated at fields.
 */
trait TimestampableImmutableTrait
{
    /**
     * Date the entity was created.
     *
     * @var DateTimeImmutable|null
     *
     * @Behaviour\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime_immutable")
     */
    protected $createdAt;

    /**
     * Date the entity was updated at.
     *
     * @var DateTimeImmutable|null
     *
     * @Behaviour\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime_immutable")
     */
    protected $updatedAt;

    /**
     * Returns the date the entity was created at.
     *
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * Sets the date the entity was created at.
     *
     * @param DateTimeImmutable $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Returns the date the entity was updated at.
     *
     * @return DateTimeImmutable
     */
    public function getUpdatedAt(): ?DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * Sets the date the entity was updated at.
     *
     * @param DateTimeImmutable $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
