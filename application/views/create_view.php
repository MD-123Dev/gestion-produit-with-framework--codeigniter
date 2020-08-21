<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark primary-color">


        <a class="navbar-brand" href="#">Navbar</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="basicExampleNav">


            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

            </ul>



        </div>


    </nav>


    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Create a Produit</h2>
            </div>
            <div class="card-body">
                <?php if (!empty($message)) : ?>

                    <div class="alert alert-success">
                        <?= $message; ?>
                    </div>
                <?php endif; ?>

            </div>
            <form method="post" action="<?php echo base_url('product/create'); ?>">

                <div class="form-group">
                    <label for="name">Nom Produit :</label>
                    <input type="text" name="product_name" id="product_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Prix : </label>
                    <input type="text" name="prix" id="prix" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Category :</label>
                    <input type="text" name="category" id="category" class="form-control">
                </div>
                
                  
                   
               
            
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Create a Produit</button>
        </div>
        
        </form>
    </div>
    </div>


</body>

<footer class="page-footer font-small blue">


    <div class="footer-copyright text-center py-3">2020

    </div>


</footer>


</html>