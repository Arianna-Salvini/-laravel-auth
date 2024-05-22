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
                                <td class="text-center">
                                    <a href="{{ route('admin.projects.show', $project) }}"
                                        class="btn btn-outline-secondary px-2">
                                        <i class="fa fa-eye fa-sm fa-fw pe-1" aria-hidden="true"></i>
                                        <span style="font-size:0.8rem"> View </span>
                                    </a>
                                    <a href="{{ route('admin.projects.create', $project) }}"
                                        class="btn btn-outline-secondary px-2">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        <span style="font-size:0.8rem"> Edit </span>
                                    </a>
                                    delete
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
