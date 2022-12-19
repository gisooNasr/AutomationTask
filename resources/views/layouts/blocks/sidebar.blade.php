    <div class="navigation">

        <div class="navigation-menu-tab">
            <div>
                <div class="navigation-menu-tab-header" data-toggle="tooltip" title="{{ Auth::user()->full_name }}"
                    data-placement="right">
                    <a href="{{ url('/transactions/list') }}" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                        <figure class="avatar avatar-sm">
                            <img src="{{ asset('/assets/panel/images/user.png') }}" class="rounded-circle"
                                alt="avatar">
                        </figure>
                    </a>

                </div>
            </div>
            <div class="flex-grow-1">
                <ul>
                    <li>
                        <a class="active" data-toggle="tooltip" data-placement="right" title="عمومی"
                            data-nav-target="#general">
                            <i data-feather="bar-chart-2"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <div>
                <ul>

                    <li>
                        <a href="{{'/logout'}}" data-toggle="tooltip" data-placement="right" title="خروج">
                            <i data-feather="log-out"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navigation-menu-body">
            <div class="navigation-menu-group">
                <div>

                </div>
                <div class="open" id="general">

                    <ul>
                        <li class="navigation-divider">درخواست ها</li>

                        <hr>
                        <li><a @if(count(request()->segments()) ==1 && request()->segments()[0] == "transactions") class="active" @endif href="{{ url('/transactions') }}">ليست درخواست ها</a></li>
                        <li><a @if(count(request()->segments()) > 1 && request()->segments()[1] == "add") class="active" @endif href="{{ url('/transactions/add') }}">افزودن درخواست ها</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
