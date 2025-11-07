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

            // Handle checkboxes - if not present, set to '0'
            $checkboxFields = ['email_order_enabled', 'telegram_order_enabled', 'google_distance_matrix_enabled'];
            foreach ($checkboxFields as $field) {
                if (!isset($data[$field])) {
                    $data[$field] = '0';
                } else {
                    $data[$field] = $data[$field] == '1' ? '1' : '0';
                }
            }

            foreach ($data as $key => $value) {
                if ($key == 'logo') {
                    if ($value instanceof UploadedFile) {
                        $value = $this->saveFile($value, 'config');
                    } else {
                        continue;
                    }
                }

                // Convert boolean values to string for storage
                if (is_bool($value)) {
                    $value = $value ? '1' : '0';
                }

                Config::updateOrCreate(['key' => $key], ['value' => $value]);
            }

            return true;
        });
    }
}
