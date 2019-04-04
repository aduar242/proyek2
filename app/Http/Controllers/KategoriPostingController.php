<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPosting;

class KategoriPostingController extends Controller
{
    public function index()
    {
        $kategoripostings = KategoriPosting::orderBy('created_at', 'DESC')->paginate(10);
        return view('kategoripostings.index', compact('kategoripostings'));
    }

    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'nullable|string'
        ]);

        try {
            $kategoripostings = KategoriPosting::firstOrCreate([
                'name' => $request->name
            ], [
                'description' => $request->description
            ]);
            return redirect()->back()->with(['success' => 'Kategori: ' . $kategoripostings->name . ' Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $kategoripostings = KategoriPosting::findOrFail($id);
        $kategoripostings->delete();
        return redirect()->back()->with(['success' => 'Kategori: ' . $kategoripostings->name . ' Telah Dihapus']);
    }

    public function edit($id)
    {
        $kategoripostings = KategoriPosting::findOrFail($id);
        return view('kategoripostings.edit', compact('kategoripostings'));
    }

    public function update(Request $request, $id)
    {
        //validasi form
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'nullable|string'
        ]);

        try {
            $kategoripostings = KategoriPosting::findOrFail($id);
            $kategoripostings->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
            return redirect(route('kategoriposting.index'))->with(['success' => 'Kategori Posting : ' . $kategoripostings->name . ' Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
