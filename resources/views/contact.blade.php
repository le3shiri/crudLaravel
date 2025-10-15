@extends('layouts.app')

@section('content')
  <div class="card">
    <h2>{{ $title }}</h2>
    <p>Vous pouvez nous contacter via ce formulaire :</p>

    <form method="POST" action="#">
      @csrf
      <div style="margin-bottom: 12px;">
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="name" required style="width:100%;padding:8px;">
      </div>

      <div style="margin-bottom: 12px;">
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required style="width:100%;padding:8px;">
      </div>

      <div style="margin-bottom: 12px;">
        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" required style="width:100%;padding:8px;"></textarea>
      </div>

      <button type="submit" style="padding:10px 16px;border:none;border-radius:8px;background-color:#333;color:#fff;cursor:pointer;">
        Envoyer
      </button>
    </form>
  </div>
@endsection
