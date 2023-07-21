<?php

declare(strict_types=1);

namespace FireHead996\Core\Persistence;

use Ramsey\Uuid\Rfc4122\UuidInterface;

interface EntityInterface
{
    public function getId(): UuidInterface;
    
    public function setId(UuidInterface $id): void;
    
    public function generateNewId(): void;
    
    public function getIdAsString(): string;
    
    public function setStringId(string $id): void;
}