@extends('dashboard.layouts.main')

@section('container')
    {{-- <title>Media Partners</title> --}}

    <div class="max-w-md mx-auto mt-20">

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{ url('/dashboard/mediapartners/add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Upload Media Partner
                        Logo:</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') is-invalid @enderror"
                        type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="text-red-500 text-xs italic">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Add
                    </button>
                </div>
                @if (session('addSuccess'))
                    <p class="text-green-500 text-xs italic mt-3">{{ session('addSuccess') }}</p>
                @endif
            </form>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection