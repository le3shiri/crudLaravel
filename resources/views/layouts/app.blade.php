<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>{{ $title ?? 'Blog' }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <main style="max-width:760px;margin:2rem auto;padding:1rem;">

    {{-- Message de succès --}}
    @if (session('success'))
      <div style="padding:.75rem;background:#e6ffed;border:1px solid #86efac;margin-bottom:1rem;">
        {{ session('success') }}
      </div>
    @endif

    @if (session('status'))
      <div style="padding:.75rem;background:#e6ffed;border:1px solid #86efac;margin-bottom:1rem;">
        {{ session('status') }}
      </div>
    @endif

    {{-- Erreurs globales --}}
    @if ($errors->any())
      <div class="bg-red-50 border border-red-200 p-3 rounded" style="margin-bottom:1rem;">
        <strong>Veuillez corriger les erreurs suivantes :</strong>
        <ul class="list-disc" style="margin:.5rem 0 0 1.25rem;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @yield('content')
  </main>
</body>
</html>
