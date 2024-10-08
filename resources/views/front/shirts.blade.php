@extends('layout.main')
@section('title', 'Menna Shirts')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png" />
                    </a>
                </div>
                <a href="shirt.html">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis
                    risus semper.
                </p>
            </div>
        </div>
        @foreach ($shirts as $shirts)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="{{ route('shirt') }}">
                            {{-- <img src="http://i.imgur.com/Mcw06Yt.png" /> --}}
                            <img src="{{ url('/assets/img/' . $shirts->image) }}" />
                        </a>
                    </div>
                    <a href="{{ route('shirt') }}">
                        <h3>
                            {{ $shirts->name }}
                        </h3>
                    </a>
                    <h5>
                        ${{ $shirts->price }}
                    </h5>
                    <p>
                        {{ $shirts->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
