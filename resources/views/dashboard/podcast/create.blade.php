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
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">New Podcast</h1>
        <form id="podcastForm" class="w-[90%]" action="/dashboard/podcasts/store" enctype="multipart/form-data" method="post">
            @csrf
            <!-- Prevent implicit submission of the form -->
            <button type="submit" disabled style="display: none" aria-hidden="true"></button>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Podcast Title
                </label>
                <input data-index='1'
                    class="@error('title') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="title" id="title" type="text" placeholder="Podcast Title" value="{{ old('title') }}"
                    oninput="previewName(this.value)">
                @error('title')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="embed_code">
                    Embed Code (Spotify)
                </label>
                <textarea data-index='3' oninput="embedPreview(this.value)"
                    class="@error('embed_code') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                    name="embed_code" id="embed_code" placeholder="Paste Embed Code"
                    value="{{ old('embed_code') }}">{{ old('embed_code') }}</textarea>
                @error('embed_code')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        Select Assigned Program (Optional)
                    </label>
                    <select name="program_id" id="program_id"
                        class="py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($programs as $program)
                            <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                        @endforeach
                    </select>
                    @error('program_id')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">Preview</label>
            {{-- PODCAST CARD --}}
            <div
                class="w-[90vw] md:w-[35vw] md:min-w-[300px] flex flex-col justify-center align-middle items-center rounded-lg drop-shadow-lg" id="embedPreview">
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
    function embedPreview(value){
        const embedPreview = document.getElementById('embedPreview')
        embedPreview.innerHTML = value
    }

    $('#podcastForm').on('keydown', 'input', function(event) {
        if (event.which == 13) {
            event.preventDefault();
            var $this = $(event.target);
            var index = parseFloat($this.attr('data-index'));
            $('[data-index="' + (index + 1).toString() + '"]').focus();
        }
    });
</script>
@endsection