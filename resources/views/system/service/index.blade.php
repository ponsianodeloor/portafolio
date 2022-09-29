@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Service</h1>
@stop

@section('content')
    <p>Edit service.</p>
    <div class="row">
        <div class="col-6">
            <x-adminlte-profile-widget name="{{$service->user->name}}" desc="{{$service->user->email}}" theme="primary"
                                       img="https://picsum.photos/id/1011/100">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
                                             title="Portafolio" text="25" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10"
                                             size=6 badge="danger"/>
            </x-adminlte-profile-widget>
        </div>
        <div class="col-6 mb-4">
            <form action="{{route('system.services.update', $service)}}" method="post">
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
                    {{$service->description}}
                </x-adminlte-textarea>

                <x-adminlte-button label="Save Service" theme="primary btn-block" icon="fas fa-key" type="submit"/>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card card-gray-dark">
                <div class="card-header">
                    Type Services
                </div>
                <div class="card-body">
                    <form action="{{route('system.services.type_services.store')}}" method="post">
                        @csrf
                        <x-adminlte-input name="icon" label="Icon" placeholder="Icon" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    [For use a Icon please go to this <a href="https://icons.getbootstrap.com/" target="_blank">Link</a>]
                                </span>
                            </x-slot>

                        </x-adminlte-input>

                        <x-adminlte-input name="title" label="Icon" placeholder="Title" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-input name="short_description" label="Short description" placeholder="Short Description" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-button label="Save Type Service" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="timeline timeline-inverse">
                @foreach($type_services as $type_service)
                    <!-- Timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">{{date_format($type_service->created_at, 'd F Y')}}</span>
                    </div>
                    <div>
                        <!-- Before each timeline item corresponds to one icon on the left scale -->
                        <i class="fas fa-cubes bg-blue"></i>
                        <!-- Timeline item -->
                        <div class="timeline-item">
                            <!-- Time -->
                            <span class="time"><i class="fas fa-clock"></i>  {{date_format($type_service->created_at, 'h:i')}}</span>
                            <!-- Header. Optional -->
                            <h3 class="timeline-header"><a href="#" target ="_blank">{{$type_service->title}}</a></h3>
                            <!-- Body -->
                            <div class="timeline-body">
                                <p><strong>Icon: </strong> {{$type_service->icon}}</p>
                                <p><strong>Title:  </strong>{{$type_service->title}}</p>
                                <p><strong>Description: </strong> {{$type_service->short_description}}</p>
                            </div>
                            <!-- Placement of additional controls. Optional -->
                            <div class="timeline-footer">
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn btn-primary btn-sm btn-block" href="{{route('system.portfolio.projects.edit', $type_service)}}">Edit</a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{route('system.portafolio.projects.destroy', $type_service)}}" method="post">
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
