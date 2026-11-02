<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détaille</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italic:400,700&display=swap">


     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
     {{-- <link rel="stylesheet" href="/ressourees/css/app.css"> --}}
</head>

<style>
        @media screen and (max-width: 1200px) {
            /* Main */
        
             .main-container .insights {
                background-color: #EEBF6D;
                grid-template-columns: 1fr;
            } 
        
            .main-container .recent-orders {
                position: absolute;
                width: 85%;
                padding-bottom: 4rem;
            }
        
            /* Sidebar */
            .aside-header .brand {
                padding-left: 1px;
            }
        
            .brand h3 {
                display: none;
            }
            .sidebar .item span:not(.material-icons-sharp) {
                display: none;
            }
        
            .sidebar .item span.message-count {
                display: flex;
            }
        
           
        
            .list-items li:last-child {
                position: initial;
                margin-top: 4rem;
            }
        }
        
        /* Media 768px */
        @media screen and (max-width: 768px) {
            /* Sidebar */
             .main-sidebar {
position: fixed;
top: 0;
left: 0;
width: 320px;
height: 100%;
background-color: var(--white);
padding: 20px;
z-index: 1000;
transition: transform 0.3s ease-in-out;
transform: translateX(-100%);
}
        
        
            .aside-header .close {
                display: inline;
                padding: 4px;
                transition: 0.3s ease-in-out;
            }
        
            .aside-header .close:hover {
                cursor: pointer;
                background-color: var(--desaturate-cyan-2);
            }
        
            
         
            
        
            .brand img {
                width: 40px;
                height: 40px;
            }
        
            .sidebar .item a {
                justify-content: start;
                gap: 20px;
                padding-left: 3rem;
            }
        
            .sidebar .item a span {
                display: inline !important;
            } */
         
            /* Main */
           
        
            .main-container {
                padding: 20px 40px !important;
                margin-top: 96px;
            }
        
            .main-title {
                margin-bottom: 2rem;
            }
        
            
        
            .recent-orders .ro-title {
                margin-bottom: 2rem;
            }
        
            .recent-updates {
                margin-bottom: 4rem;
            }
        
            /* Extrabar */
            .extrabar {
                grid-area: auto !important;
                padding: 20px 40px !important;
            }
        
            .extrabar .header-right {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                background-color: var(--white);
                padding: 16px 32px;
                gap: 10rem;
                box-shadow: var(--box-sidebar);
                transition: background-color 0.3s ease-in-out;
            }
        
            .header-right .toggle-menu-btn {
                position: absolute;
                left: 20px;
                display: initial;
                border: none;
                color: var(--text-color-secondary);
                background-color: var(--white);
                padding: 4px;
                transition: 0.3s ease-in-out;
            }
        
            .header-right .toggle-menu-btn:hover {
                background-color: var(--desaturate-cyan-2);
                cursor: pointer;
            }
        }
     

/* ========= GLOBAL CONTAINER ================= */
.dashboard-container {
display: grid;
grid-template-columns: 2fr 7fr 3fr;
grid-template-areas: 'sidebar main extrabar';
gap: 4rem;
height: 100%;

}



.main-sidebar .aside-header {
display: flex;
justify-content: space-between;
align-items: center;
}



.main-sidebar .sidebar {
position: relative;
height: 100%;
display: flex;
justify-content: center;
padding-top: 4rem;
width: 100%;
}

.sidebar .list-items {

width: 100%;
padding: -10px; /* Modifier le padding pour aligner les éléments avec le bord gauche */

}



.list-items .item a {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 12px;
    width: 100%;
    padding: 16px 4rem 16px;
    font-size: 1.2em;
    font-weight: 600;
    transition: all 0.3s ease-in-out;
}

.list-items .item a:hover {
    text-decoration: none;
    color:  #e19717;
    transform: translateX(5%);
}



.item a .material-icons-sharp {
    font-size: 28px;
}

