@extends('admin.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <main class="page-content">

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Orders</p>
                                <h4 class="my-1">4805</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 5% from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-basket2-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Revenue</p>
                                <h4 class="my-1">$24K</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 4.6 from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi bi-currency-exchange"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Customers</p>
                                <h4 class="my-1">5.8K</h4>
                                <p class="mb-0 font-13 text-danger"><i class="bi bi-caret-down-fill"></i> 2.7 from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Bounce Rate</p>
                                <h4 class="my-1">38.15%</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 12.2% from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-info text-white ms-auto"><i class="bi bi-bar-chart-line-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->


        <div class="row">
            <div class="col-12 col-lg-8 col-xl-8 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Sales Figures</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                                    <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">Sales</span></div>
                                    <div class="font-13"><i class="bi bi-circle-fill text-success"></i><span class="ms-2">Orders</span></div>
                                </div>
                            </div>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Statistics</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart2"></div>
                    </div>
                    <ul class="list-group list-group-flush mb-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">New Orders<span class="badge bg-primary badge-pill">25%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Completed<span class="badge bg-orange badge-pill">65%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Pending<span class="badge bg-success badge-pill">10%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">
            <div class="col-12 col-lg-6 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Statistics</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center justify-content-center gap-2">
                            <div id="chart3"></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-circle-fill text-purple me-1"></i> Visitors:<span class="me-1">89</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-info me-1"></i> Subscribers:<span class="me-1">45</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-pink me-1"></i> Contributor:<span class="me-1">35</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i> Author:<span class="me-1">62</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Product Actions</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                                    <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">Views</span></div>
                                    <div class="font-13"><i class="bi bi-circle-fill text-pink"></i><span class="ms-2">Clicks</span></div>
                                </div>
                            </div>
                        </div>
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
        </div><!--end row-->


        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Top Categories</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="categories">
                            <div class="progress-wrapper">
                                <p class="mb-2">Electronic <span class="float-end">85%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Furniture <span class="float-end">70%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 70%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Fashion <span class="float-end">66%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 66%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Mobiles <span class="float-end">76%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 76%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Accessories <span class="float-end">80%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Watches <span class="float-end">65%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-voilet" role="progressbar" style="width: 65%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Sports <span class="float-end">45%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-royal" role="progressbar" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Best Products</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="best-product p-2 mb-3">
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/01.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">White Polo T-Shirt</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">245 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/02.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Formal Coat Pant</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">325 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/03.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Blue Shade Jeans</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">189 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/04.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">102 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/05.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Men Sports Shoes</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">137 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/06.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Fancy Home Sofa</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">453 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/07.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Sports Time Watch</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">198 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/08.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Women Blue Heals</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">98 Sales</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Top Sellers</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-sellers-list p-2 mb-3">
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-1.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-1">Thomas Hardy</h6>
                                <p class="mb-0 font-13">Customer ID #84586</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-2.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Pauline Bird</h6>
                                <p class="mb-0 font-13">Customer ID #86572</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-3.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Ralph Alva</h6>
                                <p class="mb-0 font-13">Customer ID #98657</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">4.8 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-4.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">John Roman</h6>
                                <p class="mb-0 font-13">Customer ID #78542</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">4.7 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-5.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">David Buckley</h6>
                                <p class="mb-0 font-13">Customer ID #68574</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-6.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Maria Anders</h6>
                                <p class="mb-0 font-13">Customer ID #86952</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">4.8 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-7.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Martin Loother</h6>
                                <p class="mb-0 font-13">Customer ID #83247</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-8.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Victoria Hardy</h6>
                                <p class="mb-0 font-13">Customer ID #67523</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">3.9 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-9.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">David Buckley</h6>
                                <p class="mb-0 font-13">Customer ID #94256</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">3.5 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-10.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Victoria Hardy</h6>
                                <p class="mb-0 font-13">Customer ID #48759</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">3.4 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class="card radius-10">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12 col-lg-4 col-xl-4 d-flex">
                        <div class="card mb-0 radius-10 border shadow-none w-100">
                            <div class="card-body">
                                <h5 class="card-title">Top Sales Locations</h5>
                                <h4 class="mt-4">$36.2K <i class="flag-icon flag-icon-us rounded"></i></h4>
                                <p class="mb-0 text-secondary font-13">Our Most Customers in US</p>
                                <ul class="list-group list-group-flush mt-3">
                                    <li class="list-group-item border-top">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-us"></i></div>
                                            <div>United States</div>
                                            <div class="ms-auto">289</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-au"></i></div>
                                            <div>Malaysia</div>
                                            <div class="ms-auto">562</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-in"></i></div>
                                            <div>India</div>
                                            <div class="ms-auto">354</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-ca"></i></div>
                                            <div>Indonesia</div>
                                            <div class="ms-auto">147</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-ad"></i></div>
                                            <div>Turkey</div>
                                            <div class="ms-auto">652</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-cu"></i></div>
                                            <div>Netherlands</div>
                                            <div class="ms-auto">287</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-is"></i></div>
                                            <div>Italy</div>
                                            <div class="ms-auto">634</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-ge"></i></div>
                                            <div>Canada</div>
                                            <div class="ms-auto">524</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 col-xl-8 d-flex">
                        <div class="card mb-0 radius-10 border shadow-none w-100">
                            <div class="card-body">
                                <div class="" id="geographic-map"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

        <div class="card radius-10">
            <div class="card-header bg-transparent">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Recent Orders</h5>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                            <div class="dropdown">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>#ID</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#89742</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/11.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                                    </div>
                                </div>
                            </td>
                            <td>2</td>
                            <td>$214</td>
                            <td>Apr 8, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#68570</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/07.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Sports Time Watch</h6>
                                    </div>
                                </div>
                            </td>
                            <td>1</td>
                            <td>$185</td>
                            <td>Apr 9, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#38567</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/17.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Women Red Heals</h6>
                                    </div>
                                </div>
                            </td>
                            <td>3</td>
                            <td>$356</td>
                            <td>Apr 10, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#48572</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/04.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                                    </div>
                                </div>
                            </td>
                            <td>1</td>
                            <td>$149</td>
                            <td>Apr 11, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#96857</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/10.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                                    </div>
                                </div>
                            </td>
                            <td>2</td>
                            <td>$199</td>
                            <td>Apr 15, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#68527</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset('adminAsset')}}/assets/images/products/05.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Men Sports Shoes Nike</h6>
                                    </div>
                                </div>
                            </td>
                            <td>1</td>
                            <td>$124</td>
                            <td>Apr 22, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </main>
@endsection
