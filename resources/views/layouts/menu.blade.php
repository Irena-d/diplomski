<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="css\menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
    <nav>
        {{-- home --}}
        <div class="dropdown">
            <button class="dropbtn">
            <a href="{{route('home.index')}}" class="menuu">Home</a>
            </button>
        </div>
        {{-- products --}}
        <div class="dropdown">
            <button class="dropbtn">Products
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/products">Product1</a>
                <a href="/products">Product2</a>
            </div>
          </div>
        {{-- services --}}
        <div class="dropdown">
            <button class="dropbtn">Services
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/services">Service1</a>
                <a href="/services">Service2</a>
            </div>
          </div>
        {{-- contact --}}
        <div class="dropdown">
            <button class="dropbtn">
            <a href="{{route('home.contact')}}" class="menuu">Contact</a>
            </button>
        </div>
    </nav>
    </div>
</body>
</html>
