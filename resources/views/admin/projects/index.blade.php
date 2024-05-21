@extends ('layouts.admin')

@section('content')
    <section class="bg-body-tertiary">
        <div class="container">
            <h2 class="text-center text-secondary-emphasis py-4">Projects</h2>
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
                                        class="btn btn-outline-secondary px-3">
                                        <span style="font-size:0.9rem"> View </span>
                                    </a>
                                    edit/delete
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
