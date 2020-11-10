<!DOCTYPE html>
<html lang="">
<head>
    @include('admin_view/layouts/import')
    <style type="text/css"></style>
    
</head>
<body>
    @guest
      <div class="alert alert-danger" role="alert">
        You need login to see more!
      </div>        
    @else
      @switch(Auth::user()->level)
        @case(0)
        <div class="container">
            <div class="panel-group" style="margin-top: 70px;">
                <div class="panel panel-danger">
                  <div class="panel-heading" style="font-size: 20px;">Thông báo</div>
                      <div class="panel-body" style="text-align: center; font-weight: bold; font-size: 23px;">
                        Tài khoản không đủ quyền hạn !
                   </div>
                </div>
            </div>
        </div>           
        @break
        @case(1)
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!--Header-->
        @include('admin_view/layouts/header')
        @include('admin_view/layouts/menu')
        <!--Content-->
        @yield('content_admin')
        <!--Footer-->
    </div>
    <script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>
   @yield('script')
        @break
   @default 
            Login fault
        @endswitch
    @endguest 
</body>
</html>
