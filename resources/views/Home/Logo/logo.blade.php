<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logo</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{ url('/logo/add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="logo" class="block text-gray-700 text-sm font-bold mb-2">Upload Logo:</label>
                    <input type="file" name="logo" id="logo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('addLogo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Add
                    </button>
                </div>
                @if(session('addSuccess'))
                    <p class="text-green-500 text-xs italic mt-3">{{ session('addSuccess') }}</p>
                @endif
            </form>
        </div>
    </div>

    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{ url('/logo/delete') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="logo" class="block text-gray-700 text-sm font-bold mb-2">Delete Logo:</label>
                    <input type="file" name="logo" id="logo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('errorLogo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Delete
                    </button>
                </div>
                @if(session('deleteSuccess'))
                    <p class="text-green-500 text-xs italic mt-3">{{ session('deleteSuccess') }}</p>
                @endif
            </form>
        </div>
    </div>
</body>
</html>