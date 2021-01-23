<?php

declare(strict_types=1);

namespace Medine\ERP\Users\Domain;

interface UserRepository
{
    public function save(User $user): void;
}