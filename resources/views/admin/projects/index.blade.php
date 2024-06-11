@extends('layouts.app')

@section('content')

  <section>
    <div class="container py-3">
      <div class="row justify-between">
        <div class="col flex-grow-1">
          <h1>Projects</h1>
        </div>
        <div class="col-auto">
          <a href="{{ route('admin.projects.create') }}">
            <button class="btn btn-success">New Project</button>
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Repo</th>
            <th>Descrizione</th>
            <th>{{-- fill --}}</th>
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
              <td>
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
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </section>

@endsection