@extends('layouts.master')

@section('title')
Freelancer
@endsection

@section('navigation')
<nav class="navbar navbar-expand-md  fixed-top mainmenu">
    <a class="navbar-brand" href="index.php"><img src="../images/logo2.png" height="30" alt="Logo"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vacancies.php">Заказы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="help.php">Помощь</a>
            </li>
        </ul>
        <form class="form-inline">
            <input class="form-control searchbox" type="text" placeholder="Search" aria-label="Search">
        </form>
        <div class="content">
            <!-- notification message -->
            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) { ?>
                <div class="dropdown">
                    <button class="btn btn-outline-success"><?php echo $_SESSION['username']; ?></button>
                    <div class="dropdown-content">
                        <?php if ($_SESSION['role_id']==3){?>
                            <a href="profile.php">Профиль</a>
                            <a href="add_vacancy.php">Добавить заказ</a>
                            <a href="myvacancies.php">Мои заказы</a>
                            <a href="index.php?logout='1'" style="color: red;">Выход</a>
                        <?php }else if($_SESSION['role_id']==4){?>
                            <a href="profile.php">Профиль</a>
                            <a href="searchvacancy.php">Найти заказ</a>
                            <a href="myresponses.php">Мои отклики</a>
                            <a href="index.php?logout='1'" style="color: red;">Выход</a>
                        <?php }?>
                    </div>
                </div>
            <?php }else{  ?>
                <?php ?>
                <a class="btn btn-outline-danger nav-link" href="login.php">Вход</a>
            <?php  } ?>
        </div>
    </div>
</nav>
@endsection

@section('content')
<!--Home page style-->
<header class="home-bg">
    <div class="overlay-img">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="header-details">
                        <h1>intelligence<br> is nothing without ambition<i class="fa fa-circle"></i></h1>
                        <p>We’re small but impressive creative agency.</p>
                        <button class="btn btn-default">Read More</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="login">
                        <h1>Воити</h1>

                        <form method="post" action="/Auth">

                                  <div class="field-wrap">
                                    <label>
                                      Логин<span class="req">*</span>
                                  </label>
                                  <input type="text" name="username" required autocomplete="off"/>
                              </div>

                              <div class="field-wrap">
                                <label>
                                  Пароль<span class="req">*</span>
                              </label>
                              <input type="password" name="password" required autocomplete="off"/>
                          </div>

                          <p class="forgot"><a href="#">Забыли пароль?</a></p>

                          <button type="submit" name="login_user" class="button button-block"/>Вход</button><br>
                          <span class="home"><a  href="register.php">Нет аккаунта? Зарегестрируйтесь</a></span>
                      </form>
          </div>
      </div>
  </div>
</div>
</div>  
</header>

<!-- Sections -->
<section id="promotion-area" class="sections">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-sm-4 col-sm-12 col-xs-12">
                <div class="promotion">

                    <h1>Peace<br> of Mind<i class="fa fa-circle"></i></h1>
                    <p>You’re safe with us. The privacy and security of your financial information is our top priority.</p>
                    <a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>

                </div>
            </div>

            <div class="col-sm-4 col-sm-12 col-xs-12">
                <div class="promotion">

                    <h1>Free<br>Actually free<i class="fa fa-circle"></i></h1>
                    <p>You’re safe with us. The privacy and security of your financial information is our top priority.</p>
                    <a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>

                </div>
            </div>

            <div class="col-sm-4 col-sm-12 col-xs-12">
                <div class="promotion">

                    <h1>Simple<br> payments<i class="fa fa-circle"></i></h1>
                    <p>You’re safe with us. The privacy and security of your financial information is our top priority.</p>
                    <a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>

                </div>
            </div>

        </div>
    </div>     
</section>

<section id="portfolio-area" class="sections">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-sm-6 col-sm-12 col-xs-12">
                <div class="portfolio">
                    <img src="../images/computer.png" alt="" />
                </div>
            </div>

            <div class="col-sm-5 col-sm-12 col-xs-12">
                <div class="portfolio">

                    <div class="item">
                        <h1>Portfolio<i class="fa fa-circle"></i></h1>
                        <h5>We are small, but strong team</h5>
                        <p>The same debit card you use to buy coffee lets deposit money straight to your bank account.</p>
                        <p>You’re safe with us. The privacy and security of your financial information is our top priority.</p>
                        <a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
                    </div>

                </div>
            </div>

        </div>
    </div> <!-- /container -->       
</section>


<section id="our-team" class="sections">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="team-heading">
                <h1>Our Team<i class="fa fa-circle"></i></h1>
                <p></p>
            </div>

            <div class="team-member">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="team">
                            <img src="../images/man2-2.jpg" alt="" />
                            <div class="team-info">
                                <h2>Adilet</h2>
                                <h5>Web Developer</h5>
                                <p>Coffee lover.  Chess player. Video maker.</p>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="team">
                            <img src="../images/man1-1.jpg" alt="" />
                            <div class="team-info">
                                <h2>Sanzhar</h2>
                                <h5>Web Developer</h5>
                                <p>Coffee lover.  Football player. iPhone fan.</p>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="team">
                            <img src="../images/man3-3.jpg" alt="" />
                            <div class="team-info">
                                <h2>Max</h2>
                                <h5>Web Designer</h5>
                                <p>Coffee lover.  Always on bike. Xiomi fan.</p>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="team-more">
                    <a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
                </div>
                
            </div>  

        </div>

    </div> <!-- /container -->       
</section>

<div class="scroll-top">
    <div class="scrollup">
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>

@endsection


@section('footer')
<footer>
    <div class="container">
        <hr>
        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="social-network">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="copyright">
                    <p>© 2019 freelancer.kz - All Right Reserved</p>
                </div>
            </div>

        </div>
    </div>
</footer>

@endsection