.item .message-count {
    background-color: red;
    text-align: center;
    border-radius: 8px;
    color: var(--light);
    border: 1px solid var(--fuscha);
    padding: 0px 7px;
    transition: all 0.3s ease-in-out;
}

.item a:hover .message-count,
.item a:active .message-count,
.item a.active .message-count {
    background-color: red;  color: var(--light);
    border: 1px solid var(--fuscha);
}
/* ================= MAIN =================== */



.main-title {

margin-bottom: 3rem;
line-height: 1.8;
}

.insights {

display: grid;
grid-template-columns: repeat(3, 1fr);
gap: 40px;
margin-bottom: 2rem;
}

.insights .card {
background-color: #EEBF6D;

padding: 28px;
border-radius: 28px;
box-shadow:#000000;
transition: box-shadow 0.3s ease-in-out;
}

.insights .card:hover {
background-color: #EEBF6D;
box-shadow: var(--box-shadow-card-2);
}

.card .card-header span {

background-color: #EEBF6D;

padding: 12px;
border-radius: var(--border-radius-rounded);
font-size: 28px;
margin-bottom: 10px;
}

.insights .card:nth-child(1) .card-header span {
background-color: #EEBF6D;
color: var(--yellow);
border: 1px solid var(--yellow);
}

.insights .card:nth-child(2) .card-header span {
background-color: #EEBF6D;
color:#000000;
border: 1px solid var(--fuscha);
}

.insights .card:nth-child(3) .card-header span {
background-color: #EEBF6D;
color: var(--cyan);
border: 1px solid var(--cyan);
}

.card-body {
background-color: #EEBF6D;
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 0.25rem; /* Réduisez davantage la marge inférieure */
padding: 1px; /* Réduisez les marges internes */
width: 1px; /* Définissez la largeur à 80% */
}



.card-body .card-progress {
background-color: #EEBF6D;
display: flex;
justify-content: center;
align-items: center;
position: relative;
width: 96px;
height: 96px;
border-radius: var(--border-radius-rounded);
}

.card-body svg circle {
background-color: #EEBF6D;
fill: none;
stroke-width: 16px;
stroke-dasharray: 226.2;
stroke-dashoffset: 226.2;
transform: translate(10px, 10px);
stroke-linecap: round;
transition: stroke-dashoffset 1s ease-in;
}

.card-body .percentage {
background-color: #EEBF6D;
position: absolute;
font-weight: 20;
}

.card-footer {
background-color: #EEBF6D;
font-size: 16px;
color:#000000;
font-weight: 600;
} 
.dark-mode {
    --white:var(--fuscha);
    --light:var(--fuscha);
   --desaturate-fuscha:var(--fuscha); /* Remplacez par la couleur grenat de votre choix */

    --text-color-primary: #eee;
    --text-color-secondary: #eee;

    --box-shadow-card: var(--desaturate-fuscha);
    --box-shadow-card-2:var(--desaturate-fuscha);
}

.dark-mode {
    --white: #111; /* Couleur de fond sombre */
    --light: #333; /* Couleur de texte sombre */
    /* Ajoutez d'autres styles pour le mode sombre ici */
}

*,
*::after,
*::before {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Source Sans Pro', sans-serif;
}

html {
    font-size: 14px;
}

body {
    background-color: var(--light);
    color: var(--text-color-primary);
    height: 100vh;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    /* font-size: 0.9rem; */
}

 ul {
    list-style-type: none;
}

a {
    text-decoration: none;
}

a {
    color: var(--text-color-secondary);
    transition: color 0.3s ease-in-out;
}

a:hover {
    color: var(--text-color-secondary);
}

.material-icons-sharp {
    vertical-align: middle;
}

.text-primary {
    color: var(--text-color-primary);
}

.text-secondary {
    color: var(--text-color-secondary);
}

.text-third {
    color: var(--text-color-third); 
} 

/* ========= GLOBAL CONTAINER ================= */



.main-sidebar .aside-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}



