<ul class="dropdown-menu w-100 ">
             
             <?php 

            
            $activePage =  session()->get("conts");
            if(!isset($activePage)){
              $activePage = 'table';
            }

             ?>
   
           <li class="nav-item">
             <a href="<?=base_url("/getContent/table")?>" class="nav-link dropdown-item <?php if ($activePage == 'table') echo 'active'; ?>">Table</a>
           </li>

           <li class="nav-item">
             <a href="<?=base_url("/getContent/form")?>" class="nav-link dropdown-item <?php if ($activePage == 'form') echo 'active'; ?>">Form</a>
           </li>

           <li class="nav-item">
             <a href="<?=base_url("/getContent/typography")?>" class="nav-link dropdown-item <?php if ($activePage == 'typography') echo 'active'; ?>">Typography</a>
           </li>

           <li class="nav-item">
             <a href="<?=base_url("/getContent/badgebuttons")?>" class="nav-link dropdown-item <?php if ($activePage == 'badgebuttons') echo 'active'; ?>">Badge Buttons</a>
           </li>

           <li class="nav-item">
             <a href="<?=base_url("/getContent/scrollspy")?>" class="nav-link dropdown-item <?php if ($activePage == 'scrollspy') echo 'active'; ?>">ScrollSpy</a>
           </li>
         </ul>