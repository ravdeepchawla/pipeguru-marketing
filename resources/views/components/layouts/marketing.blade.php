@props([
    'meta' => [
        'title' => 'pipeguru.ai | Create in-app experiences with AI',
        'description' => 'The AI assistant for product and marketing teams to launch flexible forms, surveys, and A/B tests',
    ]
])
@php
    $meta['image'] = 'https://wafrow.com/i/9e162233-d2d9-4f83-8087-53355fd4f43c?' . http_build_query([
        'title[text]' => $meta['title']
    ]);
@endphp
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-nav.meta :title="$meta['title']" :description="$meta['description']" :image="$meta['image']" />
    @vite('resources/css/app.css')
</head>
<body class="container mx-auto p-4">
    <x-nav.header />
    <main>
    {{ $slot }}
    </main>
    <x-nav.footer />
    @vite('resources/js/app.js')
</body>
</html>