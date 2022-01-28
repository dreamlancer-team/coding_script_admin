@extends('user.layout.app')

@push('main')
<div class="card">
    <div class="card-body p-lg-20 pb-lg-0">
        <div class="d-flex flex-column flex-xl-row">
            <div class="flex-lg-row-fluid me-xl-15">
                <div class="mb-17">
                    <div class="mb-8">
                        <div class="d-flex justify-content-between mb-6">
                            <div class="me-9 my-1">
                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                    </svg>
                                </span>
                                <span class="fw-bolder text-gray-400">{{ format_date($post -> created_at) }}</span>
                            </div>
                            <div class="me-9 my-1">
                                @foreach ($post -> categories as $category)
                                    <a href="#" class="badge badge-light-primary fw-bolder text-gray-400">
                                        {{ $category -> name }}
                                    </a>
                                @endforeach
                            </div>
                            <div class="my-1">
                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
                                        <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
                                    </svg>
                                </span>
                                <span class="fw-bolder text-gray-400">24 Comments</span>
                            </div>
                        </div>
                        <a href="#" class="text-dark text-hover-primary fs-2 fw-bolder">
                            {{ $post -> title }}
                            <span class="fw-bolder text-muted fs-5 ps-1">5 mins read</span></a>
                        <img class="mt-5 bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-300px w-100" src="/storage/blog/{{ $post -> image }}"/>
                    </div>
                    <div class="fs-5 fw-bold text-gray-600">
                        {!! $post -> description !!}
                    </div>
                    <div class="d-flex align-items-center border-dashed card-rounded p-5 p-lg-10 mb-14">
                        <div class="text-center flex-shrink-0 me-7 me-lg-13">
                            <div class="symbol symbol-70px symbol-circle mb-2">
                                <img src="http://assets.dreamlancer.in/assets/media/avatars/150-3.jpg" class="" alt="" />
                            </div>
                            <div class="mb-0">
                                <a href="#" class="text-gray-700 fw-bolder text-hover-primary"> {{ $post -> user -> name }}</a>
                                <span class="text-gray-400 fs-7 fw-bold d-block mt-1">Author</span>
                            </div>
                        </div>
                        <div class="mb-0 fs-6">
                            <div class="text-muted fw-bold lh-lg mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp writing a blog post often takes more than a couple.</div>
                            <a href="#" class="fw-bold link-primary">Author’s Profile</a>
                        </div>
                    </div>
                    <div class="d-flex flex-center">
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt="" />
                        </a>
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt="" />
                        </a>
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt="" />
                        </a>
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt="" />
                        </a>
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt="" />
                        </a>
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt="" />
                        </a>
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                <div class="mb-16">
                    <h4 class="text-black mb-7">Search Blog</h4>
                    <div class="position-relative">
                        <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
                    </div>
                </div>
                <div class="mb-16">
                    <h4 class="text-black mb-7">Categories</h4>
                    @foreach ($categories as $category)
                    <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                        <a href="#" class="text-muted text-hover-primary pe-2">{{ $category -> name }}</a>
                        <div class="m-0">{{ $category -> posts_count }}</div>
                    </div>
                    @endforeach
                </div>
                <div class="m-0">
                    <h4 class="text-black mb-7">Recent Posts</h4>
                    @foreach ($posts as $post)
                    <div class="d-flex flex-stack mb-7">
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <img class="symbol-label" src="/storage/blog/{{ $post -> image }}"/>
                        </div>
                        <div class="m-0">
                            <a href="{{ $post -> slug }}" class="text-dark fw-bolder text-hover-primary fs-6">{{ $post -> title }}</a>
                            <span class="text-gray-600 fw-bold d-block pt-1 fs-7">{{ $post -> excerpt }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endpush