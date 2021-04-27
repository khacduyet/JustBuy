
@foreach ($products as $pro)
<div class="col-lg-4 col-sm-6">
    <div class="product-card">
        <div class="product-grid-content">
            <div class="product-header">
                <a href="#" class="author">
                    Epple
                </a>
                <h3><a href="product-details.html"><?php echo $pro[1] ?></a></h3>
            </div>
            <div class="product-card--body">
                <div class="card-image">
                    <img src="client/image/products/product-2.jpg" alt="">
                    <div class="hover-contents">
                        <a href="product-details.html" class="hover-image">
                            <img src="client/image/products/product-1.jpg" alt="">
                        </a>
                        <div class="hover-btns">
                            <a href="cart.html" class="single-btn">
                                <i class="fas fa-shopping-basket"></i>
                            </a>
                            <a href="wishlist.html" class="single-btn">
                                <i class="fas fa-heart"></i>
                            </a>
                            <a href="compare.html" class="single-btn">
                                <i class="fas fa-random"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="price-block">
                    <span class="price">£51.20</span>
                    <del class="price-old">£51.20</del>
                    <span class="price-discount">20%</span>
                </div>
            </div>
        </div>
        <div class="product-list-content">
            <div class="card-image">
                <img src="client/image/products/product-3.jpg" alt="">
            </div>
            <div class="product-card--body">
                <div class="product-header">
                    <a href="#" class="author">
                        Gpple
                    </a>
                    <h3><a href="product-details.html" tabindex="0">Qpple cPad with Retina
                            Display MD510LL/A</a></h3>
                </div>
                <article>
                    <h2 class="sr-only">Card List Article</h2>
                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours
                        of battery life, the new iPod classic lets you enjoy
                        up to 40,000 songs or..</p>
                </article>
                <div class="price-block">
                    <span class="price">£51.20</span>
                    <del class="price-old">£51.20</del>
                    <span class="price-discount">20%</span>
                </div>
                <div class="rating-block">
                    <span class="fas fa-star star_on"></span>
                    <span class="fas fa-star star_on"></span>
                    <span class="fas fa-star star_on"></span>
                    <span class="fas fa-star star_on"></span>
                    <span class="fas fa-star "></span>
                </div>
                <div class="btn-block">
                    <a href="#" class="btn btn-outlined">Add To Cart</a>
                    <a href="#" class="card-link"><i class="fas fa-heart"></i> Add To
                        Wishlist</a>
                    <a href="#" class="card-link"><i class="fas fa-random"></i> Add To
                        Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach