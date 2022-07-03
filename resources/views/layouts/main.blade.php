<!DOCTYPE html>

<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Packt</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

            </div>
        </div>
    </nav>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">PACKT PUBLISHING</h1>
            <p class="lead text-muted mb-0">
                Founded in 2004 in Birmingham, UK, Packt's mission is to help the world put software to work in new
                ways, through the delivery of effective learning and information services to IT professionals.

                Working towards that vision, we have published over 6,500 books and videos so far, providing IT
                professionals with the actionable knowledge they need to get the job done - whether that's specific
                learning on an emerging technology or optimizing key skills in more established tools.

                As part of our mission, we have also awarded over $1,000,000 through our Open Source Project Royalty
                scheme, helping numerous projects become household names along the way.

            </p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a>Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories
                    </div>
                    <ul class="list-group category_block">
                        @foreach ($mainCategories as $category)
                            <li class="list-group-item">{{ $category }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @yield('main_content')

        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @yield('scripts')
</body>

</html>
