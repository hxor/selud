<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigation</li>

                <li class="">
                    <a href="{{ route('home') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                </li>
                @if (Auth::user()->roles->role == 'user')
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-folder"></i><span>Laporan </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.neraca.index') }}"><span>Neraca</span></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.rkap.index') }}"><span>RKAP</span></a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if (Auth::user()->roles->role == 'admin')
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Data Master </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.bumd.index') }}"><span>BUMD</span></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.pajak.index') }}"><span>Pajak</span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span>Rekening</span>  <span class="menu-arrow"></span></a>
                                <ul style="">
                                    <li><a href="{{ route('admin.rekening-1.index') }}"><span>Rekening 1</span></a></li>
                                    <li><a href="{{ route('admin.rekening-2.index') }}"><span>Rekening 2</span></a></li>
                                    <li><a href="{{ route('admin.rekening-3.index') }}"><span>Rekening 3</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-folder"></i><span>Laporan </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.neraca.index') }}"><span>Neraca</span></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.rkap.index') }}"><span>RKAP</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.user.index') }}" class="waves-effect"><i class="ti-user"></i> <span> Users </span></a>
                    </li>
                @endif
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
