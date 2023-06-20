@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    
    <div class="row "> 
        <div class="card w-100">
            <div class="card-body">
                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="index.html"><img src="{{ asset("assets/admin/images/martina.jpeg") }}" height="70" alt="logo"></a>
                    </div>
                </div>
                <div class="p-sm-3">
                    <h4 class="font-size-18 mt-2 text-center">انشاء حساب جديد</h4>

                    <form class="form-horizontal w-sm-50 m-auto p-sm-5" action="index.html">

                        <div class="form-group">
                            <label for="username">الاسم</label>
                            <input type="text" class="form-control" id="username" placeholder="الاسم او الشركة">
                        </div> 

                        <div class="form-group">
                            <label for="username">البريد الالكتروني</label>
                            <input type="text" class="form-control" id="username" placeholder="البريد الالمتروني">
                        </div>

                        <div class="form-group">
                            <label for="userpassword">كلمة المرور</label>
                            <input type="password" class="form-control" id="userpassword" placeholder="اكثر من 8 احرف ">
                        </div> 

                        <div class="form-group">
                            <label for="userpassword">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" id="userpassword" placeholder="تأكيد كلمة المرور">
                        </div>

                        <div class="form-group">
                            <label for="username">المدينة</label>
                            <select class="form-control">
                                <option>اختر المدينة</option>
                                <option>الكل</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="userpassword">العنوان</label>
                            <input type="text" class="form-control" id="userpassword" placeholder="المنطقة و الشارع">
                        </div>

                        <div class="form-group">
                            <label for="userpassword">رقم الهاتف</label>
                            <input type="phone" class="form-control" id="userpassword" placeholder="رقم الهاتف">
                        </div>

                        <div class="form-group">
                            <label for="userpassword">رقم الهاتف</label>
                            <input type="file" class="form-control" id="userpassword" placeholder="رقم الهاتف">
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-4">
                                <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-account-check"></i> تمتلك حساب بالفعل </a>
                            </div>
                        </div>

                        <div class="form-group row mt-4"> 
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">دخول</button>
                            </div>
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-4">
                                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i>هل نسيت كلمو المرور</a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>  
    </div>

    {{-- <div class="row">
        <div class="card w-100">
            <div class="body-card">
                <div class="row m-5">
                    <h3 class="mb-4 col-6"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                    <div class="col-6 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أضافة أعلان هنا</button>
                    </div>
                </div>
                <div class="row ">

                    @for ($i = 0; $i < 8; $i++)
                        <div class="col-sm-6 col-6 col-xl-3">
                            <div class="card">
                                <a href="{{ asset('assets/admin/images/martina.jpg') }}" class="gallery-popup"
                                    style="height: 230px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 230px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>عقارات</h4>
                                                <p>
                                                    <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">مارتينا جرجس</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">شقق</h4>
                                    <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                        وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div> --}}


@endsection
