<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">Mage2</span> PMS</a>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="active">
                <a href="/admin">
                    <div class="icon">
                        <i class="fa fa-dashboard" aria-hidden="true"></i>
                    </div>
                    <div class="title">Dashboard</div>
                </a>
            </li>

            <li>
                <a href="{{ route('project.index') }}" >
                    <div class="icon">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                    </div>
                    <div class="title">Project</div>
                </a>
                <!--div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Project</li>
                        <li><a href="{{ route('project.index') }}">Project</a></li>

                        <!--
                        <li><a href="./uikits/components.html">Components</a></li>
                        <li><a href="./uikits/card.html">Card</a></li>
                        <li><a href="./uikits/form.html">Form</a></li>
                        <li><a href="./uikits/table.html">Table</a></li>
                        <li><a href="./uikits/icons.html">Icons</a></li>
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                        <li><a href="./uikits/pricing-table.html">Pricing Table</a></li>
                        <li><a href="./uikits/timeline.html">Timeline</a></li>
                        <li><a href="./uikits/chart.html">Chart</a></li>


                    </ul>
                </div-->
            </li>
            <li>
                <a href="{{ route('contact.index') }}">
                    <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="title">Contact</div>
                </a>
            </li>
            <!--
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Pages</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
                        <li><a href="./pages/form.html">Form</a></li>
                        <li><a href="./pages/profile.html">Profile</a></li>
                        <li><a href="./pages/search.html">Search</a></li>
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
                        <li><a href="./pages/landing.html">Landing</a></li>
                        <li><a href="./pages/login.html">Login</a></li>
                        <li><a href="./pages/register.html">Register</a></li>
                        <li><a href="./pages/404.html">404</a></li>
                    </ul>
                </div>
            </li>
            -->
            <li class="dropdown ">
                <a href="{{ route('setup.index') }}" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <div class="title">Setup</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-cogs" aria-hidden="true"></i> Setup</li>
                        <li><a href="{{ route('setup.project-status.index') }}">Project Status</a></li>
                        <li><a href="{{ route('setup.project-priority.index') }}">Project Priority</a></li>

                        <li class="nav-divider"></li>
                        <li><a href="{{ route('setup.user.index') }}">User</a></li>

                        <!--
                        <li><a href="./uikits/components.html">Components</a></li>
                        <li><a href="./uikits/card.html">Card</a></li>
                        <li><a href="./uikits/form.html">Form</a></li>
                        <li><a href="./uikits/table.html">Table</a></li>
                        <li><a href="./uikits/icons.html">Icons</a></li>
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                        <li><a href="./uikits/pricing-table.html">Pricing Table</a></li>
                        <li><a href="./uikits/timeline.html">Timeline</a></li>
                        <li><a href="./uikits/chart.html">Chart</a></li>
                        -->

                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <ul class="menu">

            <li>
                <a href="/setup">
                    Setup
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </a>
            </li>

        </ul>
    </div>
</aside>