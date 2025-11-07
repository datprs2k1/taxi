<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Config\ConfigUpdateRequest;
use App\Models\Config;
use App\Services\Config\ConfigService;

class ConfigController extends Controller
{
    protected $configService;

    public function __construct(ConfigService $configService)
    {
        $this->configService = $configService;
    }

    public function index()
    {
        $config = Config::get();

        return view('pages.admin.config', compact('config'));
    }

    public function update(ConfigUpdateRequest $request)
    {
        try {
            $this->configService->update($request);
            return redirect()->route('admin.config.index')->with('success', 'Cập nhật cấu hình thành công!');
        } catch (\Exception $e) {
            return redirect()->route('admin.config.index')
                ->with('error', 'Có lỗi xảy ra khi cập nhật: ' . $e->getMessage())
                ->withInput();
        }
    }
}
