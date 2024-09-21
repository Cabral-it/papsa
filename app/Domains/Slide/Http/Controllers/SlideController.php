<?php

namespace App\Domains\Slide\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Slide\Model\Slide;
use Illuminate\Support\Facades\Storage;
use App\Domains\Slide\Services\SlideService;


class SlideController extends Controller
{

    public function update(Request $request, Slide $slide, SlideService $slideService)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png,gif',
            'description' => 'required',
        ]);

        $data = [
            'description' => $request->description,
        ];

        if ($request->file('image')) {
            $path = $request->file('image')->store('slides', 'public');
            $data['image'] = $path;
            Storage::disk('public')->delete($slide->image);
        }
        $slideService->update($data, $slide);

        return redirect()->route('admin.dashboard')->with(['flash_success' => 'Slide modifié avec success']);
    }

    public function enable(Slide $slide, SlideService $slideService)
    {
        if($slide->id) $slideService->enable($slide);
        return redirect()->route('admin.dashboard')->with(['flash_success' => 'Slide Activé']);
    }

    public function disable(Slide $slide, SlideService $slideService)
    {
        if($slide->id) $slideService->disable($slide);
        return redirect()->route('admin.dashboard')->with(['flash_success' => 'Slide désactivé']);
    }

}
