<?php

namespace App\Domains\Slide\Services;

use App\Services\BaseService;
use App\Domains\Slide\Model\Slide;
use Illuminate\Support\Facades\Storage;

class SlideService extends BaseService
{
    /**
     * SlideService constructor.
     *
     * @param  Slide  $lide
     */
    public function __construct(Slide $lide)
    {
        $this->model = $lide;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function published()
    {
        return $this->model::where('status', true);
    }

    public function update(array $data, Slide $slide)
    {
        return $slide->update($data);
    }

    public function enable(Slide $slide)
    {
        return $slide->update(['status' => true]);
    }

    public function disable(Slide $slide)
    {
        return $slide->update(['status' => false]);
    }
}

