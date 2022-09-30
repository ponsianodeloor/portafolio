@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Testimonials</h1>
@stop

@section('content')
    <p>Edit testimonial.</p>
    <div class="row">
        <div class="col-6">
            <x-adminlte-profile-widget name="{{$testimonial->user->name}}" desc="{{$testimonial->user->email}}" theme="primary"
                                       img="https://picsum.photos/id/1011/100">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
                                             title="Portafolio" text="25" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10"
                                             size=6 badge="danger"/>
            </x-adminlte-profile-widget>
        </div>
        <div class="col-6 mb-4">
            <form action="{{route('system.testimonials.update', $testimonial)}}" method="post">
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
                    {{$testimonial->description}}
                </x-adminlte-textarea>

                <x-adminlte-button label="Save" theme="primary btn-block" icon="fas fa-key" type="submit"/>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card card-gray-dark">
                <div class="card-header">
                    Testimonials
                </div>
                <div class="card-body">
                    <form action="{{route('system.testimonials.personal_references.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-adminlte-input name="name" label="Name" placeholder="Name" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>

                        </x-adminlte-input>

                        <x-adminlte-input name="position" label="Position" placeholder="Position" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-input name="company" label="Company" placeholder="Company" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-input name="email" label="Email" placeholder="Email" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-input name="cel" label="Cel" placeholder="Cel" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>

                        <x-adminlte-textarea name="testimonial" label="Testimonial" rows=5
                                             label-class="text-lightblue"
                                             igroup-size="sm" placeholder="Insert description...">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-textarea>

                        <x-adminlte-input-file name="file_url_image" label="Upload a Photo Personal Reference" placeholder="Choose a Photo Project..." disable-feedback accept="image/">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-file>

                        <x-adminlte-button label="Save Testimonial" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="timeline timeline-inverse">
                @foreach($testimonial->personalReferences as $personal_reference)
                    <!-- Timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">{{date_format($personal_reference->created_at, 'd F Y')}}</span>
                    </div>
                    <div>
                        <!-- Before each timeline item corresponds to one icon on the left scale -->
                        <i class="fas fa-cubes bg-blue"></i>
                        <!-- Timeline item -->
                        <div class="timeline-item">
                            <!-- Time -->
                            <span class="time"><i class="fas fa-clock"></i>  {{date_format($personal_reference->created_at, 'h:i')}}</span>
                            <!-- Header. Optional -->
                            <h3 class="timeline-header"><a href="#" target ="_blank">{{$personal_reference->name}}</a></h3>
                            <!-- Body -->
                            <div class="timeline-body">
                                <p><strong>Position:  </strong>{{$personal_reference->position}}</p>
                                <p><strong>Company: </strong> {{$personal_reference->company}}</p>
                                <div>
                                    @foreach($personal_reference->images as $images)
                                        <img src="{{asset($images->url_image)}}" class="img-fluid">
                                    @endforeach
                                </div>
                                <p><strong>Comment: </strong> {{$personal_reference->testimonial}}</p>
                            </div>

                            <!-- Placement of additional controls. Optional -->
                            <div class="timeline-footer">
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn btn-primary btn-sm btn-block" href="{{route('system.portfolio.projects.edit', $personal_reference)}}">Edit</a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{route('system.portafolio.projects.destroy', $personal_reference)}}" method="post">
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
    <script> console.log('Hi!'); </script>
@stop
