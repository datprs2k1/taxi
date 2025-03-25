<?php

namespace App\Repositories\Config;

use App\Models\Config;
use App\Repositories\_Abstract\BaseRepository;

class ConfigRepository extends BaseRepository implements IConfigRepository
{
    public function model(): string
    {
        return Config::class;
    }
}
