@extends('layouts.app')

@section('konten')
<body>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/eva01.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/eva02.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/eva03.jpg')}}" class="d-block w-100" alt="...">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <section>
            <div class="text-center m-4">
                <h1 class="card-title" style="font-weight: bolder"> EVANGLION MERCHANDISE</h1>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img src="{{ asset('img/eva01.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <button class="btn btn-success btn-sm">Pre-Order</button>
                            <div class="card-title">[remaster] EVA 01 EVANGLION</div>
                            <div class="card-text-muted mb-2"><small>30 november 2022</small></div>
                            <div class="card-text">IDR 10.000,00</div>
                            <div class="card-text-muted"><small>DP IDR 10.000,00</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img src="{{ asset('img/eva02.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <button class="btn btn-success btn-sm">Pre-Order</button>
                            <div class="card-title">[remaster] EVA 01 EVANGLION</div>
                            <div class="card-text-muted mb-2"><small>30 november 2022</small></div>
                            <div class="card-text">IDR 10.000,00</div>
                            <div class="card-text-muted"><small>DP IDR 10.000,00</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img src="{{ asset('img/eva03.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <button class="btn btn-success btn-sm">Pre-Order</button>
                            <div class="card-title">[remaster] EVA 01 EVANGLION</div>
                            <div class="card-text-muted mb-2"><small>30 november 2022</small></div>
                            <div class="card-text">IDR 10.000,00</div>
                            <div class="card-text-muted"><small>DP IDR 10.000,00</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img src="{{ asset('img/eva01.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <button class="btn btn-success btn-sm">Pre-Order</button>
                            <div class="card-title">[remaster] EVA 01 EVANGLION</div>
                            <div class="card-text-muted mb-2"><small>30 november 2022</small></div>
                            <div class="card-text">IDR 10.000,00</div>
                            <div class="card-text-muted"><small>DP IDR 10.000,00</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
@endsection
