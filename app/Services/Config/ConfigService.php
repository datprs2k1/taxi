<?php

namespace App\Services\Config;

use App\Http\Requests\Config\ConfigUpdateRequest;
use App\Models\Config;
use App\Repositories\Config\IConfigRepository;
use App\Services\_Abstract\BaseService;
use Illuminate\Http\UploadedFile;
use App\Services\_Trait\SaveFileTrait;

class ConfigService extends BaseService
{
    use SaveFileTrait;
    public function __construct(IConfigRepository $configRepository)
    {
        $this->mainRepository = $configRepository;
    }

    public function list()
    {
        return DbTransactions()->addCallbackJson(function () {
            $entries = $this->mainRepository->all();
            return $entries;
        });
    }

    public function update(ConfigUpdateRequest $request)
    {
        return DbTransactions()->addCallback(function () use ($request) {
            $data = $request->fillData();

            foreach ($data as $key => $value) {
                if ($key == 'logo') {
                    if ($value instanceof UploadedFile) {
                        $value = $this->saveFile($value, 'config');
                    } else {
                        continue;
                    }
                }

                Config::updateOrCreate(['key' => $key], ['value' => $value]);
            }

            return true;
        });
    }
}
