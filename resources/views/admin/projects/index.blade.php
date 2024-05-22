@extends ('layouts.admin')

@section('content')
    <section class="bg-body-tertiary">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-4">
                <h2 class="text-center text-secondary-emphasis ">Projects</h2>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-dark"> <i
                        class="fa-solid fa-circle-plus pe-2"></i>New
                    Project</a>
            </div>

            <script>
                var alertList = document.querySelectorAll(".alert");
                alertList.forEach(function(alert) {
                    new bootstrap.Alert(alert);
                });
            </script>

            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('message') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-secondary table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">SLUG</th>
                            <th scope="col">SUBTITLE</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">TECHNOLOGY</th>
                            <th scope="col">URL</th>
                            <th scope="col" class="text-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr class="">
                                <td scope="row">{{ $project->id }}</td>
                                <td>

                                    <a href="{{ route('admin.projects.show', $project) }}">
                                        <img width="160px" src=" {{ $project->image }}" alt="{{ $project->title }}">
                                    </a>
                                </td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>{{ $project->subtitle }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->technology }}</td>
                                <td>{{ $project->url }}</td>
                                <td
                                    class="text-center p-3 d-flex flex-column justify-content-center align-items-center gap-2 ">
                                    <a href="{{ route('admin.projects.show', $project) }}"
                                        class="btn btn-outline-secondary px-2 w-100">
                                        <i class="fa fa-eye fa-sm fa-fw pe-1" aria-hidden="true"></i>
                                        <span style="font-size:0.8rem"> View </span>
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project) }}"
                                        class="btn btn-outline-secondary px-2 w-100">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        <span style="font-size:0.8rem"> Edit </span>
                                    </a>
                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#modal-{{ $project->id }}">
                                        <i class="fas fa-trash fa-xs fa-fw"></i>
                                        <span style="font-size: 0.7rem" class="text-uppercase">Delete</span>
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modal-{{ $project->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitle-{{ $project->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitle-{{ $project->id }}">
                                                        Delete project
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this project:
                                                    {{ $project->title }}


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>

                                                    <form action="{{ route('admin.projects.destroy', $project) }}"
                                                        method="project">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">
                                                            Confirm
                                                        </button>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @empty
                            <tr class="">
                                <td scope="row" colspan="5">Work in progress!</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
