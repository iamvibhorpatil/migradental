@extends('layouts.includes.main')

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;background-position: center;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row  slider-text align-items-center justify-content-center">
                <div class="col-md-9 text-center wow bounceInUp" data-wow-delay="1.5s">
                   
                    @if ($treatment->count() > 0)
                        @php
                            $type = DB::table('treatments')
                                ->where('id', $treatment[0]->treatment_type_id)
                                ->first();
                        @endphp
                        <h2 class="bread font-weight-normal mb-2" style="color:white;"> {{ $type->treatment_type }}</h2>
                    @else
                        <h2 class="bread font-weight-normal mb-2" style="color:white;"> Treatment</h2>
                    @endif


                </div>
            </div>
        </div>
    </section>


    <div class="container container-treatment my-2">

        <div class="left-side-treatment bg-white align-self-baseline w-100 wow bounceInLeft" style="max-width: 100%;" data-wow-delay="1.5s">
            <div class="custom-images w-100" style="max-width-100%;">
                @foreach ($treatment as $key => $item)
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

        <div class="right-side-treatment pt-0 wow bounceInRight" data-wow-delay="1.5s">
            <div class="right-side-content-treatment">
                <div id="accordion">
                    @foreach ($treatment as $key => $item)
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
