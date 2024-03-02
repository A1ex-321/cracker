@extends('crack.layout.app')

@section('content')

<!-- Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Our Categories</h2>
                    <ul>
                        <li>
                            <a href="{{(route('/'))}}">Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            Category
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Project -->
<section class="offer-area offer-area-four pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach($all as $machine)
            <div class="col-sm-6 col-lg-3" id="{{$machine->id}}">
                    <div class="offer-item">
                    <div class="offer-top">
                        <img href="#" src="{{ asset('public/images/' . $machine->image) }}" alt="Offer">
                    </div>
                    <div class="offer-bottom">
    <h3 class="py-4">
    <a onclick="addToCart('{{ route('/', ['id' => $machine->id]) }}')" style="cursor: pointer;">{{ $machine->title }}</a>

    </h3>
</div>
                    <div class="offer-shape">
                        <img src="{{ asset('public/crack/img/home-two/offer-shape.png') }}" alt="Offer">
                    </div>
                </div>
            </div>
            @endforeach

           




        </div>
    </div>
</section>
<!-- End Project -->

@endsection

@push('scripts')
<script>

</script>
<script>

</script>
<script>

</script>
</script>

@endpush