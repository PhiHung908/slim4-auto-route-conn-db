<?php

declare(strict_types=1);

namespace App\Domain\User;

interface UserRepositoryInterface
{	
    /**
     * @return User[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     */
    public function findById(int $id): User;
}
