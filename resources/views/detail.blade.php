@extends('layouts.master')

@section('title', 'Detail')

@section('content')
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet" />
    <div class="container" style="margin: 10vh auto">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image">
                            <img src="{{ asset($product->photo_url) }}" id="main_product_image" width="350" />
                        </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <li>
                                    <img onclick="changeImage(this)" src="{{ asset('img/produk/baju-1.jpg') }}"
                                        width="70" />
                                </li>
                                <li>
                                    <img onclick="changeImage(this)" src="{{ asset('img/produk/baju-2.jpg') }}"
                                        width="70" />
                                </li>
                                <li>
                                    <img onclick="changeImage(this)" src="{{ asset('img/produk/baju-3.jpg') }}"
                                        width="70" />
                                </li>
                                <li>
                                    <img onclick="changeImage(this)" src="{{ asset('img/produk/baju-4.jpg') }}"
                                        width="70" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{ $product->name }}</h3>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua
                            </p>
                        </div>
                        <h3>$430.99</h3>
                        <div class="ratings d-flex flex-row align-items-center">
                            <div class="d-flex flex-row">
                                <i class="bx bxs-star"></i> <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i> <i class="bx bxs-star"></i>
                                <i class="bx bx-star"></i>
                            </div>
                            <span>441 reviews</span>
                        </div>
                        <div class="mt-5">
                            <span class="fw-bold">Color</span>
                            <div class="colors">
                                <ul id="marker">
                                    <li id="marker-1"></li>
                                    <li id="marker-2"></li>
                                    <li id="marker-3"></li>
                                    <li id="marker-4"></li>
                                    <li id="marker-5"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="buttons d-flex flex-row mt-5 gap-3">
                            <a href="{{ route('keranjang') }}"><button class="btn btn-primary text-white">
                                    Buy Now
                                </button></a>
                            <!-- <button class="btn btn-dark">Add to Basket</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
