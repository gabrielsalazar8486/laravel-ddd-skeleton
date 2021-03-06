<?php

declare(strict_types=1);


namespace Medine\ERP\Company\Application;


final class CompanyUpdaterRequest
{

    private $id;
    private $name;
    private $address;
    private $state;
    private $logo;

    public function __construct(
        string $id,
        string $name,
        string $address,
        string $state,
        string $logo
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->state = $state;
        $this->logo = $logo;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function address(): string
    {
        return $this->address;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function logo(): string
    {
        return $this->logo;
    }
}
