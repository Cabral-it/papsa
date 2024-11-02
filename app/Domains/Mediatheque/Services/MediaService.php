<?php

namespace App\Domains\Mediatheque\Services;

use Illuminate\Support\Str;
use App\Services\BaseService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Domains\Mediatheque\Model\Media;

class MediaService extends BaseService
{
    /**
     * MediaService constructor.
     *
     * @param  Media  $media
     */
    public function __construct(Media $media)
    {
        $this->model = $media;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function published()
    {
        return $this->model::orderBy('created_at', 'DESC')->where('publish', true);
    }

    public function lastMedias(int $limit)
    {
        return $this->published()->limit($limit);
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update(array $data, Media $media)
    {
        return $media->update($data);
    }

    public function delete(Media $media)
    {
        Storage::disk('public')->delete($media->file);
        return $media->delete();
    }

    public function uploadMedia(UploadedFile $file, String $type, String $title)
    {
        return $file->storeAs(
            'medias/'. $type,
            Str::slug($title) .'.'. $file->extension(),
            'public'
        );
    }

    public function download(Media $media)
    {
        $path = public_path() .'/storage/' . $media->file;
        return response()->download($path);
    }

    public function togglePublish(Media $media)
    {
        return $media->update(['publish' => ! $media->publish]);
    }

    public function documents()
    {
        return $this->published()->where('type', Media::TYPE_DOCUMENT);
    }

    public function images()
    {
        return $this->published()->where('type', Media::TYPE_IMAGE);
    }

    public function videos()
    {
        return $this->published()->where('type', Media::TYPE_VIDEO);
    }
}

