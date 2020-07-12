@extends('layouts.dashboard')


<!-- @section('dashboard_title')

{{"Dashboard"}}

@endsection -->


@section('content')


 <!-- cards -->


 <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-10 col-md-8 ">
                    <div class="row pt-5 mt-md-3 mb-5">
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-blog fa-3x text-warning"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Blogs</h5>
                                            <h3>0 blogs posted</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Donations</h5>
                                            <h3>No Donations</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-users fa-3x text-warning"></i>
                                        <div class="text-right text-info">
                                            <h5>Users</h5>
                                            <h3>No New Users</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-chart-line fa-3x text-warning"></i>
                                        <div class="text-right text-warning">
                                            <h5>Visitors</h5>
                                            <h3>No New Visitors</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end of cards -->




@endsection