<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belfius Banking</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
</head>

<body>
    <!-- LOGIN Page -->
    <section class="login-page">
        <section class="login-form">
            <header class="login-header">
                <a href="#">
                    <img src="assets/images/bank-logo.png" alt="" />
                </a>
                <h2 class="login-msg primary-h2">
                    <span class="in-msg">Log in </span>to get started
                </h2>
            </header>
            <section class="btn-container">
                <button class="btn btn-primary first-login-btn">Login</button>
                <button class="btn btn-secondary first-signup-btn">SignUp</button>
            </section>
            <!-- LOGIN -->
            <section class="login hidden">
                <form>
                    <input type="text" placeholder="username" class="username" />
                    <input type="password" placeholder="password" class="pass" />
                </form>
                <section class="btn-container">
                    <button class="btn btn-primary second-login-btn">Login</button>
                    <button class="btn btn-secondary back-btn1">BACK</button>
                </section>
            </section>
            <!-- SIGN UP -->
            <section class="signup hidden">
                <form>
                    <input type="email" placeholder="Email" />
                    <input type="text" placeholder="username" />
                    <input type="password" placeholder="password" />
                    <input type="password" placeholder="check password" />
                    <div class="selection-menu">
                        <h5>Currency :</h5>
                        <select name="currencies" id="currencies">
                            <option value="USD">USD$</option>
                            <option value="EUR">EUR </option>
                            <option value="IRR">IRR</option>
                        </select>
                    </div>
                </form>
                <section class="btn-container">
                    <button class="btn btn-primary second-signup-btn">SignUp</button>
                    <button class="btn btn-secondary back-btn2">BACK</button>
                </section>
            </section>
        </section>
    </section>
    <!-- USER Panel -->
    <section class="panel hidden">
        <!-- Panel Navbar -->
        <nav class="panel-nav">
            <div class="panel-inner-nav">
                <div>
                    <h3>Welcome, <span class="user-name">Name</span></h3>
                </div>
            </div>
        </nav>

        <!-- Panel Contents -->
        <section class="panel-contents">
            <!-- ABOUT -->
            <section class="panel-about">
                <div class="left-about">
                    <h3>Current Balance</h3>
                    <h5>As of <span class="date">2021/03/07</span></h5>
                </div>
                <h2 class="right-about">2,542.00 €</h2>
            </section>

            <!-- TOOLS -->
            <section class="panel-all-tools">
                <!-- TOOLS > LEFT -->
                <section class="left-history">
                    <!-- HISTORY -->
                    <div class="left-history-content">
                        <div class="his-content-left">
                            <p>
                                <span class="his-num">8 </span><span class="kind-of-his withdraw">withdraw</span>
                            </p>
                            <p class="his-date">2021/03/07</p>
                        </div>
                        <p class="n-money">- 1,000 €</p>
                    </div>
                    <div class="left-history-content">
                        <div class="his-content-left">
                            <p>
                                <span class="his-num">7 </span><span class="kind-of-his deposit">DEPOSIT</span>
                            </p>
                            <p class="his-date">2021/03/07</p>
                        </div>
                        <p class="n-money">1,300 €</p>
                    </div>
                    <div class="left-history-content">
                        <div class="his-content-left">
                            <p>
                                <span class="his-num">6 </span><span class="kind-of-his deposit">DEPOSIT</span>
                            </p>
                            <p class="his-date">2021/03/07</p>
                        </div>
                        <p class="n-money">400 €</p>
                    </div>
                    <div class="left-history-content">
                        <div class="his-content-left">
                            <p>
                                <span class="his-num">5 </span><span class="kind-of-his withdraw">withdraw</span>
                            </p>
                            <p class="his-date">2021/03/07</p>
                        </div>
                        <p class="n-money">- 300 €</p>
                    </div>
                    <div class="left-history-content">
                        <div class="his-content-left">
                            <p>
                                <span class="his-num">4 </span><span class="kind-of-his withdraw">withdraw</span>
                            </p>
                            <p class="his-date">2021/03/07</p>
                        </div>
                        <p class="n-money">- 50 €</p>
                    </div>
                    <div class="left-history-content">
                        <div class="his-content-left">
                            <p>
                                <span class="his-num">3 </span><span class="kind-of-his deposit">DEPOSIT</span>
                            </p>
                            <p class="his-date">2021/03/07</p>
                        </div>
                        <p class="n-money">942 €</p>
                    </div>
                    <div class="left-history-content">
                        <div class="his-content-left">
                            <p>
                                <span class="his-num">2 </span><span class="kind-of-his withdraw">withdraw</span>
                            </p>
                            <p class="his-date">2021/03/07</p>
                        </div>
                        <p class="n-money">- 550 €</p>
                    </div>
                    <div class="left-history-content">
                        <div class="his-content-left">
                            <p>
                                <span class="his-num">1 </span><span class="kind-of-his deposit">DEPOSIT</span>
                            </p>
                            <p class="his-date">2021/03/07</p>
                        </div>
                        <p class="n-money">1800 €</p>
                    </div>
                </section>
                <!-- TOOLS > RIGHT -->
                <section class="panel-tools">
                    <!-- TRANSFER MONEY -->
                    <section class="tools transfer">
                        <form>
                            <label for="transfer">Transfer Money</label>
                            <div>
                                <div>
                                    <input type="text" name="id" class="input-tools input-id" placeholder="ID" />
                                </div>
                                <div>
                                    <input type="number" name="amount" class="input-tools transfer-input-amount" placeholder="Amount" />
                                </div>
                                <button type="submit" class="btn-tools">Transfer ✔️</button>
                            </div>
                        </form>
                    </section>
                    <!-- REQUEST LOAN -->
                    <section class="tools request">
                        <form action="#">
                            <label for="transfer" class="loan-error">Request Loan</label>
                            <div>
                                <div>
                                    <input type="number" name="id" class="input-tools req-input-amount" placeholder="Amount" />
                                </div>
                                <button type="submit" class="btn-tools">Request ✔️</button>
                            </div>
                        </form>
                    </section>
                    <!-- CONFIRM LOGOUT -->
                    <section class="tools confirm-logout">
                        <form action="#">
                            <label for="confirm-logout" class="logout-error">Close Account</label>
                            <div>
                                <div>
                                    <input type="text" name="user" class="input-tools user-confirm" placeholder="Confirm User" />
                                </div>
                                <div>
                                    <input type="password" name="pass" class="input-tools pass-confirm" placeholder="Confirm Pass" />
                                </div>
                                <button type="submit" class="btn-tools logout-btn">
                                    Close ✔️
                                </button>
                            </div>
                        </form>
                    </section>
                </section>
            </section>

            <!-- STATISTICS -->
            <section class="panel-statistics">
                <!-- STATISTICS LEFT -->
                <div class="statistics-left">
                    <p>in<span class="sta-amount income">4,442 €</span></p>
                    <p>out<span class="sta-amount out">1,900 €</span></p>
                    <p>interest<span class="sta-amount interest">1,221 €</span></p>
                    <button class="btn sort-btn">&darr;sort</button>
                </div>

                <!-- STATISTICS RIGHT -->
                <div class="statistics-right">
                    <p>You will be logged out in <span class="timer">09:44</span></p>
                </div>
            </section>
        </section>
    </section>
    <script src="assets/js/app.js"></script>
</body>

</html>