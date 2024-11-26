<?php

namespace App\Http\Controllers\BlogSystem;

use App\Models\BlogTag;
use App\Models\BlogPost;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class PostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::paginate(10); // Paginierung
        return view('backend.livewirepages.blogmanager.index', compact('posts'));
    }

    public function create()
    {
        $categories = BlogCategory::all(); // Kategorien laden
        $tags = BlogTag::all(); // Tags laden
        return view('backend.livewirepages.blogmanager.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_title' => 'nullable|string|max:100',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'category' => 'required|string|max:255',
            'tags' => 'nullable|string', // Tags als kommagetrennte Zeichenkette
            'approval_status' => 'required|in:approved,limited,rejected',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        // Kategorie erstellen oder abrufen
        $category = BlogCategory::firstOrCreate(
            ['name' => $validated['category']],
            ['slug' => Str::slug($validated['category'])]
        );

        $post = new BlogPost();
        $post->title = $validated['title'];
        $post->short_title = $validated['short_title'];
        $post->content = $validated['content'];
        $post->category_id = $category->id;
        $post->approval_status = $validated['approval_status'];
        $post->start_date = $validated['start_date'];
        $post->end_date = $validated['end_date'];
        $post->save();

        // Bild speichern und verarbeiten
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $post->image_small = $this->storeImage($imageFile, 615, 405, '_small');
            $post->image_large = $this->storeImage($imageFile, 840, 473, '_large');
            $post->image_thumbnail = $this->storeImage($imageFile, 110, 74, '_thumb');
            $post->image_grid = $this->storeImage($imageFile, 410, 231, '_grid');
            $post->save();
        }

        // Tags verarbeiten und speichern
        if ($request->filled('tags')) {
            $tags = explode(',', $validated['tags']); // Tags als kommagetrennte Liste verarbeiten
            $tagIds = collect($tags)->map(function ($tag) {
                return BlogTag::firstOrCreate(
                    ['name' => trim($tag)],
                    ['slug' => Str::slug(trim($tag))]
                )->id;
            });
            $post->tags()->sync($tagIds);
        }

        return redirect()->route('blog-manager.index')->with('success', 'Beitrag erfolgreich erstellt!');
    }


    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        $categories = BlogCategory::all();
        $tags = BlogTag::all();
        return view('backend.livewirepages.blogmanager.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        // Daten validieren
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_title' => 'nullable|string|max:500',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'approval_status' => 'required|in:approved,limited,rejected',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'category' => 'required|string|max:255', // Kategorie als Name
            'tags' => 'nullable|string', // Tags als kommagetrennte Liste
        ]);

        // BlogPost finden und Daten aktualisieren
        $post = BlogPost::findOrFail($id);
        $post->fill($validated);

        // Kategorie erstellen oder abrufen und die category_id setzen
        $category = BlogCategory::firstOrCreate(
            ['name' => $validated['category']],
            ['slug' => Str::slug($validated['category'])]
        );
        $post->category_id = $category->id;

        // Bild aktualisieren, falls hochgeladen
        if ($request->hasFile('image')) {
            $this->deleteOldImages($post);
            $imageFile = $request->file('image');
            $post->image_small = $this->storeImage($imageFile, 615, 405, '_small');
            $post->image_large = $this->storeImage($imageFile, 840, 473, '_large');
            $post->image_thumbnail = $this->storeImage($imageFile, 110, 74, '_thumb');
            $post->image_grid = $this->storeImage($imageFile, 410, 231, '_grid');
        }

        $post->save();

        // Tags verarbeiten und aktualisieren
        if ($request->filled('tags')) {
            $tags = explode(',', $validated['tags']); // Tags in ein Array umwandeln
            $tagIds = collect($tags)->map(function ($tag) {
                return BlogTag::firstOrCreate(
                    ['name' => trim($tag)],
                    ['slug' => Str::slug(trim($tag))]
                )->id;
            });
            $post->tags()->sync($tagIds); // Tags aktualisieren
        } else {
            $post->tags()->detach(); // Alle Tags entfernen, wenn keine angegeben
        }

        return redirect()->route('blog-manager.index')->with('success', 'Beitrag erfolgreich aktualisiert!');
    }



    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        $this->deleteOldImages($post);
        $post->delete();

        return redirect()->route('blog-manager.index')->with('success', 'Beitrag erfolgreich gelöscht!');
    }

    private function storeImage($imageFile, $width, $height, $suffix)
    {
        $image = Image::read($imageFile->getRealPath())
            ->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

        $filename = time() . $suffix . '.' . $imageFile->getClientOriginalExtension();
        $path = 'public/posts/' . $filename;
        Storage::put($path, (string) $image->encode());

        return $path;
    }


    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
       // dd($post);
        return view('rentalobj.pageslivewire.blogmanager._blog-details-manager', compact('post'));
    }

    public function showGrid($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
       // dd($post);
        return view('backend.livewirepages.blogmanager._blog-details-manager', compact('post'));
    }


    private function deleteOldImages($post)
    {
        if ($post->image_small) Storage::delete($post->image_small);
        if ($post->image_large) Storage::delete($post->image_large);
    }
}
