@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facts</h1>
@stop

@section('content')
    <p>Add Fact.</p>

    <div class="row">
        <div class="col-6">
            <x-adminlte-profile-widget name="{{$about->user->name}}" desc="{{$about->user->email}}" theme="primary"
                                       img="https://picsum.photos/id/1011/100">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
                                             title="Portafolio" text="25" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10"
                                             size=6 badge="danger"/>
            </x-adminlte-profile-widget>
        </div>
        <div class="col-6 mb-4">
            <form action="{{route('system.about.updateFactsDescription', $about)}}" method="post">
                @csrf
                @method('put')
                <x-adminlte-input name="about" label="About" placeholder="About" label-class="text-lightblue"
                                  value="{{$about->about}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="who_are_you" label="Who are you" placeholder="Who are you"
                                  label-class="text-lightblue" value="{{$about->who_are_you}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-textarea name="facts_description" label="Facts description" rows=5
                                     label-class="text-lightblue"
                                     igroup-size="sm" placeholder="Insert description...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{$about->facts_description}}
                </x-adminlte-textarea>

                <x-adminlte-button label="Save About" theme="primary btn-block" icon="fas fa-key" type="submit"/>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-6 mb-4">
            <form action="{{route('system.about.facts.store')}}" method="post">
                @csrf
                <x-adminlte-input name="icon" label="Icon" placeholder="Icon" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="many" label="Many" placeholder="Many" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="fact" label="Fact" placeholder="Fact" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="short_description" label="Short Description" placeholder="Who are you"
                                  label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-button label="Save Fact" theme="primary btn-block" icon="fas fa-key" type="submit"/>

            </form>
        </div>
        <div class="col-6">
            <!-- Main node for this component -->
            <div class="timeline timeline-inverse">
                @foreach($facts as $fact)
                    <!-- Timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">{{date_format($fact->created_at, 'd F Y')}}</span>
                    </div>
                    <div>
                        <!-- Before each timeline item corresponds to one icon on the left scale -->
                        <i class="fas fa-folder-open bg-blue"></i>
                        <!-- Timeline item -->
                        <div class="timeline-item">
                            <!-- Time -->
                            <span class="time"><i class="fas fa-clock"></i>  {{date_format($fact->created_at, 'h:i')}}</span>
                            <!-- Header. Optional -->
                            <h3 class="timeline-header"><a href="#">{{$fact->fact}}:</a> {{$fact->many}}</h3>
                            <!-- Body -->
                            <div class="timeline-body">
                                {{$fact->short_description}}
                            </div>
                            <!-- Placement of additional controls. Optional -->
                            <div class="timeline-footer">
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn btn-primary btn-sm btn-block">Edit</a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{route('system.about.facts.destroy', $fact)}}" method="post">
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
