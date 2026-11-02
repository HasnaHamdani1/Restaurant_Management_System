<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
        rel="stylesheet"/>

         <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
         <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

*,
*::after,
*::before {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Source Sans Pro', sans-serif;
}


body {
background-color: white;
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
    border-right: 1px solid #ccc;
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
    background-color: rgba(54, 162, 235, 0.2);
    width: 225px; /* Modifier cette valeur selon vos préférences */
   
    padding: 28px;
    border-radius: 28px;
    box-shadow:#000000;
    transition: box-shadow 0.3s ease-in-out;
}

.insights .card:hover {
    background-color: rgba(54, 162, 235, 0.2);
    box-shadow: var(--box-shadow-card-2);
}

.card .card-header span {
    
    background-color: rgba(54, 162, 235, 0.2);
   
    padding: 12px;
    border-radius: var(--border-radius-rounded);
    font-size: 28px;
    margin-bottom: 10px;
}

.insights .card:nth-child(1) .card-header span {
    background-color: rgba(54, 162, 235, 0.2);
    color: var(--yellow);
    border: 1px solid var(--yellow);
}

.insights .card:nth-child(2) .card-header span {
    background-color: rgba(54, 162, 235, 0.2);
    color:#000000;
    border: 1px solid var(--fuscha);
}

.insights .card:nth-child(3) .card-header span {
    background-color: #EEBF6D;
    color: var(--cyan);
    border: 1px solid var(--cyan);
}

.card-body {
    background-color: rgba(54, 162, 235, 0.2);
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 0.25rem; /* Réduisez davantage la marge inférieure */
    padding: 1px; /* Réduisez les marges internes */
    width: 1px; /* Définissez la largeur à 80% */
}



.card-body .card-progress {
    background-color: #EEBF6D;
    font-size: 16px;
    color:#000000;
    font-weight: 600;
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
    left: 200px;
}

