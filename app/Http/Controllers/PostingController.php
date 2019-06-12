<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPosting;
use App\Posting;
use App\User;
use File;
use Image;

class PostingController extends Controller
{
    public function index()
    {
        $hitungposting = Posting::count();
        $postings = Posting::with('kategoriposting')->orderBy('created_at', 'DESC')->paginate(3);
        return view('postings.index', compact('postings','hitungposting'));
    }

     public function web()
    {
        $hitungposting = Posting::count();
        $posting = Posting::with('kategoriposting')->orderBy('created_at', 'DESC')->paginate(3);
        return view('postings.kegiatan',compact('posting','hitungposting'));
    }

    public function kaki($id)
    {
        $hitungposting = Posting::count();
        return view('postings.grup.kaki', compact('hitungposting'));    
    }

    public function show($id)
    {
        $munculinsemua = Posting::all();
        $hitungposting = Posting::count();
        $posting = Posting::find($id);

        //Untuk prev single posting
        $prev = Posting::where('id', '<', $posting->id)
        ->orderBy('id', 'DESC')
        ->first();
        //Untuk next single posting
        $next = Posting::where('id', '>', $posting->id)
        ->orderBy('id', 'ASC')
        ->first();

        return view('postings.single', compact('hitungposting','posting','munculinsemua','next','prev'));    
    }

    public function create()
    {
        $kategoripostings = KategoriPosting::orderBy('name', 'ASC')->get();
        return view('postings.create', compact('kategoripostings'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:4000',
            'kategoriposting_id' => 'required|exists:kategori_postings,id',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        try {
            $photo = null;
            if ($request->hasFile('photo')) {
                $photo = $this->saveFile($request->name, $request->file('photo'));
            }

            $posting = Posting::create([
                'name' => $request->name,
                'description' => $request->description,
                'kategoriposting_id' => $request->kategoriposting_id,
                'photo' => $photo
            ]);
            return redirect(route('posting.index'))
                ->with(['success' => '<strong>' . $posting->name . '</strong> Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    private function saveFile($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/posting');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        } 
        Image::make($photo)->save($path . '/' . $images);
        return $images;
    }

    public function destroy($id)
    {
        $postings = Posting::findOrFail($id);
        if (!empty($postings->photo)) {
            File::delete(public_path('uploads/posting/' . $postings->photo));
        }
        $postings->delete();
        return redirect()->back()->with(['success' => '<strong>' . $postings->name . '</strong> Telah Dihapus!']);
    }

    public function edit($id)
    {
        $posting = Posting::findOrFail($id);
        $kategoripostings = KategoriPosting::orderBy('name', 'ASC')->get();
        return view('postings.edit', compact('posting', 'kategoripostings'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:4000',
            'kategoriposting_id' => 'required|exists:kategori_postings,id',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        try {
            $posting = Posting::findOrFail($id);
            $photo = $posting->photo;

            if ($request->hasFile('photo')) {
                !empty($photo) ? File::delete(public_path('uploads/posting/' . $photo)):null;
                $photo = $this->saveFile($request->name, $request->file('photo'));
            }

            $posting->update([
                'name' => $request->name,
                'description' => $request->description,
                'kategoriposting_id' => $request->kategoriposting_id,
                'photo' => $photo
            ]);

            return redirect(route('posting.index'))
                ->with(['success' => '<strong>' . $posting->name . '</strong> Diperbaharui']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }
}
