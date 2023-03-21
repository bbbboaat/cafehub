<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafehub</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>




<header>
    <a href="#" class="logo"><i class="fa-sharp fa-solid fa-mug-saucer"></i>CAFEHUB</a>
    <div id="menu-bar" class="fas fa-bars"></div>
    <ul class="navbar">
        <a href="#home">HOME</a>
        <a href="#speciality">SPECIALITY</a>
        <a href="#popular">POPULAR</a>
        <a href="#menu">MENU</a>


        @if (Route::has('login'))

                    @auth

                        <a href="{{ url('/dashboard') }}" class="btn">Profile</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


    </ul>


</header>


<section class="home" id="home">
    <div class="content">
        <h3>Lorem ipsum dolor sit.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut accusamus eum modi voluptatibus, repellat repudiandae excepturi reiciendis perspiciatis harum minima iure cupiditate, alias labore? Laudantium ullam molestiae quaerat blanditiis! Pariatur.</p>
        <a href="#" class="btn">order now</a>
    </div>
    <div class="image">
            <img src="image/coffee.png" alt="">
        </div>



</section>



<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span></h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="image/rc-1.png" alt="">
            <div class="content">
                <img src="image/r-1.png" alt="">
                <h3>drink</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam aut quos dolores quibusdam cumque soluta voluptates recusandae architecto, mollitia quasi.</p>
            </div>
        </div>

        <div class="box">
            <img class="image" src="image/rc-2.png" alt="">
            <div class="content">
                <img src="image/r-2.png" alt="">
                <h3>drink</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam aut quos dolores quibusdam cumque soluta voluptates recusandae architecto, mollitia quasi.</p>
            </div>
        </div>

        <div class="box">
            <img class="image" src="image/rc-1.png" alt="">
            <div class="content">
                <img src="image/r-1.png" alt="">
                <h3>drink</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam aut quos dolores quibusdam cumque soluta voluptates recusandae architecto, mollitia quasi.</p>
            </div>
        </div>

    </div>

</section>


<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> food</h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> 99 THB</span>
            <img src="image/p-1.png" alt="">
            <h3>Caramel Macchiato</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="" class="btn">order now</a>
        </div>

        <div class="box">
            <span class="price"> 99 THB</span>
            <img src="image/p-3.png" alt="">
            <h3>Panacosta</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="" class="btn">order now</a>
        </div>

        <div class="box">
            <span class="price"> 99 THB</span>
            <img src="image/p-2.png" alt="">
            <h3>Red Velvet</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="" class="btn">order now</a>
        </div>
    </div>
</section>

<section class="menu" id="menu">

    <h1 class="heading">our <span>menu </span>gallery</h1>

    <div class="box-container">

        <div class="box">
            <img src="image/m-1.png" alt="">
            <div class="content">
                <h3>Macchiato</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, optio.</p>
                <a href="" class="btn">order now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/m-2.png" alt="">
            <div class="content">
                <h3>Cappucino</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, optio.</p>
                <a href="" class="btn">order now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/m-3.png" alt="">
            <div class="content">
                <h3>choco latte macchiato</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, optio.</p>
                <a href="" class="btn">order now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/m-4.png" alt="">
            <div class="content">
                <h3>banoffee</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, optio.</p>
                <a href="" class="btn">order now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/m-5.png" alt="">
            <div class="content">
                <h3>panacosta</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, optio.</p>
                <a href="" class="btn">order now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/m-6.png" alt="">
            <div class="content">
                <h3>Red Velvet</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, optio.</p>
                <a href="" class="btn">order now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/m-7.png" alt="">
            <div class="content">
                <h3>panacosta</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, optio.</p>
                <a href="" class="btn">order now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/m-8.png" alt="">
            <div class="content">
                <h3>Red Velvet</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, optio.</p>
                <a href="" class="btn">order now</a>
            </div>
        </div>

    </div>

</section>



<section class="order" id="order">

    <h1 class="heading"><span>order</span> now</h1>

    <div class="row">

        <div class="image">
            <img src="image/order.png" alt="">
        </div>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <!-- <div class="inputBox">
                <input type="email" placeholder="email">
            </div> -->

            <div class="inputBox">
                <input type="text" placeholder="phone">
                <input type="text" placeholder="note">

            </div>

            <!-- <div class="inputBox">
                <input type="text" placeholder="note">
            </div> -->

            <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="order now" class="btn">
        </form>

    </div>

</section>


<section class="footer">

    <div class="social">
        <a href="" class="btn"><i class="fa-brands fa-facebook"></i></a>
        <a href="" class="btn"><i class="fa-brands fa-instagram"></i></a>
        <a href="" class="btn"><i class="fa-brands fa-twitter"></i></a>
        <a href="" class="btn"><i class="fa-brands fa-line"></i></a>
    </div>

</section>


<script src="js/script.js"></script>
</body>
</html>
