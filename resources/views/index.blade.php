@extends('layouts.app')
@section('title', 'Laravel Blog')
@section('css')
<style>
    @media (min-width: 992px) {
      ul#right__side {
        align-items: center !important;
      }
    }
    a{
      text-decoration: none;
    }
</style>
@endsection

@section('content')

<!-- Filter Start -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-7 m-auto">
        <div class="row">
            <h3>Filter</h3>
            <div class="col-md-6">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <div class="col-md-6">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        <hr>
        </div>
    </div>
</div>

<!-- Filter End -->

<!-- Blog List Start -->
@foreach ($posts as $post)
<div class="container mt-4 mb-3">
    <div class="row">
        <div class="col-md-7 m-auto">
        <div class="card">
            <div class="card-header">
            <a href="#">
            <img
                height="45px"
                width="45px"
                src="images/user.jpg"
                style="object-fit: cover"
                class="rounded-circle"
                />
                <span class="text-dark"><b>{{ $post->user->username }}</b></span> 
            </a>
                <span>| {{ date('jS M, Y', strtotime($post->created_at)) }}</span> 
            </div>
            <img style="object-fit: cover;" height="200" src="./images/cloud-computing.jpg" class="card-img-top" alt="cover-image">
            <div class="card-body">
            <a href="#">
                <h5 class="card-title text-dark">{{ $post->title }}</h5>
            </a>
            <p class="card-text">
                {{ $post->body }}
            </p>
            <span class="badge rounded-pill bg-info text-dark">Data Structure</span>
            <span class="badge rounded-pill bg-light text-dark">5 min read</span>
            <span class="badge rounded-pill bg-dark text-white">20 Likes</span>
            </div>
        </div>
        </div>
    </div>
</div>
@endforeach

<!-- Blog List End -->
@endsection