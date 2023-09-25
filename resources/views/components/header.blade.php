   <!-- Section Header -->
   <header>
       <nav>
           <img src="/vendor/assets/logo.png" alt="Logo Red Dead Redemeption 2">
           <div id="mesLiens">
               <ul>
                   <li><a href="/accueil">Accueil</a></li>
                   <li><a href="/histoire">Histoire</a></li>
                   <li><a href="#">Détails <i class="fa fa-chevron-down"></i></a>
                       <ul class="details">
                           <li><a href="/les-personnages">Les personnages</a></li>
                           <li><a href="/les-gangs">Les gangs</a></li>
                           <li><a href="/les-regions">Les régions</a></li>
                       </ul>
                   </li>
                   <li><a href="/blog">Blog</a>
                   <li><a href="/contact">Contact</a></li>
               </ul>
           </div>
           <a href="javascript:void(0);" class="icon" onclick="myFunction()" aria-label="Cliquez sur le bouton pour afficher les différentes pages du site">
               <i class="fa fa-bars"></i>
           </a>
       </nav>
   </header>
   <!-- Fin section Header -->

   <script>
       function myFunction() {
           var x = document.getElementById("mesLiens");
           if (x.style.display === "block") {
               x.style.display = "none";
           } else {
               x.style.display = "block";
           }
       }
   </script>