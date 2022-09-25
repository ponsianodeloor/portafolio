@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <p>Edit profile.</p>
    <div class="row">
        <div class="col-6">
            <x-adminlte-profile-widget name="{{$profile->user->name}}" desc="{{$profile->user->email}}" theme="primary"
                                       img="{{asset($profile->url_photo)}}">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
                                             title="Portafolio" text="25" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10"
                                             size=6 badge="danger"/>
            </x-adminlte-profile-widget>

            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Profile Picture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Background Picture</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                            <div class="card card-gray-dark">
                                <div class="card-header">
                                    Upload Profile picture
                                </div>
                                <div class="card-body">
                                    <form action="{{route('system.profile.url_photo.update', $profile)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        {{-- With label and feedback disabled --}}
                                        <x-adminlte-input-file name="file_url_photo" label="Upload a Profile Picture" placeholder="Choose a Profile Picture..." disable-feedback accept="image/">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    [Please upload a picture with the same height and weight]
                                </span>
                                            </x-slot>
                                        </x-adminlte-input-file>
                                        <x-adminlte-button label="Save Profile Picture" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="card card-green">
                                <div class="card-header">
                                    Upload Background Picture
                                </div>
                                <div class="card-body">
                                    <form action="{{route('system.profile.url_photo_background.update', $profile)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        {{-- With label and feedback disabled --}}
                                        <x-adminlte-input-file name="file_url_photo_background" label="Upload a Profile Photo Background" placeholder="Choose a Profile Picture Background..." disable-feedback accept="image/">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-lightblue"></i>
                                                </div>
                                            </x-slot>
                                            <x-slot name="bottomSlot">
                                                <span class="text-sm text-gray">
                                                    [Please upload a picture with the same height and weight]
                                                </span>
                                            </x-slot>
                                        </x-adminlte-input-file>
                                        <x-adminlte-button label="Save Profile Picture Background" theme="primary btn-block" icon="fas fa-key" type="submit"/>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-6 mb-4">
            <form action="{{route('system.profile.update', $profile)}}" method="post">
                @csrf
                @method('put')
                {{-- With prepend slot --}}
                <x-adminlte-input name="name" label="User" placeholder="name" label-class="text-lightblue"
                                  value="{{$profile->user->name}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="email" label="Email" placeholder="Email" label-class="text-lightblue"
                                  value="{{$profile->user->email}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="url_linkedin" label="LinkedIn" placeholder="LinkedIn"
                                  label-class="text-lightblue" value="{{$profile->url_linkedin}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="url_github" label="GitHub" placeholder="GitHub" label-class="text-lightblue"
                                  value="{{$profile->url_github}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="url_twitter" label="Twitter" placeholder="Twitter" label-class="text-lightblue"
                                  value="{{$profile->url_twitter}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="slogan" label="Slogan" placeholder="Slogan" label-class="text-lightblue"
                                  value="{{$profile->slogan}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="slogan_dynamic" label="Slogan Dynamic" placeholder="Slogan Dynamic"
                                  label-class="text-lightblue" value="{{$profile->slogan_dynamic}}">
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

                <x-adminlte-input name="message" label="Message" placeholder="Message" label-class="text-lightblue"
                                  value="{{$profile->message}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-button label="Save Profile" theme="primary btn-block" icon="fas fa-key" type="submit"/>
            </form>
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
