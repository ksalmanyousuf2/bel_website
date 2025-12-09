<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Beacon Energy - Leading the Shift to Renewable Power')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts - DM Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'DM Sans', sans-serif;
        }
        :root {
            --primary-blue: #1a365d;
            --light-blue: #4299e1;
            --dark-blue: #0d1b2a;
        }
        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        .btn-primary:hover {
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
        }
        .text-primary {
            color: var(--primary-blue) !important;
        }
        .bg-primary {
            background-color: var(--primary-blue) !important;
        }
        /* CKEditor Content Styles */
        .content {
            line-height: 1.8;
        }
        .content h1, .content h2, .content h3, .content h4, .content h5, .content h6 {
            margin-top: 1.5em;
            margin-bottom: 0.5em;
            font-weight: 600;
        }
        .content p {
            margin-bottom: 1em;
        }
        .content ul, .content ol {
            margin-bottom: 1em;
            padding-left: 2em;
        }
        .content li {
            margin-bottom: 0.5em;
        }
        .content blockquote {
            border-left: 4px solid var(--primary-blue);
            padding-left: 1em;
            margin: 1.5em 0;
            font-style: italic;
            color: #666;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5em 0;
        }
        .content table th,
        .content table td {
            border: 1px solid #ddd;
            padding: 0.75em;
        }
        .content table th {
            background-color: var(--primary-blue);
            color: white;
            font-weight: 600;
        }
        .content a {
            color: var(--primary-blue);
            text-decoration: none;
        }
        .content a:hover {
            text-decoration: underline;
        }
        .content img {
            max-width: 100%;
            height: auto;
            margin: 1em 0;
        }
    </style>
    <!-- Global Shared Components CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @stack('styles')
</head>
<body>
    @include('partials.header')
    
    <main style="position: relative;">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>

