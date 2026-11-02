<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italic:400,700&display=swap">


     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
     {{-- <link rel="stylesheet" href="/ressourees/css/app.css"> --}}
</head>

<style>
 

.show-products .box-container{
    /* display: flex; */
    gap: 1.5rem;
    display: grid;
   grid-template-columns: repeat(auto-fit, 30rem );
   grid-template-columns: repeat(3, 1fr);
   align-items: flex-start;
}

.show-products .box-container .box{
   background-color: var(--white);
   border-radius: .9rem;
   /* box-shadow: var(--box-shadow); */
   /* border:var(--border); */
   padding:1rem;
}

.show-products .box-container .box img{
   width: 100%;
   height: 9rem;
   object-fit: contain;
   /* margin-bottom: 1rem; */
}

.show-products .box-container .box .name{
   font-size: 2rem;
   color:var(--black);
   padding:1rem 0;
   font-family: italic, sans-serif;
}

.show-products .box-container .box .flex{
   display: flex;
   align-items: center;
   gap:1rem;
   justify-content: space-between;
}
.show-products .box-container .box .flex .category{
   font-size: 1.8rem;
   color:var(--main-color);
}
.box-container{
   grid-template-columns: 1fr;
}

.flex-btn{
    display: flex; /* Afficher les boutons dans la même ligne */
   
}

.option-btn {
        margin-top: 1rem;
        border-radius: .2rem;
        cursor: pointer;
        width: auto; /* Ajustez la largeur en fonction de l'icône */
        height: auto; /* Ajustez la hauteur en fonction de l'icône */
        font-size: 1rem;
        color: transparent; /* Rendre le texte transparent */
        background-color: transparent; /* Rendre l'arrière-plan transparent */
        padding: 0; /* Supprimer le rembourrage */
        border: none; /* Supprimer la bordure */
    }

    .option-btn .material-symbols-outlined {
        color: black; /* Couleur de l'icône */
        background-color: #EEBF6D; /* Couleur de l'arrière-plan de l'icône */
        padding: 0.5rem; /* Ajouter du rembourrage autour de l'icône */
        border-radius: 50%; /* Assurez-vous que l'arrière-plan de l'icône est arrondi */
    }

    .option-btn .material-symbols-outlined:hover {
        color: white; /* Couleur de l'icône au survol */
        background-color: #EEBF6D; /* Couleur de l'arrière-plan de l'icône au survol */
    }
.show-products .box-container .box {
    border: 2px solid black; /* Ajouter une bordure noire */
    border-radius: .9rem;
    padding: .5rem; /* Réduire le rembourrage */
    color: black;
    width: 200px; /* Réduire la largeur */
   
    margin-top: 20px; /* Ajouter de la marge en haut */
}

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
                } 
             
              
            
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


.show-products .box-container .box img {
    width: 100%;
    height: 7rem; /* Réduire la hauteur de l'image */
    object-fit: contain;
}

.show-products .box-container .box .name {
    font-size: 1.5rem; /* Réduire la taille du texte */
    padding: .5rem 0; /* Réduire le remplissage */
    text-align: center; /* Centrer le texte */
}


.show-products .box-container .box .flex-btn {
    display: flex;
    align-items: center;
    gap: 0.1rem; /* Ajustez cette valeur selon vos besoins */
    justify-content: space-between;
}


.show-products .box-container .box .flex-btn button {
       
    border: none;
    cursor: pointer;
    padding: 1rem 1.5rem;
    border-radius: .2rem;
    width: 100px; /* Largeur fixe pour les boutons */
}

.close {

 color: black;
 float: right;
 font-size: 29px;
 font-weight: bold;
 transition: color 0.3s;
}

.close:hover,
.close:focus {
 color :#85590c;
 text-decoration: none;
 cursor: pointer;
}


.search-form {
    display: flex;
    align-items: center;
}

.search-input-container {
    position: relative;
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

#showFormLink {
    display: inline-block;
    text-decoration: none; /* Supprime le soulignement par défaut */
    position: relative;
    top: 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px; /* Taille de la police pour le lien */
    color: #333; /* Couleur du texte */
}

#showFormLink .material-symbols-outlined {
    font-size: 3rem!important; /* Taille de l'icône */
    color: #EEBF6D; /* Couleur de l'icône */
    vertical-align: middle; /* Alignement vertical */
    margin-right: 5px; /* Espacement à droite */
}

#showFormLink:hover {
    color: #EEBF6D; /* Changement de couleur au survol */
}

#showFormLink:hover .material-symbols-outlined {
    color: #EEBF6D; /* Changement de couleur de l'icône au survol */
}

