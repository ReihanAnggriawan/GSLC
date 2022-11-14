@extends('nav')

@section('title', 'home')

@section('content')

    <div class="container-fluid">
        <div class="container d-flex flex-wrap justify-content-center">
            @for($i = 0; $i < sizeof($data); $i++)
                <div class="card m-2" style="width: 18rem;">
                    <img src= {{$data[$i]['image']}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nama: {{$data[$i]['name']}}</h5>
                        <p class="card-text">Kelas: {{$data[$i]['Kelas']}}.</p>
                        <p class="card-text">Nilai: {{$data[$i]['Nilai']}}.</p>
                        @if ($data[$i]['Nilai'] < 65)
                            <h4><span class="badge bg-danger">FAIL</span></h4>
                        @else
                            <h4><span class="badge bg-success">PASS</span></h4>
                        @endif
                    </div>
                </div>
            @endfor
        </div>
    </div>

@endsection
