@extends('layout.layout')
@section('konten')
            <div class="listproduk row">
                @foreach ($barang as $p)
                    <div class="produk col-3">
                        <img src="{{asset('image/'.$p->imgfile)}}" width="300" height="300">
                        <span>{{$p->productname}}</span><br><br>
                        <span style="font-style:normal;font-weight:normal;">Rp. 5000 / Ton</span><br><br>
                        <span style="font-style:normal;font-weight:lighter;">{{$p->description}}</span><br>
                        <span>Kota Bandung</span>

                    </div>
                    @endforeach

                </div>
@endsection