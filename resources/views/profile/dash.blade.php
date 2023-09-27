<div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
    <div class="dash__pad-1">

        <span class="dash__text u-s-m-b-16">Hello, {{ Auth::user()->name }} </span>
        <ul class="dash__f-list">
            <li>

                <a class="dash-active" href="{{ route('user.profile.index') }}">Manage My Account</a>
            </li>
            <li>

                <a href="{{ route('user.profile.profile') }}">My Profile</a>
            </li>
            <li>

                <a href="{{ route('user.profile.adresse.index') }}">Address Book</a>
            </li>
            <li>
                <a href="{{ route('user.profile.MyOrders') }}">My Orders</a>
            </li>
            <li>

                <a href="#">My Payment Options</a>
            </li>
            <li>

                <a href="#">My Returns & Cancellations</a>
            </li>
        </ul>
    </div>
</div>
<div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
    <div class="dash__pad-1">
        <ul class="dash__w-list">
            <li>
                <div class="dash__w-wrap">

                    <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                    <span class="dash__w-text">{{ $orders_count }}</span>

                    <span class="dash__w-name">Orders Placed</span>
                </div>
            </li>
            <li>
                <div class="dash__w-wrap">

                    <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                    <span class="dash__w-text">0</span>

                    <span class="dash__w-name">Cancel Orders</span>
                </div>
            </li>
            <li>
                <div class="dash__w-wrap">

                    <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                    <span class="dash__w-text">0</span>

                    <span class="dash__w-name">Wishlist</span>
                </div>
            </li>
        </ul>
    </div>
</div>
