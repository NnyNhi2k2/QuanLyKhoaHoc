
@extends('layouts.app')

<!--TRANG QUAN LY ADMIN-->


@section('content')
<!--QUAN LI KHOA HOC -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quản Lý Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!isset($find))
                        {!! Form::open(['route' => 'courses.store', 'method'=> 'POST']) !!}
                    @else
                        {!! Form::open(['route' => ['courses.update',$find->id], 'method'=> 'PUT']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('name_courses', 'Name Courses',[]) !!}
                            {!! Form::text('name_courses',isset($find) ? $find->name_courses: '',['class'=>'form-control', 'placeholder'=>'Input...','id'=>'name_courses']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('info_courses', 'Info Courses',[]) !!}
                            {!! Form::textarea('info_courses', isset($find) ? $find->info_courses: '',['style'=>'resize-none', 'class'=>'form-control','placeholder'=>'Input...','id'=>'info_courses']) !!}
                        </div>
                        @if(\Session::has('insert'))
                            <div class = "alert alert-success ">
                            {!! \Session::get('insert')!!}
                            </div>
                            
                        @endif

                        @if(\Session::has('error'))
                            <div class = "alert alert-danger ">
                            {!! \Session::get('error')!!}
                            </div>
                            
                        @endif

                    @if(!isset($find))    
                    {!! Form::submit('Add',['class'=>'btn btn-success'] ) !!}
                    @else
                    {!! Form::submit('Update',['class'=>'btn btn-success'] ) !!}
                    @endif



                    {!! Form::close() !!}

                    {{ __('Welcome Hoàng') }}
                    
                </div>
                <!--HIEN THI DU LIEU TU DATABASE-->

                <table class="table">
                    <thead>
                        <tr>
                        
                        <th scope="col">Id_courses</th>
                        <th scope="col">Name Courses</th>
                        <th scope="col">Info Courses</th>
                        <th scope="col">Mangage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        @foreach($getcourses as $coursesss)
                        <td>{{$coursesss->id}}</td>
                        <td>{{$coursesss->name_courses}}</td>
                        <td>{{$coursesss->info_courses}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','route' => ['courses.destroy',$coursesss->id], 'onsubmit'=>'return confirm("Bạn có chắc muốn xoá")']) !!}
                           
                                {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('courses.edit',$coursesss->id)}}" class="btn btn-warning">Update</a>
                       
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                @if(\Session::has('successfully'))
                            <div class = "alert alert-success ">
                            {!! \Session::get('successfully')!!}
                            </div>
                            
                            @endif
            </div>
        </div>
    </div>
</div>
@endsection

     
