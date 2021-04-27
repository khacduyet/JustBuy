@foreach ($blogs as $blog)
<div class="blog-card card-style-list">
    <div class="row">
        <div class="col-md-5">
            <a href="blog-details.html" class="image d-block">
                <img src="client/image/others/blog-grid-1.jpg" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <div class="card-content">
                <h3 class="title"><a href="blog-details.html"><?php echo $blog[1] ?></a></h3>
                <p class="post-meta"><span>30/10/2017 </span> | <a href="#">Hastech</a></p>
                <article>
                    <h2 class="sr-only">
                        Blog Article
                    </h2>
                    <p><?php echo $blog[2] ?></p>
                    <a href="blog-details.html" class="blog-link">Read More</a>
                </article>
            </div>
        </div>
    </div>
</div>
@endforeach