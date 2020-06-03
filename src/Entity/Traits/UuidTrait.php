<?php

namespace App\Entity\Traits;

use Ramsey\Uuid\UuidInterface;

/**
 * Trait UuidTrait
 *
 * The {@see $uuid} must be setup on __construct(), see example usage:
 *
 * <code>
 * class Example
 * {
 *     use UuidTrait;
 *
 *     public function __construct()
 *     {
 *         $this->uuid = Uuid::uuid4();
 *     }
 * }
 * </code>
 */
trait UuidTrait
{
    /**
     * UUID.
     *
     * @var UuidInterface|null
     *
     * @ORM\Column(name="uuid", type="uuid", unique=true)
     */
    protected $uuid;

    /**
     * Returns the UUID.
     *
     * @return UuidInterface|null
     */
    public function getUuid(): ?UuidInterface
    {
        return $this->uuid;
    }
}