.main-sidebar .sidebar {
    position: relative;
    height: 100%;
    display: flex;
    justify-content: center;
    padding-top: 4rem;
    width: 100%;
}

.sidebar .list-items {
    
   
   
    width: 100%;
    padding: -10px; /* Modifier le padding pour aligner les éléments avec le bord gauche */
   
}




/* ================= MAIN =================== */


 
.main-title {
    
    margin-bottom: 3rem;
    line-height: 1.8;
}

.insights {
    
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-bottom: 2rem;
}

.insights .card {
    background-color: #EEBF6D;
  
    padding: 28px;
    border-radius: 28px;
    box-shadow:#000000;
    transition: box-shadow 0.3s ease-in-out;
}

.insights .card:hover {
    background-color: #EEBF6D;
    box-shadow: var(--box-shadow-card-2);
}

.card .card-header span {
    
    background-color: #EEBF6D;
   
    padding: 12px;
    border-radius: var(--border-radius-rounded);
    font-size: 28px;
    margin-bottom: 10px;
}

.insights .card:nth-child(1) .card-header span {
    background-color: #EEBF6D;
    color: var(--yellow);
    border: 1px solid var(--yellow);
}

.insights .card:nth-child(2) .card-header span {
    background-color: #EEBF6D;
    color:#000000;
    border: 1px solid var(--fuscha);
}

.insights .card:nth-child(3) .card-header span {
    background-color: #EEBF6D;
    color: var(--cyan);
    border: 1px solid var(--cyan);
}

.card-body {
    background-color: #EEBF6D;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 0.25rem; /* Réduisez davantage la marge inférieure */
    padding: 1px; /* Réduisez les marges internes */
    width: 1px; /* Définissez la largeur à 80% */
}



.card-body .card-progress {
    background-color: #EEBF6D;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 96px;
    height: 96px;
    border-radius: var(--border-radius-rounded);
}

.card-body svg circle {
    background-color: #EEBF6D;
    fill: none;
    stroke-width: 16px;
    stroke-dasharray: 226.2;
    stroke-dashoffset: 226.2;
    transform: translate(10px, 10px);
    stroke-linecap: round;
    transition: stroke-dashoffset 1s ease-in;
}

.card-body .percentage {
    background-color: #EEBF6D;
    position: absolute;
    font-weight: 20;
}

.card-footer {
    background-color: #EEBF6D;
    font-size: 16px;
    color:#000000;
    font-weight: 600;
} 

 
/* ===== Sidebar Droite ===== */
.extrabar {
    
    grid-area: extrabar;
    padding: 20px 40px 20px 0;
    transition: background-color 0.3s ease-in-out;
}

.extrabar .header-right {
    
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 4rem;
    margin-bottom: 3rem;
}

.header-right .toggle-menu-btn {
    display: none;
}

.header-right .toggle-theme {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--desaturate-cyan);
    border-radius: var(--border-radius-8);
    cursor: pointer;
   
}

.header-right .toggle-theme {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--desaturate-cyan);
    border-radius: var(--border-radius-8);
    cursor: pointer;
    position: relative; /* Assurez-vous que la position est définie comme relative */
    left: -60px; /* Ajustez cette valeur selon vos besoins */
}

.header-right .toggle-theme span {
    font-size: 20px;
    padding: 4px 7px; /* Ajustez le padding selon vos besoins */
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s ease-in;
}
.header-right .toggle-theme span:hover {
    background-color: var(--desaturate-fuscha);
    border-radius: var(--border-radius-8);
}

.header-right .toggle-theme span.active {
    background-color: var(--fuscha);
    border-radius: var(--border-radius-8);
    color: var(--light);
}

.header-right .profile {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 20px;
}

.header-right .profile .profile-info {
    font-size: 16px;
}

                .main-title {
                    margin-bottom: 2rem;
                }
            
               
                .recent-orders .ro-title {
                    margin-bottom: 2rem;
                }
   
                @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap');


