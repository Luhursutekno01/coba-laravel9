@extends('layouts.main')

@section('container')
<?php
$waktu=gmdate("H:i",time()+7*3600);
$t=explode(":",$waktu);
$jam=$t[0];
$menit=$t[1];

if ($jam >= 00 and $jam < 10 ){
if ($menit >00 and $menit<60){
$ucapan="Selamat Pagi";
}
}else if ($jam >= 10 and $jam < 15 ){
if ($menit >00 and $menit<60){
$ucapan="Selamat Siang";
}
}else if ($jam >= 15 and $jam < 18 ){
if ($menit >00 and $menit<60){
$ucapan="Selamat Sore";
}
}else if ($jam >= 18 and $jam <= 24 ){
if ($menit >00 and $menit<60){
$ucapan="Selamat Malam";
}
}else {
$ucapan="Error";

}

?>

@if (auth()->user())
<h1 class="mb-5 text-center">{{ $ucapan }} {{ auth()->user()->name }}</h1>
@else
<h1 class="mb-5 text-center">{{ $ucapan }} Sobat</h1>
@endif


<div class="container" id="homeCard">
    <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <a href="/posts">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?article" class="card-img" alt="">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title flex-fill text-center p-4 fs-3" style="background-color
                        : rgba(0,0,0, 0.7)">Blogs</h5>
                        </div>
                    </div>
                </a>
            </div>
        <div class="col-md-4 mb-3">
            <a href="/categories" class="">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?category" class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title flex-fill text-center p-4 fs-3" style="background-color
                    : rgba(0,0,0, 0.7)">Categories</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/about">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?about" class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title flex-fill text-center p-4 fs-3" style="background-color
                    : rgba(0,0,0, 0.7)">About</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
@endsection
