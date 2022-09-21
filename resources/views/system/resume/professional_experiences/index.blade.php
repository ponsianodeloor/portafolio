@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Education</h1>
@stop

@section('content')
    <p>Edit Education.</p>
    <div class="row">
        <div class="col-12">
            <form action="{{route('system.resume.update', $resume)}}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-6">
                        <x-adminlte-profile-widget name="{{$resume->user->name}}" desc="{{$resume->user->email}}" theme="primary" img="https://picsum.photos/id/1011/100">
                            <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift" title="Portafolio" text="25" size=6 badge="primary"/>
                            <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10" size=6 badge="danger"/>
                        </x-adminlte-profile-widget>
                    </div>
                    <div class="col-6 mb-4">
                        <x-adminlte-textarea name="resume" label="Resume" rows=5
                                             label-class="text-lightblue"
                                             igroup-size="sm" placeholder="Insert description...">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                                </div>
                            </x-slot>
                            {{$resume->resume}}
                        </x-adminlte-textarea>

                        <x-adminlte-input name="sumary" label="Sumary" placeholder="Sumary" label-class="text-lightblue" value="{{$resume->sumary}}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-input name="address" label="Address" placeholder="Address" label-class="text-lightblue" value="{{$resume->address}}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-button label="Save Resume" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6 mb-4">
            <form action="{{route('system.resume.professional_experiences.store')}}" method="post">
                @csrf
                <x-adminlte-input name="position" label="Position" placeholder="Position" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="date_start" label="Date Start" placeholder="Date Start" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="date_end" label="Date Ends" placeholder="Date Ends" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="city" label="City" placeholder="City" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="description" label="Description" placeholder="Description" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-button label="Save Professional Experience" theme="primary btn-block" icon="fas fa-key" type="submit"/>

            </form>
        </div>
        <div class="col-6">
            <!-- Main node for this component -->
            <div class="timeline timeline-inverse">
                @foreach($professional_experiences as $professional_experience)
                    <!-- Timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">{{date_format($professional_experience->created_at, 'd F Y')}}</span>
                    </div>
                    <div>
                        <!-- Before each timeline item corresponds to one icon on the left scale -->
                        <i class="fas fa-cubes bg-blue"></i>
                        <!-- Timeline item -->
                        <div class="timeline-item">
                            <!-- Time -->
                            <span class="time"><i class="fas fa-clock"></i>  {{date_format($professional_experience->created_at, 'h:i')}}</span>
                            <!-- Header. Optional -->
                            <h3 class="timeline-header"><a href="#">{{$professional_experience->position}}</a></h3>
                            <!-- Body -->
                            <div class="timeline-body">
                                <p><strong>City: </strong> {{$professional_experience->city}}</p>
                                <p><strong>Date start: </strong> {{$professional_experience->date_start}}</p>
                                <p><strong>Date finish:  </strong>{{$professional_experience->date_end}}</p>
                                <p><strong>Description: </strong>{{$professional_experience->description}}</p>
                            </div>
                            <!-- Placement of additional controls. Optional -->
                            <div class="timeline-footer">
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn btn-primary btn-sm btn-block">Edit</a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{route('system.resume.professional_experiences.destroy', $professional_experience)}}" method="post">
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
