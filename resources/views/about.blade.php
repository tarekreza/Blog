@extends('layout.layout')
<!-- main -->
@section('main')
    <main class="container">
        <section class="single-blog-post">
            <h1>About Me</h1>
            <div class="single-blog-post-ContentImage" data-aos="fade-left">
                <img src="{{ asset('images/photography.jpg') }}" alt="" />
            </div>

            <div>
                <p class="about-text">
                    Welcome to Tarek's blog! I'm Tarek Reza, the passionate tech enthusiast behind the scenes. From a young
                    age, my curiosity about technology has been a driving force in my life. Whether it's exploring the
                    latest gadgets, diving into coding projects, or staying abreast of emerging tech trends, I find joy in
                    unraveling the intricacies of the digital world.
                    <br><br>
                    As the creator of this blog, I aim to share my tech journey with you. Through insightful articles,
                    reviews, and tutorials, I hope to simplify complex concepts and make technology accessible to everyone.
                    Beyond the bits and bytes, I believe that technology has the power to transform lives positively. Join
                    me on this exciting adventure as we explore the ever-evolving landscape of tech together. Let's geek
                    out, learn, and celebrate the boundless possibilities that the world of technology has to offer!
                </p>
            </div>
        </section>
    </main>
@endsection
