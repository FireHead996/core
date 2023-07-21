<?php

namespace FireHead996\Core\Persistence;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Rfc4122\UuidInterface;

abstract class Entity implements EntityInterface
{
    private ?UuidInterface $id;

    public function getId(): ?UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface|string|null $id): void
    {
        if ($id === null) {
            $this->id = null;
        } elseif ($id instanceof UuidInterface) {
            $this->id = $id;
        } else {
            $this->id = Uuid::fromString($id);
        }
    }
    
    public function generateNewId(): void
    {
        $this->setId(Uuid::uuid4());
    }

    public function getIdAsString(): string
    {
        return $this->getId()->toString() ?? '';
    }

    public function setStringId(string $id): void
    {
        $this->id = Uuid::fromString($id);
    }
}