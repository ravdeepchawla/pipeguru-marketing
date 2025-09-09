@props([
    'title', 'description', 'image'
])
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}"/>
<meta property="og:title" content="{{ $title }}" property="og:type" content="website">
<meta property="og:image" content="{{ $image }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:logo" content="/images/up.svg">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@pipeguru" />
<meta name="twitter:title" content="{{ $title }}" />
<meta name="twitter:description" content=" {{ $description }}" />
<meta name="twitter:image" content=" {{ $image }}" />
<link rel="icon" type="image/png" sizes="32x32" href="/images/up.svg">