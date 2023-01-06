<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ (request()->is('pesanan*')) ? 'active' : '' }}" href="{{ route('pesanan.index') }}"
                        aria-expanded="false">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Pesanan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ (request()->is('tiket*')) ? 'active' : '' }}" href="{{ route('tiket.index') }}"
                        aria-expanded="false">
                        <i class="fas fa-ticket-alt" aria-hidden="true"></i>
                        <span class="hide-menu">Tiket</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ (request()->is('check*')) ? 'active' : '' }}" href="{{ route('check') }}"
                        aria-expanded="false">
                        <i class="fas fa-barcode" aria-hidden="true"></i>
                        <span class="hide-menu">Check-in</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ (request()->is('laporan*')) ? 'active' : '' }}" href="{{ route('laporan') }}"
                        aria-expanded="false">
                        <i class="fas fa-file" aria-hidden="true"></i>
                        <span class="hide-menu">Laporan</span>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>