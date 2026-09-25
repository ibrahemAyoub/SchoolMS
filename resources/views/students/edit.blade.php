@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                <div class="col ps-4">
                    <h1 class="display-6 mb-3">
                        <i class="bi bi-person-lines-fill"></i> تعديل بيانات طالب
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="{{url()->previous()}}">قائمة الطلاب</a></li>
                            <li class="breadcrumb-item active" aria-current="page">تعديل طالب</li>
                        </ol>
                    </nav>

                    @include('session-messages')
                    <div class="mb-4">
                        <form class="row g-3" action="{{route('school.student.update')}}" method="POST">
                            @csrf
                            <input type="hidden" name="student_id" value="{{$student->id}}">
                            <div class="row g-3">
                                <div class="col-3">
                                    <label for="inputFirstName" class="form-label">الاسم الأول<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="الاسم الأول" required value="{{$student->first_name}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputLastName" class="form-label">الكنية<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="الكنية" required value="{{$student->last_name}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail4" class="form-label">الإيميل<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email" required value="{{$student->email}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputBirthday" class="form-label">تاريخ الولادة<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="date" class="form-control" id="inputBirthday" name="birthday" placeholder="تاريخ الولادة" required value="{{$student->birthday}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputAddress" class="form-label">العنوان<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="حماة" required value="{{$student->address}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputAddress2" class="form-label">الحي</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="القصور" value="{{$student->address2}}">
                                </div>
                                <div class="col-2">
                                    <label for="inputCity" class="form-label">المدينة<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputCity" name="city" placeholder="حماة" required value="{{$student->city}}">
                                </div>
                                <!-- <div class="col-2">
                                    <label for="inputZip" class="form-label">Zip<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputZip" name="zip" required value="{{$student->zip}}">
                                </div> -->
                                <div class="col-2">
                                    <label for="inputState" class="form-label">الجنس<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <select id="inputState" class="form-select" name="gender" required>
                                        <option value="Male" {{($student->gender == 'Male')?'selected':null}}>ذكر</option>
                                        <option value="Female" {{($student->gender == 'Female')?'selected':null}}>أنثى</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <label for="inputNationality" class="form-label">الجنسية<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputNationality" name="nationality" placeholder="سورية" required value="{{$student->nationality}}">
                                </div>
                                <div class="col-2">
                                    <label for="inputBloodType" class="form-label">زمرة الدم<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <select id="inputBloodType" class="form-select" name="blood_type" required>
                                        <option value="A+" {{($student->blood_type == 'A+')?'selected':null}}>A+</option>
                                        <option value="A-" {{($student->blood_type == 'A-')?'selected':null}}>A-</option>
                                        <option value="B+" {{($student->blood_type == 'B+')?'selected':null}}>B+</option>
                                        <option value="B-" {{($student->blood_type == 'B-')?'selected':null}}>B-</option>
                                        <option value="O+" {{($student->blood_type == 'O+')?'selected':null}}>O+</option>
                                        <option value="O-" {{($student->blood_type == 'O-')?'selected':null}}>O-</option>
                                        <option value="AB+" {{($student->blood_type == 'AB+')?'selected':null}}>AB+</option>
                                        <option value="AB-" {{($student->blood_type == 'AB-')?'selected':null}}>AB-</option>
                                        <option value="Other" {{($student->blood_type == 'Other')?'selected':null}}>Other</option>
                                    </select>
                                </div>
                                <!-- <div class="col-2">
                                    <label for="inputReligion" class="form-label">Religion<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <select id="inputReligion" class="form-select" name="religion" required>
                                        <option {{($student->religion == 'Islam')?'selected':null}}>Islam</option>
                                        <option {{($student->religion == 'Hinduism')?'selected':null}}>Hinduism</option>
                                        <option {{($student->religion == 'Christianity')?'selected':null}}>Christianity</option>
                                        <option {{($student->religion == 'Buddhism')?'selected':null}}>Buddhism</option>
                                        <option {{($student->religion == 'Judaism')?'selected':null}}>Judaism</option>
                                        <option {{($student->religion == 'Other')?'selected':null}}>Other</option>
                                    </select>
                                </div> -->
                                <div class="col-3">
                                    <label for="inputPhone" class="form-label">رقم الهاتف<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="+96322334455" required value="{{$student->phone}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputIdCardNumber" class="form-label">Student ID<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputIdCardNumber" name="id_card_number" placeholder="1122457" required value="{{$promotion_info->id_card_number}}">
                                </div>
                            </div>
                            <div class="row mt-4 g-3">
                                <h6>المعلومات الدراسية</h6>
                                <div class="col-3">
                                    <label for="inputFatherName" class="form-label">اسم الأب<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputFatherName" name="father_name" placeholder="اسم الأب" required value="{{$parent_info->father_name}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputFatherPhone" class="form-label">رقم هاتف الأب<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputFatherPhone" name="father_phone" placeholder="+96322334455" required value="{{$parent_info->father_phone}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputMotherName" class="form-label">اسم الأم<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputMotherName" name="mother_name" placeholder="اسم الأم" required value="{{$parent_info->mother_name}}">
                                </div>
                                <div class="col-3">
                                    <label for="inputMotherPhone" class="form-label">رقم هاتف الأم<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputMotherPhone" name="mother_phone" placeholder="+96322334455" required value="{{$parent_info->mother_phone}}">
                                </div>
                                <div class="col-4">
                                    <label for="inputParentAddress" class="form-label">العنوان<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="text" class="form-control" id="inputParentAddress" name="parent_address" placeholder="حماة" required value="{{$parent_info->parent_address}}">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-person-check"></i> تعديل</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
@include('components.photos.photo-input')
@endsection
