@props(['breadcrumbs'])

<section class="breadcrumbs">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="/">Главная</a>
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.705 0L0.294998 1.41L4.875 6L0.294998 10.59L1.705 12L7.705 6L1.705 0Z" fill="#888888" fill-opacity="0.6"/>
                    </svg>
                </li>
                @foreach ($breadcrumbs as $key => $breadcrumb)
                    <li>
                        <a href="{{ $key }}">{{ $breadcrumb }}</a>
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.705 0L0.294998 1.41L4.875 6L0.294998 10.59L1.705 12L7.705 6L1.705 0Z" fill="#888888" fill-opacity="0.6"/>
                        </svg>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>