<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
    <div class="sidebar">
        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            <div class="image">
                <a href="#">                    
                <img src="{{ asset('dist/img/logo-item.png') }}" class="brand-imgae w-100 p-1" alt="User Image">
                </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                @if (auth()->user()->can('show products') || auth()->user()->can('delete products') || auth()->user()->can('create products'))
                
                @endif
                <li class="nav-item has-treeview itmenu-open">
                    @if(URL::current() == URL::route('home'))
                                        <a href="{{ route('home') }}" class="nav-link active">
                                    @else
                                        <a href="{{ route('home') }}" class="nav-link">
                                    @endif
                        <i class="nav-icon fa fa-area-chart"></i>
                        <p>
                            Analisa
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview itmenu-open">
                    <a href="{{ route('posting.web')}}" class="nav-link">
                        <i class="nav-icon fa fa-desktop"></i>
                        <p>
                            Website
                        </p>
                    </a>
                </li>
                @role('kasir')
                <li class="nav-item">
                    @if(URL::current() == URL::route('order.transaksi'))
                        <a href="{{ route('order.transaksi') }}" class="nav-link active">
                    @else
                        <a href="{{ route('order.transaksi') }}" class="nav-link">
                    @endif
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>
                @endrole                
                @role('admin')
                 <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">

                        <i class="nav-icon fa fa-pencil"></i>
                        <p>
                            Manajemen Kegiatan
                            
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('posting.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Post Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kategoriposting.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Kategori Kegiatan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-server"></i>
                        <p>
                            Manajemen Produk
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('manajemen-produk.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kategori-produk.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-shopping-bag"></i>
                        <p>
                            Manajemen Order
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('order.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Order</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Manajemen Users
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('role.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.roles_permission') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Role Permission</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole

                <li class="nav-item has-treeview">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-sign-out"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>