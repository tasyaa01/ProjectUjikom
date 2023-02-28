@extends('layouts.user')
<!-- HEADER START-->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text">
                        <h1 style="text-align:left">Berita</h1>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</header>
<!-- HEADER END -->

@section('content')
<!-- DETAIL BERITA START -->
<br>
<div class="card mb-3">
    <div class="card-body">
        <img src="{{ $berita->image() }}" class="img-polaroid" style="width:250px; height: 250px; float:left; margin-right:10px;">
        <h5 class="card-title">{{ $berita->judul }}</h5>
        <p class="card-title" style="text-align:justify;">{!! $berita->isi !!}</p>
        <a class="btn-solid-reg page-scroll" href="/news">BACK</a>
    </div>
</div>
<br>
<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://tropisianimal-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


<!-- DETAIL BERITA END -->
@endsection