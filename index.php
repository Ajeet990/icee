<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Sudha Ice-cream</title>
</head>

<body>
    <?php include('header.html') ;?>
    <?php
      if(isset($_POST['submit']))
      {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your record has been submitted, we will contact you soon....wait for our response
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    ?>
    <?php include('carousel.html') ;?>

    <div class="container my-4">
        <marquee behavior="scroll" direction="left">
            <h2 style="font-family">Ice-creams Recipe</h2>
        </marquee>
        <h4 class="my-4">
            'How to make ice cream at home?’ will never be a worry for you. Every ice cream recipe on our page is a
            result of pure love for ice cream. From classics to world favourites, each ice cream recipe will make you
            hunger for an extra scoop. For every celebration, big or small, whip up your favourite batch and enjoy. We
            have also got a variety of other chilled recipes for you to try and taste. Check them out and enjoy!</h4>


        <div class="my-2 bg-warning ps-6 ">
            <h3>Sample of Our product</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 bg-warning">

            <div class="col">
                <div class="card">
                    <img src="img/ice1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/ice2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/ice3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/ice4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <div class="bg-primary">
        <div class="container">
          <a href="" class="text-light">Company Policy</a>||<a href="" class="text-light">AboutUs</a>||<a href="" class="text-light">ContactUs</a>
            <ul >
                <li>
                    <p>Sudha ice-cream is not an E-Commerce entity. The information on this website is intended to provide
                        general information about our product for the benefit of consumers.</p>
                </li>
                <li>
                    <p>By Clicking on Buy From Retailers, you will be re directed to the merchant site to complete your
                        purchase.</p>
                </li>
                <li>Address : Belpati Mandir Rd, Kalaiya 44400, Nepal</li>
                <li>Phone No : +977 980-4208767</li>
                <li>Rating : 4.7</li>
            </ul>
        </div>
    </div>
</body>

</html>