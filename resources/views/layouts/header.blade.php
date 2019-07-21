<!-- header
    ================================================== -->
    <header class="s-header header">

        <div class="header__logo">
            <a class="logo" href="{{ url('/') }}">
                SIMPLE CMS BY KHOLID
            </a>
        </div> <!-- end header__logo -->

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Navigate to</h2>

            <ul class="header__nav">
                <li class="current"><a href="{{ url('/') }}" title="">Home</a></li>
                <li class="has-children">
                    <a href="#0" title="">Categories</a>
                    <ul class="sub-menu">
                        @foreach($allcat as $row)
                        <li><a href="{{ url('/category/'.$row->cat_slug) }}">{{ $row->category_name }}</a></li>
                        @endforeach
                    </ul>
                </li>
          
            </ul> <!-- end header__nav -->

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

        </nav> <!-- end header__nav-wrap -->

    </header> <!-- s-header -->