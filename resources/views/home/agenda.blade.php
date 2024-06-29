<section id="jadwal-kegiatan" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Agenda Kegiatan</h1>
                    <div class="line"></div>
                    <p>Simak agenda kegiatan yang akan berlangsung selama acara RAKORNIS PERWADAG Tahun 2024.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12" data-aos="fade-down" data-aos-delay="150">
                <div class="schedule-item">
                    <div class="schedule-content">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Hari/Tanggal</th>
                                <th>Agenda</th>
                                <th>Waktu</th>
                            </tr>
                            @foreach($agendas as $index => $agenda)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $agenda->date }}</td>
                                    <td>{!! $agenda->agenda !!}</td>
                                    <td>{{ $agenda->time }}</td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
