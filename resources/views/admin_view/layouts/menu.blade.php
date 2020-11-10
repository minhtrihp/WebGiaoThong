<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                      <!--Return to Home Page-->
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="/WebGiaoThong/public" aria-expanded="false">
                              <i class="mr-3 fa fa-home fa-lg" aria-hidden="true"></i><span
                                  class="hide-menu" style="color:black; font-size: 18px;">Homepage</span></a>
                      </li>
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ asset('admin/news/list') }}" aria-expanded="false"><i class="mr-3 far fa-newspaper fa-fw fa-lg"
                                    aria-hidden="true"></i><span class="hide-menu" style="color:black; font-size: 18px; ">News</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ asset('admin/drivinglicenses/list') }}" aria-expanded="false"><i class="mr-3 fa fa-id-badge fa-lg"
                                    aria-hidden="true"></i><span class="hide-menu" style="color:black; font-size: 18px; ">Driving Licenses</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ asset('admin/drivingtests/list') }}" aria-expanded="false"><i class="mr-3 fa fa-file-alt fa-lg"
                                    aria-hidden="true"></i><span class="hide-menu" style="color:black; font-size: 18px; ">Driving Tests</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ asset('admin/questiontests/list') }}" aria-expanded="false"><i class="mr-3 fa fa-question-circle fa-lg"
                                    aria-hidden="true"></i><span class="hide-menu" style="color:black; font-size: 18px; ">Question Tests</span></a></li>
                        {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ asset('admin/comments/list') }}" aria-expanded="false"><i class="mr-3 fa fa-comments fa-lg"
                                    aria-hidden="true"></i><span class="hide-menu" style="color:black; font-size: 18px;">Comments</span></a></li> --}}
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ asset('admin/users/list') }}" aria-expanded="false">
                                <i class="mr-3 fa fa-user fa-lg" aria-hidden="true"></i><span
                                    class="hide-menu" style="color:black; font-size: 18px;">Users</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
