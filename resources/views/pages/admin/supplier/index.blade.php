@extends('layouts.admin')

@section('title')
    Supplier
@endsection

@section('content')
  <!-- Page Content -->
 <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Supplier</h2>
            <p class="dashboard-subtitle">
                List a Supplier
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">
                            + Create New Supplier
                            </a>
                            <div class="table-responsive">
                               <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                   <thead>
                                       <tr>
                                           <th>ID</th>
                                           <th>Nama</th>
                                           <th>Alamat</th>
                                           <th>Kota</th>
                                           <th>Kode pos</th>
                                           <th>Telpon</th>
                                           <th>Aksi</th>
                                       </tr>
                                   </thead>
                                    <tbody></tbody>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            Processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',//mengembalikan ke file yang sama
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'address', name: 'address' },
                { data: 'country', name: 'country' },
                { data: 'zip_code', name: 'zip_code' },
                { data: 'phone_number', name: 'phone_number' },
                { 
                    data     : 'action',
                    name     : 'action',
                    ordering : false,//tidak bisa di order
                    searcable: false,//tidak bisa di cari
                    width    : '15%',//ukuran kecil
                },
            ]
        })
    </script>
@endpush

