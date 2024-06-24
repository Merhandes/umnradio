<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/667eb529ec.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/axios/dist/axios.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        footer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .footer-logo {
            max-width: 100%;
            margin-bottom: 20px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
        }

        @media (max-width: 767px) {
            .footer-logo {
                width: 80%;
                max-width: none;
            }

            .footer-links {
                width: 100%;
            }
        }

        div::-webkit-scrollbar {
            display: none;
        }

        p::-webkit-scrollbar {
            display: none;
        }
    </style>

</head>

<body class="composer">
    <x-navigation></x-navigation>
    <x-audioplayer></x-audioplayer>
</body>

</html>
