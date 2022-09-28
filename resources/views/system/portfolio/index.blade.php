@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Portfolio</h1>
@stop

@section('content')
    <p>Edit portfolio.</p>

    <div class="row">
        <div class="col-6">
            <x-adminlte-profile-widget name="{{$portfolio->user->name}}" desc="{{$portfolio->user->email}}"
                                       theme="primary" img="https://picsum.photos/id/1011/100">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
                                             title="Portafolio" text="{{$count_projects_x_portfolio_id}}" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10"
                                             size=6 badge="danger"/>
            </x-adminlte-profile-widget>
        </div>
        <div class="col-6 mb-4">
            <div class="card card-primary">
                <div class="card-header">Portfolio Description</div>
                <div class="card-body">
                    <form action="{{route('system.portfolio.update', $portfolio)}}" method="post">
                        @csrf
                        @method('put')
                        <x-adminlte-textarea name="description" label="Description" rows=5
                                             label-class="text-lightblue"
                                             igroup-size="sm" placeholder="Insert description...">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                                </div>
                            </x-slot>
                            {{$portfolio->description}}
                        </x-adminlte-textarea>

                        <x-adminlte-button label="Save Portfolio" theme="primary btn-block" icon="fas fa-key"
                                           type="submit"/>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6">

        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">New Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Project Categories</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                            <div class="card card-gray-dark">
                                <div class="card-header">
                                    Projects
                                </div>
                                <div class="card-body">
                                    <form action="{{route('system.portfolio.projects.store')}}" method="post">
                                        @csrf

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

                                        <x-adminlte-input name="project" label="Project" placeholder="Project" label-class="text-lightblue">
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

                                        <x-adminlte-input name="client" label="Client" placeholder="Client" label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>

                                        <x-adminlte-input name="date" label="Date" placeholder="Date" label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>

                                        <x-adminlte-input name="url" label="Url" placeholder="Url"
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
                                    Projects Categories
                                </div>
                                <div class="card-body">
                                    <form action="{{route('system.portfolio.project_categories.update')}}" method="post">
                                        @csrf

                                        <x-adminlte-input name="project_category" label="Project Category" placeholder="Project Category" label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>

                                        <x-adminlte-button label="Save Project Category" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="col-6">
            <div class="timeline timeline-inverse">
                @foreach($projects as $project)
                    <!-- Timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">{{date_format($project->created_at, 'd F Y')}}</span>
                    </div>
                    <div>
                        <!-- Before each timeline item corresponds to one icon on the left scale -->
                        <i class="fas fa-cubes bg-blue"></i>
                        <!-- Timeline item -->
                        <div class="timeline-item">
                            <!-- Time -->
                            <span class="time"><i class="fas fa-clock"></i>  {{date_format($project->created_at, 'h:i')}}</span>
                            <!-- Header. Optional -->
                            <h3 class="timeline-header"><a href="{{$project->url}}" target ="_blank">{{$project->project}}</a></h3>
                            <!-- Body -->
                            <div class="timeline-body">
                                <p><strong>Project Category: </strong> {{$project->category->project_category}}</p>
                                <p><strong>Description: </strong> {{$project->description}}</p>
                                <p><strong>Client: </strong> {{$project->client}}</p>
                                <p><strong>Date:  </strong>{{$project->date}}</p>
                                <p><strong>URL: </strong> <a href="{{$project->url}}" target="_blank">{{$project->project}}</a></p>
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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop
