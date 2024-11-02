<?php

namespace App\Domains\Mediatheque\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Domains\Mediatheque\Model\Media;
use App\Domains\Mediatheque\Services\MediaService;

class MediaController extends Controller
{
    public function index(MediaService $mediaService)
    {
        $medias = $mediaService->orderBy('created_at', 'DESC')->paginate(10);

        return view('backend.medias.index', compact('medias'));
    }

    public function store(Request $request, MediaService $mediaService)
    {
        $this->validate($request, [
            'title' => 'required|unique:medias|max:255',
            'type' => ['required', Rule::in([Media::TYPE_DOCUMENT, Media::TYPE_IMAGE, Media::TYPE_VIDEO])],
        ]);
        // Validate Document
        if ($request->type == Media::TYPE_DOCUMENT) {
            $this->validate($request, ['file' => 'required|mimes:pdf']);
        }elseif ($request->type == Media::TYPE_IMAGE) {
            $this->validate($request, ['file' => 'required|image|mimes:jpeg,jpg,png,gif']);
        }elseif ($request->type == Media::TYPE_VIDEO) {
            $this->validate($request, ['file' => 'required|image|mmimetypes:video/avi,video/mpeg,video/quicktime']);
        }

        $path = $mediaService->uploadMedia($request->file('file'), $request->type, $request->title);
        $data = [
            'type' => $request->type,
            'title' => $request->title,
            'file' => $path,
            'publish' => $request->publish ? true : false
        ];
        $mediaService->create($data);
        # NewsLetter
        # code...

        return redirect()->route('admin.media.index')->with(['flash_success' => "Le media a bien été enregistré"]);
    }

    public function download(Media $media, MediaService $mediaService)
    {
        return $mediaService->download($media);
    }

    public function publish(Media $media, MediaService $mediaService)
    {
        $mediaService->togglePublish($media);
        $msg = $media->refresh()->publish ? 'publié' : 'caché';

        return redirect()->route('admin.media.index')->with(['flash_success' => "Le media est $msg avec success"]);
    }

    public function delete(Request $request, Media $media, MediaService $mediaService)
    {
        if($media->id) $mediaService->delete($media);

        return redirect()->route('admin.media.index')->with(['flash_success' => 'Le media a bien été supprimé']);
    }

}
