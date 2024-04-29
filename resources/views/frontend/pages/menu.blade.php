@extends('frontend.layout.layout')
@section('content')
    <!--Menu Section-->
    <section class="menu-section ">
        <div class="left-bg"><img src="images/background/bg-5.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                {{-- <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div> --}}
            </div>

            <div class="tabs-box menu-tabs" style="margin-top: 8%">
                <div class="buttons">
                    <ul class="tab-buttons clearfix">
                        @if (!empty($menus))
                            @foreach ($menus as $menu)
                                <li class="tab-btn {{ $menu->id == 1 ? 'active-btn' : '' }}"
                                    data-tab="#tab-{{ $menu->id }}"><span>{{ $menu->name }}</span></li>
                            @endforeach
                        @endif

                    </ul>
                </div>
                <div class="tabs-content">
                    <!--Tab-->
                    @if (!empty($menus))
                        @foreach ($menus as $menu)
                            <div class="tab {{ $menu->id == 1 ? 'active-tab' : '' }}" id="tab-{{ $menu->id }}">
                                <div class="row clearfix">
                                    @foreach ($menu->products as $key => $product)
                                        @if ($key % 2 == 0)
                                </div>
                                <div class="row clearfix">
                        @endif
                        <!--Block-->
                        <div class="menu-col col-lg-6 col-md-6 col-sm-6">
                            <div class="inner">
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="{{ asset($product->image)}}" alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="">{{ $product->name }}</a></h5>
                                            </div>
                                            <div class="price"><span>{{ $product->price }} ₺</span></div>
                                        </div>
                                        <div class="text desc"><a href="">{{ $product->description }}.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
            @endif



        </div>
        </div>
        </div>
    </section>
@endsection
