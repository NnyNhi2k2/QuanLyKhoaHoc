@extends('layouts.app')

<!--TRANG QUAN LY ADMIN-->

@section('content')

<!--QUAN LY VIDEO-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!isset($find))
                        {!! Form::open(['route' => 'video.store', 'method'=> 'POST', 'enctype'=>'mutipart/form-data']) !!}
                    @else
                        {!! Form::open(['route' => ['video.update',$find->id], 'method'=> 'PUT', 'enctype'=>'mutipart/form-data']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('video', 'Video',[]) !!}
                            {!! Form::text('video',isset($find) ? $find->video: '',['class'=>'form-control', 'placeholder'=>'Input...','id'=>'video']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name_courses', 'Name Courses',[]) !!}
                            {!! Form::text('name_courses', isset($find) ? $find->name_courses: '',['style'=>'resize-none', 'class'=>'form-control','placeholder'=>'Input...','id'=>'info_courses']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('link', 'link',[]) !!}
                            {!! Form::text('link', isset($find) ? $find->link: '',['style'=>'resize-none', 'class'=>'form-control','placeholder'=>'Input...','id'=>'link']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('exercise', 'exercise',[]) !!}
                            {!! Form::text('exercise', isset($find) ? $find->exsecise: '',['style'=>'resize-none', 'class'=>'form-control','placeholder'=>'Input...','id'=>'exercise']) !!}
                        </div>
                        
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                       
                        
                        
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
                            <th scope="col">ID</th>
                            <th scope="col">Video</th>
                            <th scope="col">Name_courses</th>
                            <th scope="col">Link</th>
                            <th scope="col">Exercise</th>
                            
                            <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($getinfo as $info)
                            
                            <td>{{$info->id}}</td>
                            <td>{{$info->video}}</td>
                            <td>{{$info->name_courses}}</td>
                            <td>{{$info->link}}</td>
                            <td>{{$info->exercise}}</td>
                            
                            
                            <td>
                            {!! Form::open(['method'=>'DELETE','route' => ['video.destroy',$info->id ], 'onsubmit'=>'return confirm("Bạn có chắc muốn xoá")']) !!}
                           
                                {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('video.edit',$info->id)}}" class="btn btn-warning">Update</a>
                            
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