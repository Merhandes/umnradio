<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Http\Requests\Request;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostAccess;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('Post.index', ['posts' => $posts]);
    }

    public function index_home()
    {
        //
        $posts = Post::all();
        return view('Home.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'author' => 'required|max:255',
            'editor' => 'max:255',
            'post_content' => 'required',
            'cover_photo' => 'required|image|file|max:20480'
        ]);

        $string = strip_tags(str_replace('><', '> <', $request->post_content));
        $str = Str::limit($string, 100, '...');
        $stringClean = preg_replace('/\s\s+/', ' ', $str);

        $validData['excerpt'] = Str::limit(strip_tags($stringClean), 100, '...');
        $validData['published'] = now()->toFormattedDayDateString();
        $validData['category'] = strtoupper($request->category);

        if ($request->file('cover_photo')) {
            $validData['cover_photo'] = $request->file('cover_photo')->storePublicly('cover_images', 'public');
        }

        $post = Post::create($validData);

        $user = Auth::user();
        PostAccess::create([
            'post_id' => $post->id,
            'user_id' => $user->id,
            'action' => 'create'
        ]);

        // Post::create([
        //     'title'=>$request->title,
        //     'slug'=>$request->slug,
        //     'author'=>$request->author,
        //     'excerpt'=>Str::limit(strip_tags($request->body), 100, '...'), //belom bisa
        //     'post_content'=>$request->post_content, //belom save image
        //     'title'=>$request->title,
        //     'cover_photo'=>$request->file('cover_photo')->storePublicly('cover_images', 'public')
        // ]);

        return redirect('/posts')->with('success', "Article published");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        $articles = Post::latest()->where('id', '!=', $post->id)->take(5)->get();
        return view('Post.show', ['post' => $post, 'articles' => $articles]);
    }

    public function showApi(Request $request)
    {
        try {$posts = Post::paginate(10);
            return PostResource::collection($posts);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }

    public function showByIdApi($id)
    {
        try {
            if (!is_numeric($id)) {
                return response()->json(['error' => 'Invalid ID. ID must be a number.'], 400);
            }
            $post = Post::findOrFail($id);

            return new PostResource($post);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Post not found.'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        // $post = Post::findOrFail($slug);
        return view('Post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            // 'slug' => 'required|max:255|unique:posts',
            'author' => 'required|max:255',
            'editor' => 'max:255',
            'post_content' => 'required',
            // 'cover_photo' => 'required|image|file|max:20480'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validData = $request->validate($rules);



        $string = strip_tags(str_replace('<', ' <', $request->post_content));
        $str = Str::limit($string, 100, '...');
        $stringClean = preg_replace('/\s\s+/', ' ', $str);

        $validData['excerpt'] = $stringClean;
        $validData['category'] = strtoupper($request->category);

        // if ($request->file('cover_photo')) {
        //     $validData['cover_photo'] = $request->file('cover_photo')->storePublicly('cover_images', 'public');
        // }

        if ($request->file('cover_photo')) {
            if ($request->old_cover_photo) {
                Storage::delete($request->old_cover_photo);
            }
            $validData['cover_photo'] = $request->file('cover_photo')->storePublicly('cover_images', 'public');
        }

        Post::where('id', $post->id)->update($validData);

        $user = Auth::user();
        PostAccess::create([
            'post_id' => $post->id,
            'user_id' => $user->id,
            'action' => 'update'
        ]);

        return redirect('/posts')->with('success', "Article updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        // $post = Post::find($slug);
        $post->delete();
        return redirect('/posts')->with('success', "Post Deleted");
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            //get filename with extension
            $filenamewithextension = $request->file('file')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('file')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->file('file')->storeAs('public/uploads', $filenametostore);
            // $request->file('file')->storeAs('uploads', $filenametostore);

            // you can save image path below in database
            $path = asset('storage/uploads/' . $filenametostore);

            echo $path;
            exit;
        }
    }

    public function showArticles(Request $request)
    {
        // dd(request('search'));

        $posts = Post::latest();

        if (request('search')) {
            $posts = Post::where('title', 'like', '%' . $request->search . '%')->orWhere('post_content', 'like', '%' . $request->search . '%');
        }


        return view('News.index', ['posts' => $posts->get()]);
    }

    public function showArticle(Post $post)
    {
        //
        $title = $post->title;
        $category = $post->category;

        // Find posts with similar titles or from the same category
        $suggestions = Post::where(function ($query) use ($title, $category) {
            $query->where('title', 'like', "%$title%")
                ->orWhere('category', 'like', "%$category%");
        })
            ->where('id', '!=', $post->id) // Exclude the current post
            ->latest()
            ->take(3)
            ->get();

        // dd($suggestions);

        $articles = Post::latest()->where('id', '!=', $post->id)->take(5)->get();
        return view('Post.show', ['post' => $post, 'articles' => $articles, 'suggestions' => $suggestions]);
    }
}