.form-container {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    padding: 85px;
    max-width: 7000px;
    background-color: white; /* Ajoutez la couleur d'arrière-plan souhaitée */
    border: 2px solid black; /* Ajoutez le style de bordure souhaité */
    border-radius: 9px; /* Ajoutez la bordure arrondie si nécessaire */
  
}

.form-container h2 {
    color: black; /* Couleur du titre */
}

.form-container .close {
    float: right;
    cursor: pointer;
    color: #000000;
    /* Ajoutez les styles de fermeture du bouton (comme la couleur, la taille, etc.) */
}

/* Ajoutez une bordure arrondie aux champs de texte */
.form-group input[type="text"],
.form-group input[type="file"] {
    border: 1.3px solid  black;
    padding: 10px;
    width: 85%;
    border-radius: 13px; /* Ajoutez une bordure arrondie */
}
.form-group label {
    color: black; /* Couleur du texte */
    font-family: Arial, sans-serif; /* Police de caractères */
    font-weight: bold;  /* Police de caractères */
    font-size: 14px; /* Taille de la police */
    margin-bottom: 9px; /* Marge inférieure */
    display: block; /* Afficher en tant que bloc pour forcer le saut de ligne */
}


/* Style personnalisé pour les boutons */
.btn-add {
    background-color: #EEBF6D; /* Couleur de fond */
    color: black; /* Couleur du texte */
    border: none;
    position: fixed;
    top: 85%;
    left: 50%;
    padding: 12px 15px;
    cursor: pointer;
    width: 40%;
    border-radius: 9px; /* Ajoutez une bordure arrondie */
    transition: background-color 0.3s ease; /* Ajoutez une transition en douceur */
}

/* Changement de couleur du bouton au survol */
.btn-add:hover {
    background-color: #e07b16; /* Nouvelle couleur de fond au survol */
}
.active{
    background-color:  #EEBF6D;
    color:black;
}

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
                    <li class="item  active">
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
        <section class="recent-orders">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

        <form action="{{ route('search') }}" method="GET" class="search-form">
            @csrf
            <div class="search-input-container">
                <input type="text" name="query" class="search-input" placeholder="Rechercher...">
                <button type="submit" class="search-button"><i class="material-icons-sharp">search</i></button>
            </div>
        </form>
        
        <a href="#" id="showFormLink">
            <span class="material-symbols-outlined " >add</span>Ajouter un menu </a>
          
          
            <div class="main-container">
                <!-- Move the form container here -->
                <div class="form-container" id="form"  style="display:none;">
                    <span class="close">&times;</span>
                    <h2>Ajouter un menu </h2>
                   
                    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- CSRF Protection -->
            
                        <div class="form-group">
                            <label for="menuName">Nom:</label>
                            <input type="text" name="menuName" required>
                          
                        </div>
          
                      <br>  <div class="form-group">
                            <label for="menuImage">Image: </label>

                            <input type="file" name="menuImage" accept="image/*" required>
                           
                        </div>
            
                        <button type="submit" class="btn-add">Ajouter</button>
                    </form>
                </div>
          

    <div class="show-products" style="padding-top: 0;" >
        
    
        <div class="box-container" id="produits">
            @foreach($menus as $menu)
                <div class="box">
                 
                    <img src="{{ asset('images/' . $menu->image) }}" alt="Image du menu" width="40sh%">
                   
                     <div class="name"  >{{ $menu->nom }}</div>
                     <div class="flex-btn">
    <form action="{{ route('ModifierMenus', $menu->id) }}" method="GET">
        <button class="option-btn"><span class="material-symbols-outlined">edit</span></button>
    </form>
    <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="option-btn" type="submit" onclick="return confirm('Tu es sûr que tu veux supprimer ce menu?')"><span class="material-symbols-outlined">delete</span></button>
    </form>
</div>



                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        const showFormLink = document.getElementById('showFormLink');
        const formContainer = document.getElementById('form');
    
        showFormLink.addEventListener('click', function(event) {
            event.preventDefault(); // Empêcher le comportement par défaut du lien
    
            // Afficher ou masquer le formulaire en fonction de son état actuel
            if (formContainer.style.display === 'none') {
                formContainer.style.display = 'block';
            } else {
                formContainer.style.display = 'none';
            }
        });
        const closeCartModal = document.querySelector('#form .close');
const cartModal = document.querySelector('#form');

// Vérifiez si l'élément .close a été trouvé
if (closeCartModal) {
    // Ajoutez un gestionnaire d'événements au clic sur l'élément de fermeture du panier modal
    closeCartModal.addEventListener('click', function() {
        // Masquez le panier modal
        cartModal.style.display = 'none';
    });
} else {
    console.error("L'élément de fermeture du panier modal n'a pas été trouvé.");
}
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

    </script>
    
    
</body>
</html>
