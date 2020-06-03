<?php

declare(strict_types=1);

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Behaviour;

trait SluggableTrait
{

    /**
     * @var string
     *
     * @Behaviour\Slug(fields={"title"})
     * @ORM\Column(name="slug", type="string", length=256, unique=true)
     */
    protected $slug;

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
}
