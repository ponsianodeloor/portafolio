@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Portfolio</h1>
@stop

@section('content')
    <p>Edit Project ({{$project->project}}) </p>
    <div>
        <a href="{{route('system.portfolio.index')}}" class="primary btn-block">Back to portfolio</a>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Edit Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Load Project Photo</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                            <div class="card card-gray-dark">
                                <div class="card-header">
                                    Project
                                </div>
                                <div class="card-body">
                                    <form action="{{route('system.portfolio.projects.update', $project)}}" method="post">
                                        @csrf
                                        @method('put')

                                        <x-adminlte-select name="category_id" label="Category" label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text bg-gradient-info">
                                                    <i class="fas fa-sitemap"></i>
                                                </div>
                                            </x-slot>
                                            @foreach($project_categories as $project_category)
                                                <option value="{{$project_category->id}}">{{$project_category->project_category}}</option>
                                            @endforeach

                                        </x-adminlte-select>

                                        <x-adminlte-input name="project" label="Project" placeholder="Project" label-class="text-lightblue" value="{{$project->project}}">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>

                                        <x-adminlte-textarea name="description" label="Description" rows=5
                                                             label-class="text-lightblue"
                                                             igroup-size="sm" placeholder="Insert description...">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text bg-dark">
                                                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                            {{$project->description}}
                                        </x-adminlte-textarea>

                                        <x-adminlte-input name="client" label="Client" placeholder="Client" label-class="text-lightblue" value="{{$project->client}}">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>

                                        <x-adminlte-input name="date" label="Date" placeholder="Date" label-class="text-lightblue" value="{{$project->date}}">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>

                                        <x-adminlte-input name="url" label="Url" placeholder="Url" value="{{$project->url}}"
                                                          label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>

                                        <x-adminlte-button label="Save Project" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="card card-green">
                                <div class="card-header">
                                    Upload Project Photo
                                </div>
                                <div class="card-body">
                                    <form action="{{route('system.portfolio.projects.store.images', $project)}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <x-adminlte-input name="title" label="Title" placeholder="Title" label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>

                                        <x-adminlte-textarea name="description" label="Description" rows=5
                                                             label-class="text-lightblue"
                                                             igroup-size="sm" placeholder="Insert description...">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text bg-dark">
                                                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-textarea>

                                        <x-adminlte-input-file name="file_url_image" label="Upload a Photo Project" placeholder="Choose a Photo Project..." disable-feedback accept="image/">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input-file>
                                        <x-adminlte-button label="Save Image Project" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Images Project
                </div>
                <div class="card-body">
                    <div class="timeline timeline-inverse">
                        @foreach($project_images as $project_image)
                            <!-- Timeline time label -->
                            <div class="time-label">
                                <span class="bg-green">{{date_format($project_image->created_at, 'd F Y')}}</span>
                            </div>
                            <div>
                                <!-- Before each timeline item corresponds to one icon on the left scale -->
                                <i class="fas fa-file bg-blue"></i>
                                <!-- Timeline item -->
                                <div class="timeline-item">
                                    <!-- Time -->
                                    <span class="time"><i class="fas fa-clock"></i>  {{date_format($project_image->created_at, 'h:i')}}</span>
                                    <!-- Header. Optional -->
                                    <h3 class="timeline-header"><a href="{{$project_image->url_image}}" target ="_blank">{{$project_image->title}}</a></h3>
                                    <!-- Body -->
                                    <div class="timeline-body">
                                        <p><strong>Title : </strong> {{$project_image->title}}</p>
                                        <p><strong>Description: </strong> {{$project_image->description}}</p>
                                        <p><strong>Image: </strong></p>
                                        <div>
                                            <img src="{{asset($project_image->url_image)}}" class="img-fluid">
                                        </div>

                                    </div>
                                    <!-- Placement of additional controls. Optional -->
                                    <div class="timeline-footer">
                                        <div class="row">
                                            <div class="col-2">
                                                <a class="btn btn-primary btn-sm btn-block" href="{{route('system.portfolio.projects.edit', $project)}}">Edit</a>
                                            </div>
                                            <div class="col-2">
                                                <form action="{{route('system.portafolio.projects.destroy', $project)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm btn-block">
                                                </form>
                                            </div>
                                            <div class="col-8">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- The last icon means the story is complete -->
                        <div>
                            <i class="fas fa-clock bg-gray"></i>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop
