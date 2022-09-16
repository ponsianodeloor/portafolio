@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <p>Edit profile.</p>

    <div class="row">
        <div class="col-6">
            <x-adminlte-profile-widget name="{{$profile->user->name}}" desc="{{$profile->user->email}}" theme="primary" img="https://picsum.photos/id/1011/100">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift" title="Portafolio" text="25" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10" size=6 badge="danger"/>
            </x-adminlte-profile-widget>
        </div>
        <div class="col-6 mb-4">
            {{-- With prepend slot --}}
            <x-adminlte-input name="name" label="User" placeholder="name" label-class="text-lightblue" value="{{$profile->user->name}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="email" label="Email" placeholder="Email" label-class="text-lightblue" value="{{$profile->user->email}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="url_linkedin" label="LinkedIn" placeholder="LinkedIn" label-class="text-lightblue" value="{{$profile->url_linkedin}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="url_github" label="GitHub" placeholder="GitHub" label-class="text-lightblue" value="{{$profile->url_github}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="url_twitter" label="Twitter" placeholder="Twitter" label-class="text-lightblue" value="{{$profile->url_twitter}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="slogan" label="Slogan" placeholder="Slogan" label-class="text-lightblue" value="{{$profile->slogan}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="slogan_dynamic" label="Slogan Dynamic" placeholder="Slogan Dynamic" label-class="text-lightblue" value="{{$profile->slogan_dynamic}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
                <x-slot name="bottomSlot">
                    <span class="text-sm text-gray">
                        [Please separate with comma (,) for dynamic Slogan]
                    </span>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="message" label="Message" placeholder="Message" label-class="text-lightblue" value="{{$profile->message}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>


            <x-adminlte-button label="Guardar Perfil" theme="primary btn-block" icon="fas fa-key"/>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
