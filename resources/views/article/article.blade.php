@extends('layout.master')

@section('title' , 'Article')

@push('top-page-scripts')

@endpush

@section('content')
<!-- jumbotron -->
<section id="jumbotron">
    <div class="container">
        <div class="text-header text-center">
            <h1>Throughts, idea</h1>
            <h1>and insight <span><img src="assets/images/img-pattern-header.png" alt="img pattern"
                        class="img-header"></span> for you</h1>
        </div>
        <div class="sec-search">
            <div class="input-group rounded-pill overflow-hidden border w-50">
                <span class="input-group-text bg-white border-0 ps-4" id="basic-addon1">
                    <img src="assets/images/search-normal.svg" alt="search">
                </span>
                <input type="search" class="form-control hide-focus border-0"
                    placeholder="Search title or keyword here">
            </div>
            <button class="btn-search">Explore now</button>
        </div>
    </div>
</section>

<!-- article today -->
<section id="article-today">
    <div class="container sec-header-project">
        <div class="row d-flex align-items-center">
            <div class="col col-md-6">
                <img src="assets/images/img-pattern-product.png" alt="pattern-produt" class="img-project">
                <h3 class="text-title">Article of the day</h3>
            </div>
            <div class="col col-md-6">
                <h2 class="title">Article for you today, find out now!</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card-article">
                    <div class="card-img-highlight">
                        <img src="assets/images/img-article-1.png" alt="img article" class="img-article">
                        <div class="cat-article">
                            <p>Case study</p>
                        </div>
                    </div>
                    <div class="card-body-highlight">
                        <div class="card-title">
                            <h5>Know your user better with User Persona</h5>
                        </div>
                        <div class="card-text">
                            <p>Pengembangan aplikasi atau website tentu tidak hanya memperhatikan aspek antarmuka
                                yang baik namun juga harus disertai dengan pengalaman menyenangkan dari pengguna.
                                Untuk mencapai hal tersebut tentu kita butuh pedoman salah satunya User Persona.</p>
                        </div>
                    </div>
                    <a href="#" class="btn-read">Explore now</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card-article mb-5">
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="card-img-right">
                                <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="card-body-right">
                                <div class="cat-article-right">
                                    <p>Case study</p>
                                </div>
                                <div class="card-title">
                                    <h5>Know your user better with User Persona</h5>
                                </div>
                            </div>
                            <a href="#" class="btn-read">Explore now</a>
                        </div>
                    </div>
                </div>
                <div class="card-article mb-5">
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="card-img-right">
                                <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="card-body-right">
                                <div class="cat-article-right">
                                    <p>Case study</p>
                                </div>
                                <div class="card-title">
                                    <h5>Know your user better with User Persona</h5>
                                </div>
                            </div>
                            <a href="#" class="btn-read">Explore now</a>
                        </div>
                    </div>
                </div>
                <div class="card-article mb-5">
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="card-img-right">
                                <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="card-body-right">
                                <div class="cat-article-right">
                                    <p>Case study</p>
                                </div>
                                <div class="card-title">
                                    <h5>Know your user better with User Persona</h5>
                                </div>
                            </div>
                            <a href="#" class="btn-read">Explore now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- all article -->
<section id="all-article">
    <div class="container">
        <div class="sec-all-article">
            <h3 class="text-title text-center">Article of the day</h3>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card-article-all">
                        <div class="card-img-all">
                            <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            <div class="cat-article-all">
                                <p>Case study</p>
                            </div>
                        </div>
                        <div class="card-body-all">
                            <div class="card-title">
                                <h5>Know your user better with User Persona</h5>
                            </div>
                        </div>
                        <a href="#" class="btn-read">Explore now</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card-article-all">
                        <div class="card-img-all">
                            <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            <div class="cat-article-all">
                                <p>Case study</p>
                            </div>
                        </div>
                        <div class="card-body-all">
                            <div class="card-title">
                                <h5>Know your user better with User Persona</h5>
                            </div>
                        </div>
                        <a href="#" class="btn-read">Explore now</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card-article-all">
                        <div class="card-img-all">
                            <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            <div class="cat-article-all">
                                <p>Case study</p>
                            </div>
                        </div>
                        <div class="card-body-all">
                            <div class="card-title">
                                <h5>Know your user better with User Persona</h5>
                            </div>
                        </div>
                        <a href="#" class="btn-read">Explore now</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card-article-all">
                        <div class="card-img-all">
                            <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            <div class="cat-article-all">
                                <p>Case study</p>
                            </div>
                        </div>
                        <div class="card-body-all">
                            <div class="card-title">
                                <h5>Know your user better with User Persona</h5>
                            </div>
                        </div>
                        <a href="#" class="btn-read">Explore now</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card-article-all">
                        <div class="card-img-all">
                            <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            <div class="cat-article-all">
                                <p>Case study</p>
                            </div>
                        </div>
                        <div class="card-body-all">
                            <div class="card-title">
                                <h5>Know your user better with User Persona</h5>
                            </div>
                        </div>
                        <a href="#" class="btn-read">Explore now</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card-article-all">
                        <div class="card-img-all">
                            <img src="assets/images/img-article-2.png" alt="img article" class="img-article">
                            <div class="cat-article-all">
                                <p>Case study</p>
                            </div>
                        </div>
                        <div class="card-body-all">
                            <div class="card-title">
                                <h5>Know your user better with User Persona</h5>
                            </div>
                        </div>
                        <a href="#" class="btn-read">Explore now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('page-scripts')

@endpush