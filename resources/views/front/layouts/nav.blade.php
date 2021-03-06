<!-- Main menu - start -->
<button type="button" class="mainmenu-btn">Menu</button>

<ul class="mainmenu">
    <li>
        <a href="{{ route('home') }}" class="{{ $menu_home or ''  }}">
            Home
        </a>
    </li>
    @foreach($navs as $nav)
    <li>
        <a href="{{ URL::to('shop?slug=' . $nav->slug) }}" class="{{ $__env->yieldContent('nav_active_category') == $nav->slug ? 'active' : '' }}">
            {{ $nav->name }}
        </a>
    </li>
    @endforeach
    <li>
        <a href="{{ route('page.partner') }}" class="">
            Partner
        </a>
    </li>
</ul>
<!-- Main menu - end -->