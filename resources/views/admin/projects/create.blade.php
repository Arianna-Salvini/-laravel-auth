@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-between align-items-center p-4">
        <h2 class="text-center text-secondary-emphasis ">Create a New Project</h2>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-dark"> <i class="fa-solid fa-circle-plus pe-2"></i>New
            Project</a>

    </div>

    <div class="container">
        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Project's title" />
                <small id="titleHelper" class="form-text text-secondary">Type the title of your new project</small>
            </div>

            <div class="mb-3">
                <label for="subtitle" class="form-label">Project Subtitle</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" aria-describedby="subtitleHelper"
                    placeholder="Project's subtitle" />
                <small id="subtitleHelper" class="form-text text-secondary">Type the subtitle of your new project</small>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">
                    <i class="fa fa-image fa-xs fa fw" aria-hidden="true"></i>
                    Project image
                </label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="imageHelper"
                    placeholder="Project's image" />
                <small id="imageHelper" class="form-text text-secondary">Type the image of your new
                    project</small l>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description of project</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>



        </form>
    </div>
@endsection