:root {
--white: #fff;

--fuscha: #EEBF6D; /* doré */
--desaturate-fuscha: var(--fuscha); /* doré désaturé */
--desaturate-fuscha-2: var(--fuscha); /* doré désaturé */
/* --cyan: #000000;  */
/* --desaturate-cyan:  #000000; doré désaturé */
--desaturate-cyan-2:rgba(255, 215, 0, 0.1); /* doré désaturé */

/* --text-color-primary: #ffd700;  */
--text-color-secondary: #000000; /* noir */
--text-color-third: #ffd700; /* doré */

--box-shadow-card: 8px 8px 32px rgba(255, 215, 0, 0.15); /* doré désaturé */
--box-shadow-card-2: 8px 8px 32px rgba(240, 175, 72, 0.775); /* doré désaturé */
--box-sidebar: 2px 4px 16px rgba(255, 215, 0, 0.15); /* doré désaturé */

/* Autres variables */
}


*,
*::after,
*::before {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Source Sans Pro', sans-serif;
}

html {
font-size: 14px;
}

body {
background-color: var(--light);
color: var(--text-color-primary);
height: 100vh;
transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
/* font-size: 0.9rem; */
}

ul {
list-style-type: none;
}

a {
text-decoration: none;
}

a {
color: var(--text-color-secondary);
transition: color 0.3s ease-in-out;
}

a:hover {
color: var(--text-color-secondary);
}

.material-icons-sharp {
vertical-align: middle;
}





/* ========= GLOBAL CONTAINER ================= */


.main-sidebar {
    grid-area: sidebar;
    height: 100%;
    width: 320px;
    padding: 20px 0 20px 16px;
    border-right: 1px solid #ccc;
}


.list-items li:last-child {
    position: absolute;
    bottom: 4rem;
    width: 100%;
}



/* ================= MAIN =================== */
 .main-container {
    grid-area: main;
    padding: 20px 0;
}

.main-title {
    margin-bottom: 3rem;
    line-height: 1.8;
}




.search-input {
    padding: 10px 30px 10px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 300px;
}

.search-button {
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 100%;
    border: none;
    background: transparent;
    cursor: pointer;
}

.search-button i {
    color: #888;
    font-size: 18px;
}
.option-btn{
  border:none;
    background-color: transparent;
    color:#020202;
}
.option-btn:hover{
    color:red;
    
}
/* Style pour le bouton de suppression */
.btn {
    background-color: rgb(221, 7, 7); /* Couleur de fond du bouton */
    color: #fff; /* Couleur du texte */
    font-size: 17px;
    border: none; /* Supprime la bordure */
    padding: 8px 16px; /* Espacement intérieur du bouton */
    cursor: pointer; /* Curseur de type pointeur au survol */
    border-radius: 10px; /* Bordure arrondie */
    transition: background-color 0.3s; /* Transition douce de la couleur de fond */
}

/* Style au survol du bouton */
.btn:hover {
    background-color: #c00619; /* Nouvelle couleur de fond au survol */
}
.material-symbols-outlined {
    margin-right: 8px; /* Marge à droite de l'icône */
}

.active{
    background-color:  #EEBF6D;
    color:black;
}


.orders-table { display: flex; 
flex-direction: column;
 border-collapse: collapse;
  width: 50%; 
  margin: 0 auto;
   text-align: center; } 
   th, td { border: 1px solid black; padding: 10px;
    } th { background-color:  #eebf6d91;; 
    font-weight: bold; } 
    </style>
