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

        body {
            background-color: #f5edfc;
            transition: all 0.3s ease;
        }
        a{
            text-decoration: none;
        }
        ::selection {
            background-color: #951cff;
            color: #fff;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 70px;
            padding: 5px 6px;
            background: white;
            transition: all 0.3s ease;
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

        .sidebar .icon {
            color: gray;
            transition: all 0.3s ease;
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
            transition: all 0.3s ease;
        }

        .sidebar li a:hover {
            background-color: #6f31d4;
        }

        .sidebar li a:hover .icon {
            color: white;
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
            transition: all 0.3s ease;
        }

        .card {
            height: 200px;
            width: 300px;
            box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
            margin: 1.5rem;
            border-radius: 20px;
            position: relative;
            transition: all 0.3s ease;
        }

        .card img {
            width: inherit;
            height: inherit;
            border-radius: 20px;
            filter: brightness(70%);
            object-fit: cover;
            position: absolute;
            transition: all 0.3s ease;
            z-index: 3;
        }

        .card-list {
            display: flex;
            flex-wrap: wrap;
        }

        .bt-add-new {
            position: absolute;
            bottom: 40px;
            right: 40px;
            background-color: #695CFE;
            border-radius: 25px;
            padding: 10px 20px;
            text-align: center;
        }

        .bt-add-new-link {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: 600;
        }

        .action {
            width: 260px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
            text-align: center;
            z-index: 30;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .card:hover .action {
            opacity: 1;
        }

        .card:hover img, .card:hover .content {
            filter: brightness(40%);
        }

        .action button {
            width: 65px;
            padding: 10px;
            background-color: #ffffff00;
            border-radius: 10px;
            color: white;
            border: #e30000 solid 2px;
            transition: all 0.3s ease;
        }

        .action button:hover {
            background-color: #e30000;
        }

        .action .view {
            border: #00d138 solid 2px;
        }

        .action .view:hover {
            background-color: #00d138;
        }

        .action .edit {
            border: #0077ed solid 2px;
        }

        .action .edit:hover {
            background-color: #0077ed;
        }

        #name {
            font-size: 30px;
            color: white;
            font-weight: 600;
        }

        #phone, #address {
            color: rgb(200, 200, 200);
        }

        .content {
            position: absolute;
            bottom: 10px;
            left: 10px;
            z-index: 5;
            transition: all 0.3s ease;
        }

        .error-icon{
            color: #00000055;
            font-size: 150px;
            margin-left: 10px;
        }

        .error-container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
            text-align: center;
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
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <a href="#">
                    <i class='bx bx-log-out icon'></i>
                </a>
            </div>
        </div>
    </nav>
    <div class="home">
        @yield('content')
    </div>
</body>

</html>