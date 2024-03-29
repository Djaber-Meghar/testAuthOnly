@extends("layouts.admin")
@section("pageTitle", "Koala Web Libraries")
@section('styleChart')
    <link href="{{asset("assets/admin/libs/c3/c3.min.css")}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
@endsection
@section("content")
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-warning mr-0 float-right"><i class="fa fa-coins"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">100</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">كل الاعلانات<span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-warning mr-0 float-right"><i class="fa fa-coins"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">190</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">كل الاعلانات قيد المراجعة<span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-primary mr-0 float-right"><i class="fas fa-users"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">777</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">عدد المستخدمين<span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-success mr-0 float-right"><i class="fa fa-envelope"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">895</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">عدد رسائل تواصل معنا <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-warning mr-0 float-right"><i class="mdi mdi-car-side"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">79</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">عدد اعلانات السيارات <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-pink mr-0 float-right"><i class="mdi mdi-car-side"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">80</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted"> عدد اعلانات السيارات قيد المراجعة <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-primary mr-0 float-right"><i class="mdi mdi-home"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">70</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">عدد اعلانات الشقق <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-success mr-0 float-right"><i class="mdi mdi-home"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">8</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">اعلانات الشقق قيد المراجعة <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-warning mr-0 float-right"><i class="mdi mdi-shopping-search"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">88</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted"> اعلانات المحلات و المكاتب <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-pink mr-0 float-right"><i class="mdi mdi-shopping-search"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">6</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">اعلانات المحلات و المكاتب قيد المراجعه<span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-primary mr-0 float-right"><i class="mdi mdi-view-dashboard"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">80</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">اعلانات الاراضي <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-success mr-0 float-right"><i class="mdi mdi-view-dashboard"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">7</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">اعلانات الاراضي قيد المراجعة <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-warning mr-0 float-right"><i class="fas fa-user-friends"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">78</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">اعلانات التوظيف<span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-pink mr-0 float-right"><i class="fas fa-user-friends"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">9</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">اعلانات التوظيف قيد المراجعة <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-primary mr-0 float-right"><i class="mbri-mobile2"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">77</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">اعلانات الاجهزة الذكية <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-success mr-0 float-right"><i class="mbri-mobile2"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">3</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">اعلانات الاجهزة الذكية قيد المراجعة <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-primary mr-0 float-right"><i class="fab fa-telegram-plane"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">679</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">الاعلانات العامة <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="font-size-40 text-success mr-0 float-right"><i class="fab fa-telegram-plane"></i></span>
                        <div class="mini-stat-info">
                            <h3 class="counter font-weight-normal mt-0">89</h3>
                        </div>
                        <div class="clearfix"></div>
                        <p class=" mb-0 mt-2 text-muted">الاعلانات االعامة قيد المراجعة <span class="float-right"></span></p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection
