@extends('layouts.front')
@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-primary mb-3"><span class="fw-light text-dark">Track</span> Your Habit</h1>
            <p class="mb-5">Take control of your daily routines and achieve your goals by tracking your habits now!</p>
        </div>
        <div class="row g-4">
            @foreach ($kategoris as $kategori)
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="product-item border p-3 d-flex align-items-start" style="height: auto; border-radius: 10px; background-color: #f2f1d9;">
                    <img class="img-fluid me-3" src="{{ asset('ui/img/book.png') }}" alt="Habit Image" style="width: 100px; height: 100px; border-radius: 10px;">
                    <div class="text-start">
                        <h6 class="mb-1">{{ $kategori->nama_kategori }}</h6>
                        <p class="mb-1">{{ Str::limit($kategori->deskripsi, 80) }}</p>
                        <form action="{{ route('add.habit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="kategori_id" value="{{ $kategori->id }}">
                            <button type="submit" class="btn btn-primary px-2 py-1"><i class="fa fa-pencil-alt me-1"></i>Add Habit</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection