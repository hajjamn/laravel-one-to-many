@extends('layouts.app')

@section('content')

  <section>

    <div class="container py-3">
      <div class="card">
        {{-- CARD HEADER --}}
        <div class="card-header">
          <h2>Project: {{ $project->title }}</h2>
        </div>

        {{-- CARD BODY --}}
        <div class="card-body">
          <ul class="list-group">
            
            <li class="list-group-item">
              <span>
                Nome repo: {{ $project->title }}
              </span>
            </li>

            <li class="list-group-item">
              <span>
                @if ($project->description === null)
                  Descrizione assente.
                @else
                  Descrizione: {{ $project->description }}
                @endif
              </span>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>

@endsection