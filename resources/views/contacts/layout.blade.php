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

        a {
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

        .card:hover img,
        .card:hover .content {
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

        #card-name {
            font-size: 30px;
            color: white;
            font-weight: 600;
        }

        #card-phone,
        #card-address {
            color: rgb(200, 200, 200);
        }

        .content {
            position: absolute;
            bottom: 10px;
            left: 10px;
            z-index: 5;
            transition: all 0.3s ease;
        }

        .error-icon {
            color: #00000055;
            font-size: 150px;
            margin-left: 10px;
        }

        .error-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
            text-align: center;
        }

        .split {
            height: 100%;
            width: 58%;
            position: fixed;
            z-index: 1;
            top: 0;
            overflow-x: hidden;
        }

        .image-container {
            left: 70px;
            width: 40%;
            overflow: hidden;
        }

        .image {
            height: inherit;
            width: 100%;
            filter: blur(5px);
            transform: scale(1.1);
        }

        .details {
            right: -70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .show-title {
            font-size: 120px;
        }

        .show-text {
            font-size: 25px;
        }

        .show-text-title {
            font-size: 20px;
            font-weight: 600;
            color: #4d4d4d;
            border-bottom: #737373 solid 1px;
        }

        .show-btn {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            z-index: 50;
            font-size: 20px;
            color: white;
            text-shadow: #00000080 0px 0px 10px;
            transition: all 0.1s ease;
        }

        .show-btn:hover {
            font-size: 22px;
        }

        .next {
            right: 20px;
            color: black;
        }

        .popup-container {
            position: fixed;
            background-color: rgba(0, 0, 0, 0.3);
            align-items: center;
            justify-content: center;
            display: none;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            transition: opacity 0.3s ease;
            z-index: 40;
        }

        .popup {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 30px 50px;
            text-align: center;
            width: 390px;
            max-width: 100%;
            z-index: 39;
        }

        .input-container {
            position: relative;
            padding: 0;
            margin: 5px;
            border: none;
            overflow: visible;
        }

        .input-field {
            padding: 12px 10px 8px;
            border: none;
            border-bottom: 1px solid #000;
            font-size: 20px;
            outline: none;
            margin-top: 10px;
        }

        label {
            position: absolute;
            transform-origin: 0 -150%;
            transition: transform 300ms ease;
            font-size: 20px;
            color: #607D8B;
            top: 20px;
            left: 10px;
            color: #4d4d4d;
            pointer-events: none;
        }

        .input-field:focus+label {
            transform: scale(0.6);
        }

        .input-field:not(:placeholder-shown)+label {
            transform: scale(0.6);
        }
    </style>
</head>

<body>
    <nav class="sidebar">

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/contact">
                            <i class='bx bx-home-alt icon'></i>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-collection icon'></i>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/settings">
                            <i class='bx bx-cog icon'></i>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/about">
                            <i class='bx bx-info-circle icon'></i>
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