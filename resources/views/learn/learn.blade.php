@extends('courses')
@section('content')
<link rel="icon" href="./images/logo-courses.png" type="image/x-icon">
<link rel="stylesheet" href="{{URL::asset('./css/style.css')}}">
            <link rel="stylesheet" href="{{URL::asset('./css/courses.css')}}">    
<style>
    .faqs_container{
        display:block;
        
    }
    .faq{
        margin:10px 20px;
    }
    
 </style>
          <!--TRANG KHOA HOC -->
            <h2>{{$getname->name_courses}}</h2>
        
            <div class="container faqs_container">
                @if($count == 0)
                <h2 style="font-size:16px">Updating......</h2>
                @else
                @foreach($getcourses as $vi)
                <article class="faq">
                    <div class="faq_icon"><i class="fa-solid fa-plus"></i></div>
                    
                    
                    <div class="question_answer">
                        
                        <h4>{{$vi->video}}
                        </h4>
                        <div class="video-container">
                        <p>
                        <iframe src="{{$vi->link}}" aria-label="Bài 2: Làm quen với HTML" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://hoang.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>
                            </p>
                        </div>
                    </div>
                </article>

                <article class="faq">
                    <div class="faq_icon"><i class="fa-solid fa-plus"></i></div>
                    
                    
                    <div class="question_answer">
                        
                        <h4>Exercise
                        </h4>
                        <div class="cotainer">
                        <p>
                        <iframe src="{{$vi->exercise}}" aria-label="Bài 1 CSS"  width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://hoang.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>
                        
                            </p>
                        </div>
                    </div>
                </article>
                @endforeach
                @endif
              
                    </div> 
                
                </article>
            </div><br>
            

            
            <h2>Other Courses</h2>
            <div class="container courses_container">
                @foreach($getnot as $get)
                
                <article class="course">
                    <div class="course_image">
                        <img src="{{asset('./images/course.jpg')}}" alt="">
                    </div>
                    <div class="course_info">
                        <h4>{{$get->name_courses}}</h4>
                        <p>{{$get->info_courses}}</p>
                        <a href="{{route('learn',$get->name_courses)}}" class="btn btn-primary">{{$get->name_courses}}</a>
                    </div>
                    
                </article>
                @endforeach
                
                        
            <script src="{{asset('./main.js')}}"></script>         

@endsection