<style>
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; /* Untuk iOS */
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
        white-space: nowrap; /* Prevent text from wrapping */
    }

    th {
        font-weight: bold;
    }

    .schedule-item {
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
        .section-title h1 {
            font-size: 2rem;
        }

        th, td {
            font-size: 0.875rem; /* Reduce font size for smaller screens */
        }
    }
</style>
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
                    <div class="table-responsive">
                        <table class="table">
                            <thead> 
                                <tr>
                                    <th style="color: #1F54C5">No</th>
                                    <th  style="color: #1F54C5">Hari/Tanggal</th>
                                    <th  style="color: #1F54C5">Agenda</th>
                                    <th  style="color: #1F54C5">Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agendas as $index => $agenda)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $agenda->date }}</td>
                                        <td>{!! $agenda->agenda !!}</td>
                                        <td>{{ $agenda->time }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>