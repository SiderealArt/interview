<html>

<head>
    <title>Laravel</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Google Font Import - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --body-color: #E4E9F7;
            --sidebar-color: #FFF;
            --primary-color: #695CFE;
            --primary-color-light: #F6F5FF;
            --toggle-color: #DDD;
            --text-color: #707070;
            --tran-03: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.3s ease;
            --tran-05: all 0.3s ease;
        }

        body {
            background-color: var(--body-color);
            transition: var(--tran-05);
        }

        ::selection {
            background-color: var(--primary-color);
            color: #fff;
        }
        
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 70px;
            padding: 5px 6px;
            background: var(--sidebar-color);
            transition: var(--tran-05);
        }

        .sidebar li {
            height: 50px;
            list-style: none;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .sidebar .icon {
            min-width: 60px;
            border-radius: 6px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .sidebar .text,
        .sidebar .icon {
            color: var(--text-color);
            transition: var(--tran-03);
        }

        .sidebar .text {
            font-size: 17px;
            font-weight: 500;
            white-space: nowrap;
            display: none;
            z-index: 55;
        }

        .sidebar li a {
            list-style: none;
            height: 100%;
            background-color: transparent;
            display: flex;
            align-items: center;
            height: 100%;
            width: 100%;
            border-radius: 6px;
            text-decoration: none;
            transition: var(--tran-03);
        }

        .sidebar li a:hover {
            background-color: var(--primary-color);
        }

        .sidebar li a:hover .icon,
        .sidebar li a:hover .text {
            color: var(--sidebar-color);
        }

        .sidebar .menu-bar {
            height: calc(100% - 25px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-y: scroll;
        }

        .menu-bar::-webkit-scrollbar {
            display: none;
        }

        .home {
            position: absolute;
            top: 0;
            top: 0;
            left: 90px;
            height: 100vh;
            width: calc(100% - 90px);
            background-color: var(--body-color);
            transition: var(--tran-05);
        }

        .home .text {
            font-size: 30px;
            font-weight: 500;
            color: var(--text-color);
            padding: 12px 60px;
        }

        body.dark .home .text {
            color: var(--text-color);
        }
    </style>
</head>

<body>
    <nav class="sidebar">

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text">Logout</span>
                    </a>
            </div>
        </div>
    </nav>
    <div class="home">
        @yield('content')
    </div>
</body>

</html>