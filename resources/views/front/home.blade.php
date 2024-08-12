@extends('layout.main')
@section('title', 'Menna')
@section('content')
    <section class="hero text-center">
        <br />
        <br />
        <br />
        <br />
        <h2>
            <strong>
                Hey! Welcome to MC- Mykey's Store
            </strong>
        </h2>
        <br>
        <a href="{{ route('shirts') }}"><button class="button large">Check out My Shirts</button></a>
    </section>
    <br />
    <div class="subheader text-center">
        <h2>
            MyKey&rsquo;s Latest Shirts
        </h2>
    </div>
    <!-- Latest SHirts -->
    <div class="row">
        @foreach ($shirts as $shirts)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{ url('/assets/img/' . $shirts->image) }}" />
                        </a>
                    </div>
                    <a href="{{ route('shirt') }}">
                        <h3>
                            {{ $shirts->name }} </h3>
                    </a>
                    <h5>
                        {{ $shirts->price }}
                    </h5>
                    <p>
                        {{ $shirts->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
