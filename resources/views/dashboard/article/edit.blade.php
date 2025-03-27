@extends('dashboard.layouts.main')

@section('container')
    <style>
        .attachment img {
            height: 400px;
            width: auto;
        }

        .attachment {
            display: flex;
            justify-content: center;
        }
    </style>

    {{-- POST FORM --}}
    <div class="pt-10 mx-6 md:mx-48 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Edit Article</h1>
        <form id="postForm" class="w-[90%]" action="/dashboard/posts/{{ $post->slug }}/update" enctype="multipart/form-data"
            method="post">
            @method('put')
            @csrf
            <button type="submit" disabled style="display: none" aria-hidden="true"></button>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input data-index='1'
                    class="@error('title') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="title" id="title" type="text" placeholder="Title"
                    value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                    Slug
                </label>
                <input data-index='2'
                    class="@error('slug') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="slug" id="slug" type="text" placeholder="" value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="author">
                    Author
                </label>
                <input data-index='3'
                    class="@error('author') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="author" id="author" type="text" placeholder="Author"
                    value="{{ old('author', $post->author) }}">
                @error('author')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="editor">
                    Editor
                </label>
                <input data-index='3'
                    class="@error('editor') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="editor" id="editor" type="text" placeholder="Editor"
                    value="{{ old('editor', $post->editor) }}">
                @error('editor')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="author">
                    Category
                </label>
                <input data-index='4'
                    class="@error('category') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="category" id="category" type="text" placeholder="Category"
                    value="{{ old('category', $post->category) }}">
                @error('category')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cover_photo">
                    Cover Photo
                </label>

                <input type="hidden" name="old_cover_photo" value="{{ $post->cover_photo }}">

                <input type="file" accept="image/*" id="cover_photo" name="cover_photo"
                    onchange="previewImage()" class="@error('cover_photo') border-red-500 @enderror ">

                <img src="{{ asset('storage/' . $post->cover_photo) }}" alt="" class="my-4 img-preview w-full h-80 object-cover">

                @error('cover_photo')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="post_content">
                    Content
                </label>
                <input id="x" type="hidden" name="post_content"
                    value="{{ old('post_content', $post->post_content) }}">
                <trix-editor class="@error('post_content') border-red-500 @enderror  " input="x"></trix-editor>
                @error('post_content')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between my-4">
                <button
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Update
                </button>
            </div>
        </form>
    </div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })

    function previewImage() {
        const image = document.querySelector('#cover_photo')
        const imgPreview = document.querySelector(".img-preview")

        imgPreview.style.display = 'block'
        const oFReader = new FileReader()

        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    $('#postForm').on('keydown', 'input', function(event) {
        if (event.which == 13) {
            event.preventDefault();
            var $this = $(event.target);
            var index = parseFloat($this.attr('data-index'));
            $('[data-index="' + (index + 1).toString() + '"]').focus();
        }
    });
</script>
@endsection