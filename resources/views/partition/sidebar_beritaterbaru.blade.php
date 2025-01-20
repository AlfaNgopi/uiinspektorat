<div class="col-lg-4">
    <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <h5 class="card-title">Berita Terbaru</h5>
            @foreach ($beritasidebar as $berita)
            <a href="/berita/{{$berita['link']}}" style="text-decoration: none;">
                <div class="row news-card mt-3">
                    <div class="col-lg-4 news-card-img">
                        <img src="{{ asset($berita['img'])}}" class="img-fluid asprat-4-3 rounded-start" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <p class="card-title text-truncate-2 m-0 ">{{$berita['title']}}</p>

                        <div class="news-tags ">{{$berita['kategori']}}</div>
                    </div>

                </div>
                <hr class="solid">
            </a>
            @endforeach



        </div>
    </div>


</div>