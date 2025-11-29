<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Primary Meta Tags -->
<title>{{ $title . ' | S&L Media' ?? config('app.name') }}</title>
<meta name="title" content="{{ $title . ' | S&L Media' ?? config('app.name') }}"/>
<meta name="description"
      content="{{ $description ?? config('app.description', 'S&L Media SIA') }}"/>
<meta name="keywords" content="{{ $keywords ?? config('app.keywords', '') }}"/>
<meta name="author" content="S&L Media SIA"/>
<meta name="robots" content="index, follow"/>
<meta name="language" content="en"/>

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $ogType ?? 'website' }}"/>
<meta property="og:url" content="{{ $ogUrl ?? request()->url() }}"/>
<meta property="og:title" content="{{ $title . ' | S&L Media' ?? config('app.name') }}"/>
<meta property="og:description"
      content="{{ $description ?? config('app.description', 'S&L Media SIA') }}"/>
<meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.jpg') }}"/>
<meta property="og:image:alt" content="{{ $title ?? config('app.name') }}"/>
<meta property="og:site_name" content="S&L Media"/>

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image"/>
<meta property="twitter:url" content="{{ $twitterUrl ?? request()->url() }}"/>
<meta property="twitter:title" content="{{ $title . ' | S&L Media' ?? config('app.name') }}"/>
<meta property="twitter:description"
      content="{{ $description ?? config('app.description', 'S&L Media SIA') }}"/>
<meta property="twitter:image" content="{{ $ogImage ?? asset('images/og-image.jpg') }}"/>

<!-- Canonical URL -->
<link rel="canonical" href="{{ $canonicalUrl ?? request()->url() }}"/>

<!-- Favicon -->
<link rel="icon" href="{{asset('favicon.ico')}}" sizes="any"/>
<link rel="icon" href="{{asset('favicon-32x32.png')}}" type="image/png"/>
<link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}"/>

<!-- Preconnect -->
<link rel=" preconnect" href="https://fonts.bunny.net"/>
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

<!-- Additional Security & Performance -->
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

<!-- Vite & Flux -->

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
