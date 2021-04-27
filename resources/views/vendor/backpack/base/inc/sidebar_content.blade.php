<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-title">Title Package</a></li>
<li class="nav-item nav-dropdown open">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i> News</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-book'></i> Categories</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('product') }}'><i class='nav-icon la la-buysellads'></i> Products</a></li>
    </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('banner') }}'><i class='nav-icon la la-bold'></i> Banners</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('blog') }}'><i class='nav-icon la la-btc'></i> Blogs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('contact') }}'><i class='nav-icon la la-question'></i> Contacts</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('config') }}'><i class='nav-icon la la-bullseye'></i> Configs </a></li>