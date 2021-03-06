
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/bower_components/AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form (Optional) -->
{{--         {!! Form::open([
            'action' => 'SearchController@handle',
            'class' => 'sidebar-form',
            'id' => 'search-btn',
        ]) !!}
            <div class="input-group">
                {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'txtSearch']) !!}
                <span class="input-group-btn">
                    {!! Form::submit('Tim', ['class' => 'btn btn-flat']) !!}
                </span>
            </div>
        {!! Form::close() !!} --}}
     
        <!-- /.search form -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>
            <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>Manager User</span></a></li>
            <li><a href="{{-- {{ action('PublisherController@index') }} --}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>Category</span></a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Question</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>List-Question</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>Add-Question</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Qick-Question</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>Question-1</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>Question-2</a></li>
              </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>