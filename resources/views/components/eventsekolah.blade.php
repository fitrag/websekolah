
    <div class="col-lg-4 col-md-4" data-aos="fade-up">
        <h2 class="section-title text-left">Event Sekolah</h2>
        <hr class="text-left" style="width: 190px; border: 2px solid orange; margin-left:0px; margin-top:-60px; ">
        @foreach($events as $event)
        <a href="{{ route('event.show', $event->slug) }}">
            <div class="event-card" >
            <div class="d-flex align-items-center">
                <div class="event-date" >
                <div class="event-day">{{ \Carbon\Carbon::parse($event->tgl)->format('d') }}</div>
                <div class="event-month" >{{ \Carbon\Carbon::parse($event->tgl)->format('M') }}</div>
                <div style="position: absolute; top: 0; left: 0; width: 5px; height: 100%; background: yellow;" ></div>
                </div>
                <div class="flex-grow-1">
                <div class="event-title">{{ $event->judul }}</div>
                <div class="event-details">📅 {{ \Carbon\Carbon::parse($event->tgl)->format('d M Y H:i:s') }}</div>
                <div class="event-details">📍 {{ $event->lokasi }}</div>
                </div>
            </div>
            </div>
        </a>
        @endforeach
        <a href="{{ route('event.index') }}" class="btn btn-orange w-100 font-weight-bold">Lihat Semua Event</a>
    </div>
