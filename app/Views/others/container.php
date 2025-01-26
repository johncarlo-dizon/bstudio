<ul class="dropdown-menu w-100 " id="content">
             
             <?php 

            
            $activePage =  session()->get("cont");
            if(!isset($activePage)){
              $activePage = 'navbar';
            }

             ?>
           <li class="nav-item">
             <a href="<?=base_url("/getList/navbar")?>" class="nav-link dropdown-item <?php if ($activePage == 'navbar' ) echo 'active'; ?>">Navbar</a>
           </li>

           <li class="nav-item">
             <a href="<?=base_url("/getList/navtab")?>" class="nav-link dropdown-item <?php if ($activePage == 'navtab' ) echo 'active'; ?>">Navbs and Tabs</a>
           </li>
           


           <li class="nav-item">
             <a href="<?=base_url("/getList/accordion")?>" class="nav-link dropdown-item <?php if ($activePage == 'accordion') echo 'active'; ?>">Accordion</a>
           </li>

           <li class="nav-item">
             <a href="<?=base_url("/getList/card")?>" class="nav-link dropdown-item <?php if ($activePage == 'card') echo 'active'; ?>">Card</a>
           </li>
           <li class="nav-item">
             <a href="<?=base_url("/getList/carousel")?>" class="nav-link dropdown-item <?php if ($activePage == 'carousel') echo 'active'; ?>">Carousel</a>
           </li>

 

     
           <li class="nav-item">
             <a href="<?=base_url("/getList/alert")?>" class="nav-link dropdown-item <?php if ($activePage == 'alert') echo 'active'; ?>">Alert</a>
           </li>

           <li class="nav-item">
             <a href="<?=base_url("/getList/modaloffcanvas")?>" class="nav-link dropdown-item <?php if ($activePage == 'modaloffcanvas') echo 'active'; ?>">Modal and Offcanvas</a>
           </li>
         </ul>