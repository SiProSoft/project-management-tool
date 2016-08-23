@extends('layouts.master')

@section('body')

<div id="app" class="container">
    <div class="row">
        <div v-for="project in projects" class="col-sm-3">
            <div class="_projects--project-wrapper">
                <a href="/projects/1" class="_projects--project-name">@{{ project.title }}</a>
                <div class="_projects--short-description">
                    <p class="small">@{{ project.short }}</p>
                </div>
                <div class="_projects--members">
                    <div v-for="member in project.members" class="_projects--member"></div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection