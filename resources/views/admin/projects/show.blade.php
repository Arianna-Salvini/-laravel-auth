@extends ('layouts.admin')

@section('content')
    <section class="bg-body-tertiary">
        <h2 class="text-center py-4 bg-dark text-secondary">Project: {{ $project->title }}</h2>
        <div class="container">
            <div>
                <h3>{{ $project->title }}</h3>
                <h5>{{ $project->subtitle }}</h5>
            </div>
            <div class="d-flex align-items-center py-5">
                <div>
                    <img src=" {{ $project->image }}" alt="{{ $project->title }}">
                    <p class="fw-lighter">{{ $project->slug }}</p>
                </div>

                <div class="ps-3">
                    <p>{{ $project->description }}</p>
                    <a href="{{ $project->url }}">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <span>{{ $project->url }}</span>
                    </a>
                </div>
            </div>
            </tbody>
            </table>
        </div>

        </div>
    </section>
@endsection
