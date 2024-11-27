<?php


namespace App\Domains\Partener\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Partener\Model\Partener;
use App\Domains\Partener\Services\PartenerService;


class PartenerController extends Controller {

    public function index(PartenerService $partenerService)
    {
        $parteners = $partenerService->all();
        return view('backend.parteners', compact('parteners'));
    }

    public function store(Request $request, PartenerService $partenerService)
    {
        $this->validate($request, [
            'libele' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $path = $request->file('logo')->store('parteners', 'public');

        $data = [
            'libele' => $request->libele,
            'logo' => $path,
        ];

        $partenerService->create($data);

        return redirect()->route('admin.section.partener.index')->with(['flash_success' => 'Le partenaire a bien été enregistré']);
    }

    public function delete(Request $request, Partener $partener, PartenerService $partenerService)
    {
        if($partener->id) $partenerService->delete($partener);
        return redirect()->route('admin.section.partener.index')->with(['flash_success' => 'Le partenaire a bien été supprimé']);
    }

}
