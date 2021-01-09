@extends('layouts.admin')

@section('title')
    Admin Dashboard
@endsection

@section('content')
  <!-- Page Content -->
 <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">
                This is a test administration Panel
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Products
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $products }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Categories
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $categories }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Units
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $units }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Suppliers
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $suppliers }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection