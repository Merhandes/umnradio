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
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">New Program</h1>
        <form id="programForm" class="w-[90%]" action="/dashboard/programs/store" enctype="multipart/form-data" method="post">
            @csrf
            <!-- Prevent implicit submission of the form -->
            <button type="submit" disabled style="display: none" aria-hidden="true"></button>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="program_name">
                    Program Name
                </label>
                <input data-index='1'
                    class="@error('program_name') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="program_name" id="program_name" type="text" placeholder="e.g. News Flash"
                    value="{{ old('program_name') }}">
                @error('program_name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                    Slug
                </label>
                <input data-index='2'
                    class="@error('slug') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="slug" id="slug" type="text" placeholder="" value="{{ old('slug') }}">
                @error('slug')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="short_desc">
                    Short Description
                </label>
                <input data-index='3'
                    class="@error('short_desc') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="short_desc" id="short_desc" type="text" placeholder="e.g. Mondays, 10.00 - 13.00"
                    value="{{ old('short_desc') }}">
                @error('short_desc')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea data-index='4'
                    class="@error('description') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="description" id="description" type="text" placeholder="Description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2 w-full flex flex-wrap justify-center gap-4">
                <div class="w-[400px]">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="penyiar">
                        Penyiar
                    </label>
                    <input data-index='5'
                        class="@error('penyiar') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                        name="penyiar" id="penyiar" type="text" placeholder="e.g. John Doe, Jane Doe"
                        value="{{ old('penyiar') }}">
                    @error('penyiar')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-[400px]">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="producer">
                        Producer
                    </label>
                    <input data-index='6'
                        class="@error('producer') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                        name="producer" id="producer" type="text" placeholder="e.g. John Doe"
                        value="{{ old('producer') }}">
                    @error('producer')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-[400px]">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="visual_creative">
                        Visual Creative
                    </label>
                    <input data-index='7'
                        class="@error('visual_creative') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                        name="visual_creative" id="visual_creative" type="text" placeholder="e.g. John Doe"
                        value="{{ old('visual_creative') }}">
                    @error('visual_creative')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-[400px]">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="audio_creative">
                        Audio Creative
                    </label>
                    <input data-index='8'
                        class="@error('audio_creative') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                        name="audio_creative" id="audio_creative" type="text" placeholder="e.g. John Doe"
                        value="{{ old('audio_creative') }}">
                    @error('audio_creative')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-[400px]">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="media_affairs">
                        Media Affairs
                    </label>
                    <input data-index='9'
                        class="@error('media_affairs') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                        name="media_affairs" id="media_affairs" type="text" placeholder="e.g. John Doe"
                        value="{{ old('media_affairs') }}">
                    @error('media_affairs')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-[400px]">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="music_director">
                        Music Director
                    </label>
                    <input data-index='10'
                        class="@error('music_director') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                        name="music_director" id="music_director" type="text" placeholder="e.g. John Doe"
                        value="{{ old('music_director') }}">
                    @error('music_director')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-[400px]">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="operator">
                        Operator
                    </label>
                    <input data-index='10'
                        class="@error('operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                        name="operator" id="operator" type="text" placeholder="e.g. John Doe"
                        value="{{ old('operator') }}">
                    @error('operator')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Poster Image
                </label>
                <input type="file" accept="image/*" id="image" name="image"
                    onchange="previewImage()" class="@error('image') border-red-500 @enderror ">
                <img src="" alt="" class="my-4 img-preview h-80 hidden">
                @error('image')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Banner Image
                </label>
                <input type="file" accept="image/*" id="banner_image" name="banner_image"
                    onchange="previewBanner()" class="@error('banner_image') border-red-500 @enderror ">
                <img src="" alt="" class="my-4 banner-preview h-80 hidden">
                @error('banner_image')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between my-4">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Publish
                </button>
            </div>
        </form>
    </div>

<script>
    const program_name = document.querySelector('#program_name');
    const slug = document.querySelector('#slug');

    program_name.addEventListener('change', function() {
        fetch('/dashboard/programs/checkSlug?program_name=' + program_name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })

    function previewImage() {
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector(".img-preview")

        imgPreview.style.display = 'block'
        const oFReader = new FileReader()

        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    function previewBanner() {
        const image = document.querySelector('#banner_image')
        const imgPreview = document.querySelector(".banner-preview")

        imgPreview.style.display = 'block'
        const oFReader = new FileReader()

        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    $('#programForm').on('keydown', 'input', function(event) {
        if (event.which == 13) {
            event.preventDefault();
            var $this = $(event.target);
            var index = parseFloat($this.attr('data-index'));
            $('[data-index="' + (index + 1).toString() + '"]').focus();
        }
    });
</script>
@endsection