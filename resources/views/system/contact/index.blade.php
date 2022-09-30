@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Contact</h1>
@stop

@section('content')
    <p>Edit testimonial.</p>
    <div class="row">
        <div class="col-6">
            <x-adminlte-profile-widget name="{{$contact->user->name}}" desc="{{$contact->user->email}}" theme="primary"
                                       img="https://picsum.photos/id/1011/100">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
                                             title="Portafolio" text="25" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10"
                                             size=6 badge="danger"/>
            </x-adminlte-profile-widget>
        </div>
        <div class="col-6 mb-4">
            <form action="{{route('system.contact.update', $contact)}}" method="post">
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
                    {{$contact->description}}
                </x-adminlte-textarea>

                <x-adminlte-textarea name="url_google_maps" label="Google Maps" rows=5
                                     label-class="text-lightblue"
                                     igroup-size="sm" placeholder="Insert description...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    <x-slot name="bottomSlot">
                        <span class="text-sm text-gray">
                            [Share a map and just the value url in the parameter src]
                        </span>
                    </x-slot>

                    {{$contact->url_google_maps}}
                </x-adminlte-textarea>

                <x-adminlte-button label="Save" theme="primary btn-block" icon="fas fa-key" type="submit"/>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
