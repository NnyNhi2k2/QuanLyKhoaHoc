@extends('courses')
@section('content')

            <!--LIST KHOA HOC-->

            <h2>Courses</h2>
            <div class="container courses_container">

                @foreach($tbb as $tb)
                <article class="course">
                    <div class="course_image">
                        <img src="./images/course.jpg" alt="">
                    </div>
                    <div class="course_info">
                        <h4>{{$tb->name_courses}}</h4>
                        <p>{{$tb->info_courses}}</p>
                        <a href="{{route('learn',$tb->name_courses)}}" class="btn btn-primary">{{$tb->name_courses}}</a>
                    </div>
                    
                </article>
                @endforeach
@endsection