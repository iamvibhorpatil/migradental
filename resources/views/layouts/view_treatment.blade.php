@extends('layouts.includes.main')

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;background-position: center;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row  slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    @foreach ($treatment as $key => $item)  
                    @php
                        $type = DB::table('treatments')
                            ->where('id', $item->treatment_type_id)
                            ->first();
                            
                    @endphp
 @endforeach
                    <h2 class="bread font-weight-normal mb-2" style="color:white;"> {{ $type->treatment_type }}</h2>
                   
                </div>
            </div>
        </div>
    </section>


    <div class="container container-treatment my-2">

        <div class="left-side-treatment bg-white align-self-baseline">
            <div class="custom-images" style="max-width-100%;max-height:484px;">
                @foreach ($treatment as $key => $item)
                    <div class="image {{ $key === 0 ? '' : 'd-none' }}" id="image{{ $key }}"><img
                            src="{{ url('assets/uploads/' . $item->image) }}"></div>
                @endforeach
            </div>
        </div>

        <div class="right-side-treatment pt-0">
            <div class="right-side-content-treatment">
                <div id="accordion">
                    @foreach ($treatment as $key => $item)
                        <div class="card">
                            <div class="card-header">
                                <a class="{{ $key === 0 ? '' : 'collapsed' }} card-link accordion-title" data-toggle="collapse"
                                    href="#collapse{{ $key }}">
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
