@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>About</h1>
@stop

@section('content')
    <p>Edit profile.</p>
    <form action="{{route('system.about.update', $about)}}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-6">
                <x-adminlte-profile-widget name="{{$about->user->name}}" desc="{{$about->user->email}}" theme="primary" img="https://picsum.photos/id/1011/100">
                    <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift" title="Portafolio" text="25" size=6 badge="primary"/>
                    <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Services" text="10" size=6 badge="danger"/>
                </x-adminlte-profile-widget>
            </div>
            <div class="col-6 mb-4">
                <x-adminlte-input name="about" label="About" placeholder="About" label-class="text-lightblue" value="{{$about->about}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="who_are_you" label="Who are you" placeholder="Who are you" label-class="text-lightblue" value="{{$about->who_are_you}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-textarea name="short_description" label="Short description" rows=5
                                     label-class="text-lightblue"
                                     igroup-size="sm" placeholder="Insert Short description...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{$about->short_description}}
                </x-adminlte-textarea>

                <x-adminlte-input name="date_of_birth" label="date_of_birth" placeholder="date_of_birth" label-class="text-lightblue" value="{{$about->date_of_birth}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="website" label="website" placeholder="website" label-class="text-lightblue" value="{{$about->website}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="phone" label="phone" placeholder="phone" label-class="text-lightblue" value="{{$about->phone}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="city" label="city" placeholder="city" label-class="text-lightblue" value="{{$about->city}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="degree" label="degree" placeholder="degree" label-class="text-lightblue" value="{{$about->degree}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="status" label="status" placeholder="status" label-class="text-lightblue" value="{{$about->status}}">
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
                    {{$about->description}}
                </x-adminlte-textarea>

                <x-adminlte-textarea name="facts_description" label="Fast Description" rows=5
                                     label-class="text-lightblue"
                                     igroup-size="sm" placeholder="Insert fast description...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{$about->facts_description}}
                </x-adminlte-textarea>

                <x-adminlte-textarea name="skills_description" label="Skill Description" rows=5
                                     label-class="text-lightblue"
                                     igroup-size="sm" placeholder="Insert fast description...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{$about->skills_description}}
                </x-adminlte-textarea>

                <x-adminlte-button label="Save About" theme="primary btn-block" icon="fas fa-key" type="submit"/>

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
