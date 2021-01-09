<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
    @stack('addon-style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/images/admin.png" alt="" class="my-4 w-50" />
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin-dashboard') }}" 
                    class="list-group-item list-group-item-action
                    {{ (request()->is('admin')) ? 'active' : '' }}"
                    >Dashboard</a
            >
            <a
              href="{{ route('product.index') }}"
              class="list-group-item list-group-item-action
              {{ (request()->is('admin/product')) ? 'active' : '' }}"
              >Products</a
            >
            <a
              href="{{ route('category.index') }}"
              class="list-group-item list-group-item-action 
              {{ (request()->is('admin/category*')) ? 'active' : '' }}"
              >Categories</a
            >
            <a
              href="{{ route('unit.index') }}"
              class="list-group-item list-group-item-action
              {{ (request()->is('admin/unit*')) ? 'active' : '' }}"
              >Units</a
            >
            <a
              href="{{ route('supplier.index') }}"
              class="list-group-item list-group-item-action
              {{ (request()->is('admin/supplier*')) ? 'active' : '' }}"
              >Supplier</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        

                {{-- page content --}}
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
     @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    @stack('addon-script')
</body>

</html>