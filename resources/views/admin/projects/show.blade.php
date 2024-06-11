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
                Tipo di progetto: {{ $project->type_id}}
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

        {{-- CARD FOOTER --}}
        <div class="card-footer">

          <div class="d-flex">
            <div class="me-3">
              <a href="{{ route('admin.projects.edit', $project) }}">
                <button class="btn btn-primary">Edit</button>
                </a>
            </div>
            <div>
              <a href="{{ route('admin.projects.destroy', $project) }}">
                <button class="btn btn-danger">Delete</button>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

@endsection