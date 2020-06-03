<?php

declare(strict_types=1);

namespace App\Entity\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * SoftDeleteable Trait
 *
 * Installation: Add the {@see \Gedmo\Mapping\Annotation\SoftDeleteable}
 * annotation to the entity using this trait.
 */
trait SoftDeleteableTrait
{
    /**
     * Date the entity was deleted.
     *
     * @var DateTime|null
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    protected $deletedAt;

    /**
     * Returns the date the entity was deleted.
     *
     * @return DateTime
     */
    public function getDeletedAt(): ?DateTime
    {
        return $this->deletedAt;
    }

    /**
     * Sets the date the entity was deleted.
     *
     * @param DateTime|null $deletedAt
     *
     * @return $this
     */
    public function setDeletedAt(DateTime $deletedAt = null): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Checks if the entity has been deleted.
     *
     * @return bool
     */
    public function isDeleted(): bool
    {
        return null !== $this->deletedAt;
    }
}
