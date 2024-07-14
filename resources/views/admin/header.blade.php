<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Tutup<i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Cari</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Gro</strong><strong>sirku</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">G</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          
            <!-- Log out               -->
            <div class="list-inline-item logout">                   

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombol Logout</title>
    <style>
        .logout-button {
            background-color: #ff5e57;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .logout-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background-color: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%) rotate(45deg);
            transition: all 0.5s ease;
        }

        .logout-button:hover::before {
            width: 0;
            height: 0;
        }

        .logout-button:hover {
            background-color: #ff3e30;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .logout-button:active {
            transform: scale(0.95);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <input type="submit" value="Logout" class="logout-button">
    </form>
</body>
</html>

            </div>
          </div>
        </div>
      </nav>
    </header>