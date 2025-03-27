@extends('dashboard.layouts.main')

@section('container')
    <style>
        :root {
            color-scheme: only light;
        }

        .dataTables_filter input {
            border: 1px solid;
        }
    </style>

    {{-- POST FORM --}}
    <div
        class="pt-20 md:pt-36 px-6 md:mx-12 font-poppins text-black pb-24 flex justify-center flex-wrap overflow-scroll gap-5">
        <div class="w-full">
            <a href="/admin-landing"
                class="bg-white border-2 border-black text-black rounded-lg px-3 py-2 font-poppins font-bold justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200">Back</a>
        </div>
        <div
            class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] w-full rounded-lg flex flex-wrap justify-center items-baseline align-top p-6 h-fit">
            <h2 class="text-2xl font-bold font-poppins w-full text-center">Web Variables</h2>
            @if (session()->has('success'))
                {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-4 rounded relative w-fit"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            @foreach ($variables as $var)
                <div class="w-full flex gap-4">
                    <div>
                        <p>ID</p>
                        <p class="font-bold text-lg text-center">{{ $var->id }}</p>
                    </div>
                    <form action="/dashboard/variables/{{ $var->id }}/update" method="POST"
                        enctype="multipart/form-data" class="flex flex-wrap justify-start gap-4 h-full">
                        @method('put')
                        @csrf
                        <div class="h-full">
                            <p>Variable Name</p>
                            <input type="text" name="name"
                                class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full"
                                value="{{ old('name', $var->name) }}">
                            @error('name')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="h-full">
                            <p>Type</p>
                            <input type="text" name="type"
                                class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full"
                                value="{{ old('type', $var->type) }}">
                            @error('type')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="h-full">
                            <p>Content</p>
                            <textarea name="content" id=""
                                class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full" cols="30">{{ old('content', $var->content) }}</textarea>
                            @error('content')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="h-full flex flex-col">
                            <p>Update Variable</p>
                            <button type="submit"
                                class="font-bold text-white font-poppins bg-yellow-600 px-2 py-1 rounded justify-self-end">Update</button>
                        </div>
                    </form>
                    <form action="/dashboard/variables/{{ $var->id }}/remove" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('delete')
                        <div class="h-full flex flex-col">
                            <p>Remove Variable</p>
                            <button type="submit"
                                class="font-bold text-white font-poppins bg-red-600 px-2 py-1 rounded justify-self-end">Remove</button>
                        </div>
                    </form>
                </div>
            @endforeach

            <h2 class="text-lg font-bold font-poppins mt-10">New Variable</h2>
            <form action="/dashboard/variables/new" method="POST" enctype="multipart/form-data"
                class="w-full flex flex-wrap justify-start gap-4 h-full">
                @csrf
                <div class="h-full">
                    <p>Variable Name</p>
                    <input type="text" name="name"
                        class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="h-full">
                    <p>Type</p>
                    <input type="text" name="type"
                        class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full"
                        value="{{ old('type') }}">
                    @error('type')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="h-full">
                    <p>Content</p>
                    <textarea name="content" id=""
                        class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full" cols="30">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="h-full flex flex-col">
                    <p>Create Variable</p>
                    <button type="submit"
                        class="font-bold text-white font-poppins bg-blue-600 px-2 py-1 rounded justify-self-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection