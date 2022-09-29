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
                    <form action="{{route('system.services.type_services.store')}}" method="post">
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

                        <x-adminlte-textarea name="testimonial" label="Testimonial" rows=5
                                             label-class="text-lightblue"
                                             igroup-size="sm" placeholder="Insert description...">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-textarea>

                        <x-adminlte-button label="Save Testimonial" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="timeline timeline-inverse">

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
