@extends('layouts.includes.main')

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;background-position: center;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row  slider-text align-items-center justify-content-center">
                <div class="col-md-9 wow bounceInUp text-center" data-wow-delay="1.5s">
                    <h2 class="mb-2 bread font-weight-normal" style="color:white;"> International Clients</h2>
                </div>
            </div>
        </div>
    </section>


    <div class="container container-treatment my-2">

        <div class="left-side-treatment bg-white align-self-baseline w-100" style="max-width: 100%;">
            <div class="custom-images w-100" style="max-width-100%;">
                @foreach ($international_client as $key => $item)
                    <div class="image {{ $key === 0 ? '' : 'd-none' }} image-slider" id="image{{ $key }}">
                        @if ($item->image)
                            @php
                                $imageArray = explode(',', $item->image);
                            @endphp

                                @foreach ($imageArray as $k => $imageName)
                                    <img src="{{ url('assets/uploads/' . $imageName) }}"
                                        class="{{ $k === 0 ? '' : 'd-none' }} w-100" alt=""
                                        style="height:64vh;">
                                @endforeach
                          
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <div class="right-side-treatment pt-0">
            <div class="right-side-content-treatment">
                <div id="accordion">
                    @foreach ($international_client as $key => $item)
                        <div class="card">
                            <div class="card-header">
                                <a class="{{ $key === 0 ? '' : 'collapsed' }} card-link accordion-title"
                                    data-toggle="collapse" href="#collapse{{ $key }}">
                                    {{ $item->question }}
                                </a>
                            </div>
                            <div id="collapse{{ $key }}" class="collapse  {{ $key === 0 ? 'show' : '' }}"
                                data-parent="#accordion">
                                <div class="card-body">
                                    {{ $item->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
@endsection
