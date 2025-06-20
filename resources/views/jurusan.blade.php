@extends('components.layouts.app')
@section('title', 'Jurusan '.$jurusan->name)
@section('content')

    <section id="deatilberita" class="contact">
        <div class="container">
            <nav class="mt-4" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">

                    <a href="#" class="hover:text-orange-600 transition duration-300">
                        Beranda
                    </a>
                    <span class="mx-2">/</span>
                    <a href="#" class="hover:text-orange-600 transition duration-300">
                        Jurusan
                    </a>
                    <span class="mx-2">/</span>
                    {{ $jurusan->title }}
            </nav>
            <div class="section-title">

            </div>

            <div class="row justify-content">

                <div class="col-xl-8 col-lg-4" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-book"></i>
                        <h3> {{ $jurusan->name }} </h3>

                        <div class="container text-justify mt-3">
                            {!! $jurusan->description !!}
                        </div>


                        <div class="text-secondary py-2 ">
                            &middot; {{ $jurusan->created_at->diffForHumans() }}
                            &middot;
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection