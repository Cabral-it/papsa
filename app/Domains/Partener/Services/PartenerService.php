<?php

namespace App\Domains\Partener\Services;

use App\Services\BaseService;
use Illuminate\Support\Facades\Storage;
use App\Domains\Partener\Model\Partener;

class PartenerService extends BaseService
{
    /**
     * PartenerService constructor.
     *
     * @param  Partener  $partener
     */
    public function __construct(Partener $partener)
    {
        $this->model = $partener;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function lastParteners(int $limit)
    {
        return $this->model->limit($limit);
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update(array $data, Partener $partener)
    {
        return $partener->update($data);
    }

    public function delete(Partener $partener)
    {
        Storage::disk('public')->delete($partener->logo);
        return $partener->delete();
    }

}

