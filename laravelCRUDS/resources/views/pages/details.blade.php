@extends('layouts.master')

@section('title' , 'Course Details')

@section('main')
    <div class=" text-center shadow boreder container w-50 my-5 rounded
     mx-auto py-5">
        <h2 style="font-weight: bolder">
             Course Title : {{$course->title}}</h2>
        <hr>
            <p> {{$course->desc}}</p>
        <hr>
        <div class="p-3 rounded shadow w-50 mx-auto">
            Designed By <strong>
                {{$course->instructor}}</strong> At {{$course->created_at}}
                <br> <strong class="bg-dark rounded p-1 text-light">Course Price {{$course->price}}</strong>
          </div>
          <a href="{{route('courses')}}" 
          class="mt-4 mb-3 btn btn-dark">Return to all courses</a>
    </div>
@endsection