.header-right .toggle-theme span {
    font-size: 20px;
    padding: 9px 7px; /* Ajustez le padding selon vos besoins */
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s ease-in;
    position: relative; /* Assurez-vous que la position est définie comme relative */
    right: 85rem;
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
.profile-image {
    width: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 16px;
    /* height: 48px; */
    border-radius: var(--border-radius-rounded);
    overflow: hidden;
}

/* les graphes  */
.text-fuscha {
    color: var(--fuscha);
}

.text-yellow {
    color: var(--yellow);
}

.text-cyan {
    color: var(--cyan);
}

.stroke-fuscha {
    stroke: var(--fuscha);
}

.stroke-yellow {
    stroke: var(--yellow);
}

.stroke-cyan {
    stroke: var(--cyan);
}

.bg-fuscha {
    background-color: var(--fuscha);
}

.bg-yellow {
    background-color: var(--yellow);
}

.bg-cyan {
    background-color: var(--cyan);
}
.card {
    width: 200px; /* Définissez la largeur souhaitée */
    height: 250px; /* Définissez la hauteur souhaitée */
    margin: 0; /* Supprimez les marges pour réduire l'espace entre les cartes */
    padding: 20px; /* Ajustez les marges internes selon vos préférences */
    background-color: #EEBF6D;
    border-radius: 16px;
    box-shadow: var(--box-shadow-card);
    transition: box-shadow 0.3s ease-in-out;
}

.card:hover {
    box-shadow: var(--box-shadow-card-2);
}

            @media screen and (max-width: 1200px) {
                /* Main */
            
                /* Main */
               
            
                
            
                .main-title {
                    margin-bottom: 2rem;
                }
            
               
                .recent-orders .ro-title {
                    margin-bottom: 2rem;
                }
            
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



/* ================= RECENTS =================== */
.recent-orders {
    margin-top: 4rem;
}

.recent-orders .ro-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.recent-orders .ro-title a {
    font-size: 16px;
    font-weight: 600;
    transition: 0.3s ease-in;
    padding-right: 28px;
}

.recent-orders .ro-title a:hover {
    color: var(--fuscha);
}

.recent-orders table {
    width: 100%;
    background-color: var(--white);
    padding: var(--padding-card);
    border-radius: var(--border-radius-card);
    box-shadow: var(--box-shadow-card);
    text-align: center;
    transition: box-shadow 0.33s ease-in-out;
    overflow: hidden;
    border-spacing: 0;
}

.recent-orders table:hover {
    box-shadow: var(--box-shadow-card-2);
}

.recent-orders tbody td,
.recent-orders thead th {
    padding: 12px 24px;
}

.recent-orders table tbody tr {
    border: 1px solid transparent;
    border-bottom-color: var(--desaturate-cyan);
    transition: 0.15s ease-in;
}

.recent-orders tbody tr:last-child {
    border-bottom-color: transparent;
}

.recent-orders tbody tr:first-child {
    border-top-color: var(--desaturate-cyan);
}

.recent-orders table tbody tr:nth-child(2n + 1) {
    background-color: var(--desaturate-fuscha-2);
}

.recent-orders tbody tr:hover {
    background-color: var(--desaturate-cyan-2) !important;
}
 /* Nouvelle section pour le formulaire d'ajout */
.add-menu-form {
    padding: 20px;
    background-color: var(--white);
    border-radius: var(--border-radius-card);
    box-shadow: var(--box-shadow-card);
    margin-bottom: 2rem;
}

.add-menu-form h2 {
    margin-bottom: 1rem;
}

.add-menu-form form {
    display: grid;
    gap: 16px;
}

.add-menu-form label {
    font-weight: 600;
}

.add-menu-form input {
    padding: 10px;
    border: 1px solid var(--text-color-third);
    border-radius: var(--border-radius-4);
}

.add-menu-form button {
    padding: 12px 24px;
    background-color: var(--fuscha);
    color: var(--white);
    border: none;
    border-radius: var(--border-radius-4);
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.add-menu-form button:hover {
    background-color: var(--desaturate-fuscha);
}

/* Ajustement pour aligner verticalement les sections */


.menu-container {
    background-color: #343a40;
    color: white;
    padding: 10px;
    text-align: center;
    height: 100vh;
    width: 100px; /* Largeur de la barre latérale */
    position: fixed;
    left: 0;
    top: 0;
    overflow-y: auto;
}

.menu-link {
    text-decoration: none;
    color: white;
    display: block;
    padding: 10px;
    font-size: 16px;
    margin-bottom: 10px;
}

.menu-link:hover {
    background-color: #495057;
}



.dish-container {
display: flex;
justify-content: center; /* Centre les éléments horizontalement */
align-items: center; /* Centre les éléments verticalement */
padding: 20px;
flex-wrap: wrap;
flex-direction: column; /* Pour afficher les éléments en colonne */
}


.dish-card {
    width: 200px;
    margin: 10px;
    padding: 15px;
    border: 1px solid #e9ecef;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    transition: transform 0.3s;
    position: relative;
}

.dish-card:hover {
    transform: scale(1.05);
}

.dish-image img {
    max-width: 100%;
    max-height: 200px;
    display: block;
    margin: 0 auto;
    border-radius: 5px;
}

.dish-name {
    font-size: 1.5em;
    margin-top: 10px;
    color: #343a40;
}

.dish-description {
    margin-top: 10px;
    color: #495057;
}

.dish-price {
    margin-top: 10px;
    font-weight: bold;
    color: #343a40;
}

.order-button {
    background-color: orange;
    color: white;
    border: none;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
}

.cart-container {
    display: none;
    position: fixed;
    bottom: 50px;
    right: 0;
    width: 300px;
    background-color: #f8f9fa;
    padding: 20px;
    box-shadow: -5px 0 10px rgba(0, 0, 0, 0.1);
    overflow-y: auto;
}

.cart-item {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #e9ecef;
    border-radius: 5px;
    background-color: #fff;
}

.total-price {
    font-weight: bold;
    margin-top: 10px;
    color: #343a40;
}

.grenat-bar {
            background-color: maroon; /* Couleur grenat */
            height: 50px; /* Hauteur de la barre */
            width: 100%; /* Largeur de la barre */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white; /* Couleur du texte */
            font-size: 24px; /* Taille du texte */
           
        }
       
        .container {
            max-width: 500px;
            margin: 50px auto; /* Centrer le formulaire */
            padding: 20px;
            border: 2px solid #bd3527;
            border-radius: 10px;
            background-color: #fef9f8;
            text-align: center; /* Centrer le texte à l'intérieur du formulaire */
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #bd3527;
            text-align: left; /* Aligner le texte à gauche */
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: calc(50% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #bd3527;
            border-radius: 4px;
            box-sizing: border-box;
            display: inline-block;
            margin-right: 10px;
            color: #bd3527;
        }
        label,
        select {
            width: 50%;
        }
        .form-row {
            margin-bottom: 15px;
            display: flex;
            justify-content: center; /* Centrer les éléments dans le formulaire */
        }
        .form-row label,
        .form-row input,
        .form-row select {
            flex: 1;
        }
        input[type="submit"] {
            background-color: #bd3527;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 0 auto; /* Centrer le bouton */
        }
        input[type="submit"]:hover {
            background-color: #a42a20;
        }
        .error-message {
            color: #bd3527;
        }

            @media screen and (max-width: 1200px) {
                /* Main */
            
                 .main-container .insights {
                    background-color: rgba(54, 162, 235, 0.2);
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
            
                .list-items .item a {
                    gap: 10px;
                    padding: 16px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
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
                    display: block;
                    position: fixed;
                    width: 300px;
                    left: 0; /* positionnez la barre latérale à gauche de la page */
                     top: 0;
                    background-color: var(--white);
                    z-index: 10;
                    box-shadow: var(--box-sidebar);
                    padding-right: 1rem;
                    /* left: -100%; */
                    transition: 0.3s cubic-bezier(0.39, 0.575, 0.565, 1);
                    width: auto;
                    padding-left: 4px;
                    box-shadow: var(--box-sidebar); /* ajoutez une ombre à la barre latérale si nécessaire */
    transition: left 0.3s ease-in-out;
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
            
                .aside-header .brand {
                    padding-left: 3rem;
                }
             
                .brand h3 {
                    display: inline;
                    font-size: 20px;
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
                .dashboard-container {
                    grid-template-columns: 1fr;
                    grid-template-areas: 'main';
                    grid-template-columns: 1fr 6fr 5fr;
                    gap: 2rem;
                
                }
            
                .main-container {
                    padding: 20px 40px !important;
                    margin-top: 96px;
                }
            
                .main-title {
                    margin-bottom: 2rem;
                }
            
                .main-container .recent-orders {
                    position: initial !important;
                    width: 100% !important;
                    padding-bottom: 2rem;
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
    --box-shadow-card-2: 8px 8px 32px rgba(255, 215, 0, 0.25); /* doré désaturé */
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
    overflow-y: scroll;
    overflow-x: hidden; /* Masquer le scrollbar horizontal */
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
.dashboard-container {
    display: grid;
    grid-template-columns: 2fr 7fr 3fr;
    grid-template-areas: 'sidebar main extrabar';
    gap: 4rem;
    height: 100%;

}

.main-sidebar {
    grid-area: sidebar;
    height: 100%;
    width: 320px;
    padding: 14px 0 14px -4px;
   
}

.main-sidebar .aside-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.aside-header .close {
    display: none;
    
}

.aside-header .brand {
    display: flex;
    align-items: center;
    padding-left:1px;
}

.brand img {
    width: 48px;
    height: 48px;
}

.brand h3 {
    font-size: 24px;
    text-transform: uppercase;
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

.insights {
    
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 300px;
    margin-bottom: 2rem;
}

.insights .card1 {
    background-color: rgba(54, 162, 235, 0.2);
    
    padding: 28px;
    border-radius: 28px;
    box-shadow:#000000;
    transition: box-shadow 0.3s ease-in-out;
}
.insights .card2 {
    background-color: rgba(255, 99, 132, 0.2);
  position: relative;
    padding: 28px;
    border-radius: 28px;
    box-shadow:#000000;
    transition: box-shadow 0.3s ease-in-out;
}
.insights .card3 {
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

 




.card {
    width: 200px; /* Définissez la largeur souhaitée */
    height: 250px; /* Définissez la hauteur souhaitée */
    margin: 0; /* Supprimez les marges pour réduire l'espace entre les cartes */
    padding: 20px; /* Ajustez les marges internes selon vos préférences */
    background-color: #EEBF6D;
    border-radius: 16px;
    box-shadow: var(--box-shadow-card);
    transition: box-shadow 0.3s ease-in-out;
}

.card:hover {
    box-shadow: var(--box-shadow-card-2);
}
h3 {
        font-size: 17px; /* Modifier cette valeur selon vos préférences */
    }
    h4 {
        font-size: 17px; /* Modifier cette valeur selon vos préférences */
    }
    .active{
    background-color:  #EEBF6D;
    color:black;
}

            </style>
       <title>Tableau de bord</title>
    </head>
    <body>
        
         
        <div class="dashboard-container">
            <aside class="main-sidebar">
                <header class="aside-header">
            
                    <img src="/images/logo2.png" width="140" height="140" alt="logo" >
     
                </header>
                <div class="sidebar" id="sidebar">
                    <ul class="list-items">
                        <li class="item active">
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
                        <li class="item">
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
                        <li class="item">
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
           <!-- Main -->
           <main class="main-container">
                <h1 class="main-title"></h1>

                <!-- CARD -->
                <div class="insights">
        <div class="card-container" style="display: flex; justify-content: space-between; margin-bottom: 70px;">
            <div class="card1" style="width: 150px; height: 125px; margin-right: 10px;">
             
        <div class="card-container" style="width: 10px; height: 20px;">
            <span class="material-icons-sharp" style="width: 2px; height: 20px;">add_shopping_cart</span>
        </div>
        <div>
            <h3>Nombre de</h3>
            <h3>Commande</h3>
            <h1 id="nombre-reservation">{{ $nombreCommandes }}</h1>
            <div class="nombre-commandes"></div>
        </div>
    </div>
    <div class="card2" style="width: 150px; height: 125px; margin-right: 10px;">
           
        <div class="card-container" style="width: 10px; height: 20px;">
            <span class="material-icons-sharp" style="width: 2px; height: 20px;">bar_chart</span>
        </div>
        <div>
            <h3>Nombre de</h3>
            <h3>reservation</h3>
            <h1 id="nombre-reservation">{{ $nombreReservations }}</h1>
            <div class="nombre-commandes"></div>
        </div>
    </div>
    <div class="card3" style="width: 150px; height: 125px;">
        <div class="card-container" style="width: 10px; height: 20px;">
            <span class="material-icons-sharp" style="width: 2px; height: 20px;">group_add</span>
        </div>
        <div>
            <h3>Nombre de</h3>
            <h3>Visite</h3>
            <h1 id="visitsCount"></h1>
            <div class="nombre-commandes"></div>
        </div>
    </div>

  <!-- GRAPHIQUES -->
  
  <div class="chart-row" style="position:relative;display: flex; justify-content: space-between; top : 150px; right:500px;">
            <div class="chart-container" style="width: 400px; height: 400px; margin-right: 10px;">
                <canvas id="commandesChart"></canvas>
                <div id="commandesData" data-commandes="{{ json_encode($commandes) }}"></div>
            </div>
            <div class="chart-container" style="width: 400px; height: 400px;">
                <canvas id="reservationsChart" width="400" height="200"></canvas>
                <div id="reservationsData" data-reservations="{{ json_encode($reservations) }}"></div>
            </div>
        </div>
    </div>
            </main>

            <!-- Sidebar droite -->
          

        <script>
    // Fonction pour définir un cookie avec le nombre de visites et mettre à jour le nombre de visites dans le dashboard
    function updateVisitsCount() {
        var visits = getCookie("visits");
        if (visits) {
            visits = parseInt(visits) + 1;
        } else {
            visits = 1;
        }
        document.cookie = "visits=" + visits;
        document.getElementById("visitsCount").textContent = visits || 0;
    }

    // Fonction pour récupérer la valeur d'un cookie
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length === 2) return parts.pop().split(";").shift();
    }

    // Appeler la fonction pour mettre à jour le nombre de visites lors du chargement de la page
    window.onload = function() {
        updateVisitsCount();
    };

   
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

// Ajouter un écouteur d'événement pour le clic sur l'icône de désactivation du mode sombre
disableDarkModeButton.addEventListener('click', () => {
    // Désactiver le mode sombre
    document.body.classList.remove('dark-mode');
    document.body.classList.add('light-mode');

    // Mettre à jour la classe active
    toggleThemeButton.classList.remove('active');
    disableDarkModeButton.classList.add('active');
});

function markAsReadAndUpdateCount(id) {
        $.ajax({
            url: "{{ route('markAsReadAndUpdateCount') }}",
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                id: id
            },
            success: function(response) {
                if(response.success) {
                    // Mettre à jour le nombre de messages non lus
                    $('.message-count').text(response.unreadCount);
                }
            },
            error: function(xhr) {
                // Gérer les erreurs
            }
        });
    }
   
   // Fonction pour obtenir le nom du mois à partir de son numéro
   function getMonthName(monthNumber) {
        const months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        return months[monthNumber - 1];
    }

   // Récupérer les données des commandes depuis l'attribut data-commandes
var commandesDataElement = document.getElementById('commandesData');
var commandes = JSON.parse(commandesDataElement.getAttribute('data-commandes'));

// Créer un objet pour stocker le nombre de commandes par mois
var commandesParMois = {};

// Initialiser le nombre de commandes pour chaque mois à 0
for (let i = 1; i <= 12; i++) {
    commandesParMois[String(i).padStart(2, '0')] = 0;
}

// Traiter les données pour le graphique (compter le nombre de commandes par mois)
commandes.forEach(function(commande) {
    var mois = commande.created_at.substring(5, 7); // Extraire le mois (format MM)
    commandesParMois[mois]++;
});

// Convertir les données en format utilisable par Chart.js
var data = {
    labels: [],
    datasets: [{
        label: 'Nombre de commandes',
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1,
        data: []
    }]
};

// Remplir les données pour chaque mois
for (let i = 1; i <= 12; i++) {
    var mois = String(i).padStart(2, '0');
    data.labels.push(getMonthName(i)); // Ajouter le nom du mois
    data.datasets[0].data.push(commandesParMois[mois]); // Ajouter le nombre de commandes pour ce mois
}

// Configuration du graphique
var options = {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
};

// Dessiner le graphique à barres
var ctx = document.getElementById('commandesChart').getContext('2d');
var commandesChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});
////reservation 
// Fonction pour obtenir le nom du mois à partir de son numéro
function getMonthName(monthNumber) {
    const months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    return months[monthNumber - 1];
}

// Récupérer les données des réservations depuis l'attribut data-reservations
var reservationsDataElement = document.getElementById('reservationsData');
var reservations = JSON.parse(reservationsDataElement.getAttribute('data-reservations'));

// Créer un objet pour stocker le nombre de réservations par mois
var reservationsParMois = {};

// Initialiser le nombre de réservations pour chaque mois à 0
for (let i = 1; i <= 12; i++) {
    reservationsParMois[String(i).padStart(2, '0')] = 0;
}

// Traiter les données pour le graphique (compter le nombre de réservations par mois)
reservations.forEach(function(reservation) {
    var mois = reservation.created_at.substring(5, 7); // Extraire le mois (format MM)
    reservationsParMois[mois]++;
});

// Convertir les données en format utilisable par Chart.js
var data = {
    labels: [],
    datasets: [{
        label: 'Nombre de réservations',
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1,
        data: []
    }]
};

// Remplir les données pour chaque mois
for (let i = 1; i <= 12; i++) {
    var mois = String(i).padStart(2, '0');
    data.labels.push(getMonthName(i)); // Ajouter le nom du mois
    data.datasets[0].data.push(reservationsParMois[mois]); // Ajouter le nombre de réservations pour ce mois
}

// Configuration du graphique
var options = {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
};

// Dessiner le graphique à barres
var ctx = document.getElementById('reservationsChart').getContext('2d');
var reservationsChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});

</script>

    </body>
</html>
