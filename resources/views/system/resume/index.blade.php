@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>About</h1>
@stop

@section('content')
    <p>Edit profile.</p>
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop
