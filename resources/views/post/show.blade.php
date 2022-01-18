<a href="post/{{ $post -> slug }}" class="btn btn-icon btn-light-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modal-show-post{{ $post->slug }}" id="modal-show">
    <i class="fas fa-eye"></i>
</a>

<div class="modal fade" tabindex="-1" id="modal-show-post{{ $post->slug}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body card-scroll h-500px">
                <div class="mb-17">
                    <div class="mb-8">
                        <div class="d-flex justify-content-between mb-6">
                            <div class="me-9 my-1">
                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="21" viewBox="0 0 14 21" fill="none">
                                        <path opacity="0.3" d="M12 6.20001V1.20001H2V6.20001C2 6.50001 2.1 6.70001 2.3 6.90001L5.6 10.2L2.3 13.5C2.1 13.7 2 13.9 2 14.2V19.2H12V14.2C12 13.9 11.9 13.7 11.7 13.5L8.4 10.2L11.7 6.90001C11.9 6.70001 12 6.50001 12 6.20001Z" fill="black"/>
                                        <path d="M13 2.20001H1C0.4 2.20001 0 1.80001 0 1.20001C0 0.600012 0.4 0.200012 1 0.200012H13C13.6 0.200012 14 0.600012 14 1.20001C14 1.80001 13.6 2.20001 13 2.20001ZM13 18.2H10V16.2L7.7 13.9C7.3 13.5 6.7 13.5 6.3 13.9L4 16.2V18.2H1C0.4 18.2 0 18.6 0 19.2C0 19.8 0.4 20.2 1 20.2H13C13.6 20.2 14 19.8 14 19.2C14 18.6 13.6 18.2 13 18.2ZM4.4 6.20001L6.3 8.10001C6.7 8.50001 7.3 8.50001 7.7 8.10001L9.6 6.20001H4.4Z" fill="black"/>
                                    </svg>
                                </span>
                                <span class="fw-bolder text-gray-400">{{ $post -> created_at -> diffForHumans() }}</span>
                            </div>
                            <div class="me-9 my-1">
                                @foreach ($post -> categories as $category)
                                    <span class="fw-bolder badge badge-light-primary">
                                        {{ $category -> name }}
                                    </span>
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
                        <a href="#" class="text-dark text-hover-primary fs-2 fw-bolder">{{ $post -> title }}</a>

                        @if ($post->image)
                            <img class="mh-250px w-100 card-rounded mt-8" src="{{ url('storage/blog/' . $post->image) }}" alt="{{ $post -> title }}">
                        @else
                            <img class="mh-250px w-100 card-rounded mt-8" src="{{ url('images/image_not_available.png') }}" alt="{{ $post -> title }}">
                        @endif
                    </div>
                    <div class="fs-5 fw-bold text-gray-600">
                        {!! $post -> description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>