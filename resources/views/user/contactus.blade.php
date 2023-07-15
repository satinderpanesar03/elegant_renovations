@extends('user.layouts.header2')

@section('title', 'Blogs')

@section('content')
<div class="contact-us header-content-wrapper">
    <div class="contact-us header-content">
        <div class=" contact-us blog-post-detail-page header-content-detail">
            <h2>Contact our kitchen <br>
               <span class="text-orange">Remodelling & Renovation </span> experts</h2>
        </div>
        <div class="contact-us d-flex ">
            <div class="px-5 py-3 text-center">
                <p class="mb-2 fw-500">CALGARY</p>
                <p class="fw-300">(000) 811-1114</p>
            </div>
            <div class="px-5 py-3 text-center">
                <p class="mb-2 fw-500">EDMONTON</p>
                <p class="fw-300">(000) 811-1114</p>
            </div>
            <div class="px-5 py-3 text-center">
                <p class="mb-2 fw-500">VANCOUVER</p>
                <p class="fw-300">(000) 811-1114</p>
            </div>
        </div>
    </div>
</div>
<div class="contact-us get-a-free-quote-section">
    <div class="contact-us get-a-free-quote-section-heading">
        <h2>Get A Free Quote</h2>
    </div>
    <div class="contact-us get-a-free-quote-section-content">
        <p>Contact our Kitchen renovation experts serving calgary, edmonton & vancouver</p>
        <form action="{{route('user.contact.us.store')}}" method="post">
    @csrf
            <div class="contact-us row">
                <div class="contact-us col">
                    <input type="text" class="contact-us form-control" placeholder="First name" name="name">
                </div>
                <div class="contact-us col">
                    <input type="text" class="contact-us form-control" placeholder="last name" name="last_name">
                </div>
            </div>
            <div class="contact-us row">
                <div class="contact-us col">
                    <input type="text" class="contact-us form-control" placeholder="Phone no" name="phone">
                </div>
                <div class="contact-us col">
                    <input type="text" class="contact-us form-control" placeholder="E-mail" name="email">
                </div>
            </div>
            <textarea class="contact-us form-control" placeholder="Enter your message" rows="5" id="comment"
                name="message"></textarea>


        <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
@push('head')
<script src="{{asset('js/master.js')}}"></script>
@endpush