<body>
   
    <div class="dashboard-container">
        <aside class="main-sidebar">
            <header class="aside-header">
        
                <img src="/images/logo2.png" width="140" height="140" alt="logo" >

               
                
            </header>
            <div class="sidebar" id="sidebar">
                <ul class="list-items">
                    <li class="item">
                        <a href="{{ route('dashboard') }}">
                            <span class="material-symbols-outlined">dashboard</span>
                            <span>Tableau de bord</span>
                        </a>
                    </li>
                    <li class="item ">
                    <a href="{{ route('menus') }}" >
                            <span class="material-symbols-outlined" class="active">menu_book</span>
                            <span>Menus</span>
                        </a>
                    </li>
                    <li class="item">
                    <a href="{{ route('plats') }}" >
                            <span class="material-symbols-outlined">list_alt</span>
                            <span> les plats</span>
                        </a>
                    </li>
                    <li class="item active">
                    <a href="{{ route('commande') }}" >
                            <span class="material-symbols-outlined">shopping_cart</span>
                            <span> les commandes</span>
                        </a>
                    </li>
                   
                    <li class="item">
                        <a href="{{ route('reservationadmin') }}">
                            <span class="material-symbols-outlined"><span class="material-symbols-outlined">
                                event_available
                                </span></span>
                            <span>les réservation</span>
                        </a>
                    </li>
                    @php
                   
                    $messageNonlu = App\Models\Commentaires::where('status', 'unread')->count(); 
                     @endphp
                    <li class="item ">
                        <a href="{{ route('Contactadmin') }}">  
                            <span class="material-symbols-outlined">sms</span>
                            <span>Messages</span>
                            @if ($messageNonlu> 0)
                            <span class="message-count">{{$messageNonlu}}</span>
                                @endif
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{ route('profile.edit') }}">  
                            <span class="material-symbols-outlined">settings</span>
                            <span>Les paramétres</span>
                        </a>
                    </li> 
                    <li class="item">
                        <a href="{{ route('logout') }}">  
                            <span class="material-symbols-outlined">logout</span>
                            <span>Se déconnecter</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <span class="material-symbols-outlined"></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
      <aside class="extrabar">
        <header class="header-right">
            <div class="toggle-theme">
                
                <span id="disableDarkModeButton" class="material-icons-sharp">tungsten</span>
                <span id="toggleThemeButton" class="material-icons-sharp">dark_mode</span>
            
            </div>
        </header>
    </aside>
            <main class="main-container">
              
            <section class="recent-orders">
                
    <table class="orders-table">
    <thead>
                <tr>
                    <th>Nom et prénom</th>
                    <td>{{ $commande->nom }} {{ $commande->prenom }}</td>
                    
                </tr>
                <tr>
                    <th>Email et téléphone</th>
                    <td>{{ $commande->email }}  {{ $commande->telephone }}</td>
                    
                </tr>
                <tr>
                    <th>adresse</th>
                    <td>{{ $commande->adresse }}</td>
                    </tr>
                   
                    
                  
                    <th>type_livraison</th>
                    <td>{{ $commande->type_livraison }}</td>
                </tr>
                <tr>
                    <th>montant_total</th>
                    <td>{{ $commande->montant_total }}</td>
                </tr>
                <tr>
                    <th>plats</th>
                    <td>{{ $commande->plats }}</td>
                </tr>
                <!-- Ajoutez le reste des détails de la commande ici en utilisant $commande -->
            </thead>
           
        </table>
    </section>
    </main>
    <script>
       const toggleThemeButton = document.getElementById('toggleThemeButton');
const disableDarkModeButton = document.getElementById('disableDarkModeButton');

// Définir le thème blanc par défaut
document.body.classList.add('light-mode');

// Sélectionner le bouton correspondant au mode par défaut (light mode)
const defaultModeButton = document.getElementById('disableDarkModeButton');

// Ajouter la classe active au bouton du mode par défaut
defaultModeButton.classList.add('active');

// Ajouter un écouteur d'événement pour le clic sur l'icône du mode sombre
toggleThemeButton.addEventListener('click', () => {
    // Activer le mode sombre
    document.body.classList.remove('light-mode');
    document.body.classList.add('dark-mode');

    // Mettre à jour la classe active
    toggleThemeButton.classList.add('active');
    disableDarkModeButton.classList.remove('active');
});
 </script>

</body>
</html>

                
           