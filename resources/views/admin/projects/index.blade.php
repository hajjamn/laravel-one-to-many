@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <h1>Projects</h1>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Repo</th>
            <th>Descrizione</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($projects as $project)
            <tr>
              <td>{{ $project->id}}</td>
              <td><a href="{{  route('admin.projects.show', $project) }}">{{  $project->title  }}</a></td>
              <td><a href="https://github.com/hajjamn/{{ $project->repo }}">{{ $project->repo }}</a></td>
              <td>
                {{ $project->description }}
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </section>

@endsection