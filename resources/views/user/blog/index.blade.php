@extends('user.layout.app')

@push('main')
<div class="card col-md-8">
    <div class="card-body">
        @forelse ($posts as $post)
                <a href="{{ route('post', $post -> slug) }}">
                    <img class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-300px w-100" src="/storage/blog/{{ $post -> image }}" alt="{{ $post -> title }}" />
                </a>
                <div class="my-6">
                    <a href="{{ route('post', $post -> slug) }}" class="fw-bolder text-dark mb-4 fs-2 lh-base text-hover-primary">{{ $post -> title }}</a>
                    <div class="fw-bold fs-5 mt-4 text-gray-600 text-dark">{{ $post -> excerpt }}</div>
                </div>
                <div class="d-flex flex-stack flex-wrap">
                    <div class="d-flex align-items-center pe-2">
                        <div class="symbol symbol-35px symbol-circle me-3">
                            <img src="/storage/blog/{{ $post -> image }}" alt="{{ getUserFullName($post -> user_id) }}" />
                        </div>
                        <div class="fs-5 fw-bolder">
                            <a href="#" class="text-gray-700 text-hover-primary">{{ getUserFullName($post -> user_id) }}</a>
                            <span class="text-muted">on {{ format_date($post -> created_at) }}</span>
                        </div>
                    </div>
                   <div>
                    @foreach ( $post -> categories  as $category)
                    <a href="#" class="badge badge-light-info fw-bolder my-2">
                            {{ $category -> name }}
                    </a>
                        @endforeach
                   </div>
                </div>
                <div class="separator separator-dashed my-9"></div>
                @empty
                <h4>There is no post</h4>
        @endforelse
    </div>
</div>
@endpush
