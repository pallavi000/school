<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">




    <link rel="styleSheet" href="{{asset('style.css')}}" />
    <link rel="styleSheet" href="{{asset('admin/style.css')}}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <meta charset="UTF-8">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</head>

<body>

    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Company</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('course.index')}}">
                    <i class='bx bx-package'></i>
                    <span class="link_name">Course</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{route('course.index')}}">Listing</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('material.index')}}">
                    <i class='bx bx-package'></i>
                    <span class="link_name">Material</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{route('material.index')}}">Material</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('category.index')}}">
                    <i class='bx bx-package'></i>
                    <span class="link_name">Category</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{route('category.index')}}">Category</a></li>
                </ul>
            </li>

            
            <li>
                <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">User</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">User</a></li>
                </ul>
            </li>
           
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name"> {{ Auth::user()->name }}</div>
                    </div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-out'></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </li>
        </ul>
    </div>



    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            @yield('content')
       
    </section>



    <script>

        $(document).ready(function() {
            $('table').DataTable({
                "scrollX": true,
                "order": [[1,'desc']]
            });
        });
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });


    $('.select-search').selectpicker({
        liveSearch: true
    })

    </script>

</body>

</html>