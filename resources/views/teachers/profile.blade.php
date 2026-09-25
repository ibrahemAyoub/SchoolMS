@extends('layouts.app')

@section('content')
<style>
/* .table th:first-child,
.table td:first-child {
  position: relative;
  background-color: #f8f9fa;
} */
</style>
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                <div class="col ps-4">
                    <h1 class="display-6 mb-3">
                        <i class="bi bi-person-lines-fill"></i> المدرس
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                          <li class="breadcrumb-item"><a href="{{route('teacher.list.show')}}">قائمة المدرسين</a></li>
                          <li class="breadcrumb-item active" aria-current="page">الملف الشخصي</li>
                        </ol>
                    </nav>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <div class="card bg-light">
                                    <div class="px-5 pt-2">
                                        @if (isset($teacher->photo))
                                            <img src="{{asset('/storage'.$teacher->photo)}}" class="rounded-3 card-img-top" alt="Profile photo">
                                        @else
                                            <img src="{{asset('imgs/profile.png')}}" class="rounded-3 card-img-top" alt="Profile photo">
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$teacher->first_name}} {{$teacher->last_name}}</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">الجنس: {{$teacher->gender}}</li>
                                        <li class="list-group-item">رقم الهاتف: {{$teacher->phone}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9">
                                <div class="p-3 mb-3 border rounded bg-white">
                                    <h6>المعلومات الشخصية</h6>
                                    <table class="table table-responsive mt-3">
                                        <tbody>
                                            <tr>
                                                <th scope="row">الاسم الأول:</th>
                                                <td>{{$teacher->first_name}}</td>
                                                <th>الكنية:</th>
                                                <td>{{$teacher->last_name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">الإيميل:</th>
                                                <td>{{$teacher->email}}</td>
                                                <th scope="row">الجنسية:</th>
                                                <td>{{$teacher->nationality}}</td>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                                <th scope="row">العنوان:</th>
                                                <td>{{$teacher->address}}</td>
                                                <th>اسم الشارع:</th>
                                                <td>{{$teacher->address2}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">المدينة:</th>
                                                <td>{{$teacher->city}}</td>
                                                <!-- <th>Zip:</th>
                                                <td>{{$teacher->zip}}</td> -->
                                            </tr>
                                            <tr>
                                                <th scope="row">رقم الهاتف:</th>
                                                <td>{{$teacher->phone}}</td>
                                                <th>الجنس:</th>
                                                <td>{{$teacher->gender}}</td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
@endsection
