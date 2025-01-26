<?php

namespace App\Models\Components;
use CodeIgniter\Model;

class NavbarModel extends Model
{
  public function getNavbar($nav)
  {
    $item = [
      'nav1' => 
          '<nav class="navbar navbar-expand-lg navbar-light bg-light  p-2">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
        ',

        'nav2' => 
        '<nav class="navbar navbar-light bg-light p-2">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
          </div>
        </nav>
          ',

        'nav3' => '<nav class="navbar navbar-light bg-light p-2">
                      <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Navbar</span>
                      </div>
                    </nav>
          ',

          
        'nav4' => 
        '<nav class="navbar navbar-light bg-light p-2">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="http://localhost:8080//uploads/logo.png" alt="" width="30" height="24">
            </a>
          </div>
        </nav>
          ',

              
        'nav5' => 
        '
        <nav class="navbar navbar-light bg-light p-2">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="http://localhost:8080//uploads/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Bootstrap
            </a>
          </div>
        </nav>
          ',

          'nav6' => 
          '<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            ',

            'nav7' => 
            '<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              ',

              'nav8' => 
              '<nav class="navbar navbar-light bg-light p-2">
                  <div class="container-fluid">
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
                ',

                'nav9' => 
                '<nav class="navbar navbar-light bg-light p-2">
                  <div class="container-fluid">
                    <a class="navbar-brand">Navbar</a>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
                  ',


                  'nav10' => 
                  '<nav class="navbar navbar-light bg-light p-2">
                  <form class="container-fluid">
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </form>
                </nav>
                    ',

                    'nav11' => 
                    '<nav class="navbar navbar-light bg-light p-2">
                      <div class="container-fluid">
                        <span class="navbar-text">
                          Navbar text with an inline element
                        </span>
                      </div>
                    </nav>
                      ',


                      'nav12' => 
                      '<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
                          <div class="container-fluid">
                            <a class="navbar-brand" href="#">Navbar w/ text</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Pricing</a>
                                </li>
                              </ul>
                              <span class="navbar-text">
                                Navbar text with an inline element
                              </span>
                            </div>
                          </div>
                        </nav>
                        ',
                        'nav13' =>
                        '
                        <nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
                            <div class="container-fluid">
                              <a class="navbar-brand" href="#">Navbar scroll</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarScroll">
                                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                  <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Link
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                                  </li>
                                </ul>
                                <form class="d-flex">
                                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                  <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                              </div>
                            </div>
                          </nav>
                        ',

                        'nav14' => 
                        '
                        <nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <a class="navbar-brand" href="#">Hidden brand</a>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                              </li>
                            </ul>
                            <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>
                        '


  ];

  echo $nav;
  

  
  // Check if the provided $nav exists in the $item array and return the corresponding value.
  return isset($item[$nav]) ? $item[$nav] : null;

}
}