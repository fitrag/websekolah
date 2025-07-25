@extends('components.layouts.app')
@section('title', 'event ' . $event->name)
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
                        Event
                    </a>
                    <span class="mx-2">/</span>
                    {{ $event->name }}
            </nav>

            <div class="row justify-content mt-5">

                <div class="col-xl-8 col-lg-4" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-book"></i>
                        <h3> {{ $event->judul }} </h3>

                        <div class="container text-justify mt-3">
                            {!! $event->isi !!}
                        </div>


                        <div class="text-secondary py-2 ">
                            &middot; {{ $event->created_at->diffForHumans() }}
                            &middot;
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="">
                        <h3 class="font-weight-bold mb-3">Events Sekolah</h3>
                        @foreach($events as $event)
                        <a href="{{ route('event.show', $event->slug) }}">
                            <div class="event-card">
                                <div class="d-flex align-items-center">
                                    <div class="event-date">
                                        <div class="event-day">{{ \Carbon\Carbon::parse($event->tgl)->format('d') }}</div>
                                        <div class="event-month">{{ \Carbon\Carbon::parse($event->tgl)->format('M') }}</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="event-title">{{ $event->judul }}</div>
                                        <div class="event-details">📅
                                            {{ \Carbon\Carbon::parse($event->tgl)->format('d M Y H:i:s') }}
                                        </div>
                                        <div class="event-details">📍 {{ $event->lokasi }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        <a href="{{ route('event.index') }}" class="btn btn-orange w-100 font-weight-bold">Lihat Semua Event</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection