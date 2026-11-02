<!DOCTYPE html>
  <html>
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="icon" href="images/logo2.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQq7CvH/6b9sZ9q8s6GKecvIq7/wV0QmAQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 

  </head>
<style>
    body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            font-size: var(--fontSize-body-4);
        }

       
@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

/* Styles des barres de défilement pour WebKit */
html::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

html::-webkit-scrollbar-track {
    border-radius: 0;
}

html::-webkit-scrollbar-thumb {
    background: #EEBF6D;
    border-radius: 5px;
}

html::-webkit-scrollbar-thumb:hover {
    background: #EEBF6D;
}



:root {

--gold-crayola: hsl(38, 61%, 73%);
--quick-silver: hsla(0, 0%, 65%, 1);
--davys-grey: hsla(30, 3%, 34%, 1);
--smoky-black-1: hsla(40, 12%, 5%, 1);
--smoky-black-2: hsla(30, 8%, 5%, 1);
--smoky-black-3: hsla(0, 3%, 7%, 1);
--eerie-black-1: hsla(210, 4%, 9%, 1);
--eerie-black-2: hsla(210, 4%, 11%, 1);
--eerie-black-3: hsla(180, 2%, 8%, 1);
--eerie-black-4: hsla(0, 0%, 13%, 1);
--white: hsla(0, 0%, 100%, 1);
--white-alpha-20: hsla(0, 0%, 100%, 0.2);
--white-alpha-10: hsla(0, 0%, 100%, 0.1);
--black: hsla(0, 0%, 0%, 1);
--black-alpha-80: hsla(0, 0%, 0%, 0.8);
--black-alpha-15: hsla(0, 0%, 0%, 0.15);

/**
 * GRADIENT COLOR
 */

--loading-text-gradient: linear-gradient(90deg, transparent 0% 16.66%, var(--smoky-black-3) 33.33% 50%,  transparent 66.66% 75%);
--gradient-1: linear-gradient(to top,hsla(0, 0%, 0%, 0.9),hsla(0, 0%, 0%, 0.7),transparent);

/**
 * TYPOGRAPHY
 */

/* font-family */
--fontFamily-forum: 'Forum', cursive;
--fontFamily-dm_sans: 'DM Sans', sans-serif;


--fontSize-body-4: 1rem;


/* font-weight */
--weight-regular: 400;
--weight-bold: 700;

/* line-height */
--lineHeight-1: 1em;
--lineHeight-2: 1.2em;
--lineHeight-3: 1.5em;
--lineHeight-4: 1.6em;
--lineHeight-5: 1.85em;
--lineHeight-6: 1.4em;

/* letter-spacing */
--letterSpacing-1: 0.15em;
--letterSpacing-2: 0.4em;
--letterSpacing-3: 0.2em;
--letterSpacing-4: 0.3em;
--letterSpacing-5: 3px;

/**
 * SPACING
 */

--section-space: 70px;

/**
 * SHADOW
 */

--shadow-1: 0px 0px 25px 0px hsla(0, 0%, 0%, 0.25);

/**
 * BORDER RADIUS
 */

--radius-24: 24px;
--radius-circle: 50%;

/**
 * TRANSITION
 */

--transition-1: 250ms ease;
--transition-2: 500ms ease;
--transition-3: 1000ms ease;

}

li { list-style: none; }
a {
color: inherit;
text-decoration: none;
}

img { height: auto; }


.container { padding-inline: 16px; }

.separator {
width: 8px;
height: 8px;
border: 1px solid var(--gold-crayola);
transform: rotate(45deg);
}


.hover-underline {
position: relative;
max-width: max-content;
}

.hover-underline::after {
content: "";
position: absolute;
left: 0;
bottom: 0;
width: 100%;
height: 5px;
border-block: 1px solid var(--gold-crayola);
transform: scaleX(0.2);
opacity: 0;
transition: var(--transition-2);
}

.hover-underline:is(:hover, :focus-visible)::after {
transform: scaleX(1);
opacity: 1;
}


.header {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 8%;
font-size: 15px;
background-color: #b47b0fd0;
/* background-color: #56482ed0; */
padding-block: 20px;
z-index: 4;
border-block-end: 1px solid transparent;
transition: var(--transition-1);
}

.header.active {
padding-block: 20px;
background-color: var(--eerie-black-4);
border-color: var(--black-alpha-15);
}


.header .container {
padding-inline: 20px;
display: flex;
justify-content: space-between;
align-items: center;
position: relative;
gap: 8px;
right: 160px;
}

.navbar {
position: fixed;
background-color: var(--smoky-black-1);
top: 0;
left: -360px;
bottom: 0;
max-width: 360px;
width: 100%;
padding-inline: 30px;
padding-block-end: 50px;
overflow-y: auto;
visibility: hidden;
z-index: 2;
transition: var(--transition-2);
}

.navbar.active {
visibility: visible;
transform: translateX(360px);
}



.navbar .logo {
max-width: max-content;
margin-inline: auto;
top: -56px;
}

.navbar-list {
border-block-end: 1px solid var(--white-alpha-20);
margin-block-end: 100px;
}

.navbar-item { border-block-start: 1px solid var(--white-alpha-20); }

.navbar-link {
position: relative;
font-size: var(--fontSize-label-2);
text-transform: uppercase;
padding-block: 10px;
max-width: unset;
}

.navbar-link::after { display: none; }

.navbar-link .span { transition: var(--transition-1); }

.navbar-link:is(:hover, :focus-visible, .active) .span {
color: var(--gold-crayola);
transform: translateX(20px);
}
.nav-open-btn,
.navbar > *:not(.navbar-list),
.header .overlay { display: none; }

.header .container { max-width: unset; }

.navbar,
.navbar.active,
.navbar-list { all: unset; }

.navbar,
.navbar.active { margin-inline: auto 20px; }

.navbar-list {
  display: flex;
  gap: 30px;
} 

.navbar-item { border-block-start: none; }

.navbar .separator { display: none; }

.navbar-link:is(:hover, :focus-visible, .active) .span {
  transform: unset;
}

.navbar-link {
  font-weight: var(--weight-bold);
  letter-spacing: var(--letterSpacing-1);
}

.navbar-link::after { display: block; }

.navbar-link.active::after {
  transform: scaleX(1);
  opacity: 1;
}



.display-1 {
font-size: var(--fontSize-display-1);
line-height: var(--lineHeight-1);
}

.headline-1 { font-size: var(--fontSize-headline-1); }

.headline-2 {
font-size: var(--fontSize-headline-2);
line-height: var(--lineHeight-6);
}






/************************ side bar ***************************************************************/

.header .icons i,
header .icons a{
    cursor:pointer;
    margin: left 0.5rem;
    height: 4.5rem;
    line-height: 4.5rem;
    width: 4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color:black;
    border-radius:50%;
    background: #eee;

}
.header .icons i:hover,
header .icons a:hover{
    color: #fff;
    background: #EEBF6D;
    transform: rotate(360deg);

}
.header .icons #menu-bars{
    display: none;
}
.header .icons i,
header .icons a{
    cursor:pointer;
    margin: left 0.5rem;
    height: 4.5rem;
    line-height: 4.5rem;
    width: 4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color:black;
    border-radius:50%;
    background: #eee;

}
.header .icons i:hover,
header .icons a:hover{
    color: #fff;
    background:#EEBF6D;
    transform: rotate(360deg);

}
header .icons #menu-bars{
    display: none;
}


.sidebar{
    margin-top: 140px;
    position:fixed;
    width: 15%;
    height:80%;
    left: -65px;
    
    font-family: "Poppins", sans-serif;
    background-color: #b47b0fd0;
   
}
.sidebar .text{
    color:white;
    font-size: 25px;
    font-weight: 600;
    line-height: 50px;
    text-align: center;
    /* background:white; */
    letter-spacing : 1px;
}
.sidebar .text i{
    cursor:pointer;
    color:white;
  
}
.sidebar .text i:hover{
    color:#EEBF6D;
}
.sidebar ul{
  color:white;
    /* background: white; */
    height: 100%;
    width: 100%;
    list-style:none;
    
}
.sidebar ul li{
    line-height: 50px;
    border-bottom: 1px solid rgba(255,255,255,0.1);

}
.sidebar ul li a{
  color:white;
    text-decoration: none;
    font-size: 15px;
    /* padding-right: 0px; */
    font-weight: 500;
    display: block;
    width: 80%;
    border-left: 3px solid transparent;
    text-align: center;

}
.sidebar ul li a:hover{
    color:#eab965;
    background:#82642f;
    border-top-left-radius: 4;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    border-left: 10px solid #EEBF6D;
    width: 155px;
   
    
}



.notification-badge {
    background-color: red;
    color: white;
    font-size: 12px;
    padding: 2px 5px;
    border-radius: 50%;
    position: absolute;
    top: -33px; /* Ajustez la position verticale selon vos besoins */
    right: 24px; /* Ajustez la position horizontale selon vos besoins */
    overflow: hidden;
}


.containerdev {
  max-width: 1100px;
  margin: 120px auto 0 auto; /* Ajoute une marge en haut pour déplacer le contenu vers le bas */
  padding: 1.5em;
  position: relative;
  
}
  
  .menu {
    font-family: "Inter", sans-serif;
    font-size: 12px;
   
  }
  
  .menu-group-heading {
    margin: 0;
    padding-bottom: 1em;
    border-bottom: 2px solid #EEBF6D;
  }
  
  .menu-group {
    display: grid;
    grid-template-columns: 1fr;
    gap: 10em;
    padding: 1.5em 0;
   
  }
  
  .menu-item {
    display: flex;
    margin-block-end: -100px;
    gap: 10px;
  border-bottom: 3px solid #EEBF6D;
  border-radius: 9px; 
  position: relative;
 

  }
  .menu-item-image {
    width: 80px;
    height: 80px;
    flex-shrink: 0;
    object-fit: cover;
    margin-right: 1.5em;
   
  }
  .menu-item:hover .menu-item-image {
  /* Styles à appliquer lorsque survolé */
  transform: scale(1.1); /* Par exemple, agrandir légèrement l'image */
}
  .menu-item-text {
    flex-grow: 1rem;
 
  }
  .menu-item-price {
    position: relative;
    left:20px;
  color:red;
  margin-left: auto;
 
  }
  .menu-item:hover .menu-item-price {
  /* Styles à appliquer lorsque survolé */
  color: #fe0000; /* Par exemple, changer la couleur du prix */
}
  .menu-item-heading {
    display: flex;
    justify-content: space-between;
    margin: 0;
  }
  
  .menu-item-name {
    margin-right: 1em;
    color: #000000;
    font-family: "Poppins", bold sans-serif;
  }
  .menu-item:hover .menu-item-name {
  /* Styles à appliquer lorsque survolé */
  color: #ecc16c; /* Par exemple, changer la couleur du nom */

}
.menu-item-description {
  line-height: 1.6;
  white-space: nowrap; /* Empêche le texte de se retourner à la ligne */
  text-overflow: ellipsis; /* Affiche des points de suspension (...) pour indiquer que le texte est coupé */
}
  
  @media screen and (min-width: 992px) {
    .menu {
      font-size: 16px;
    }
  
    .menu-group {
      grid-template-columns: repeat(2, 1fr);
    }
  
  }
  .shopping {
    position: absolute;
    bottom: 10px;
    right: 10px;
    color: #EEBF6D;
   
  }
  .hidden {
    display: none;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 90%;
  height: 90%;
 
 
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  /* border: 1px solid #888; */
  width: 50%;
  /* max-width: 800px; */
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);

}
.modal-content h2{
  /* color: rgb(199, 139, 0); */
  font-weight: bold;
    color: #0c0c0c;
    margin-top: 0;
    margin-bottom: 9px;
    background-color:  #eebf6d;
   width:100%;
    padding: 10px;
 
   
}
.cart-items img{
  width: 70%;
}
.modal-content p{
  margin: 0;
  font-size: 15px;
font-weight: bold;
    color: #e18e00;
}

.cart-items li{
  display: grid;
    grid-template-columns: 100px repeat(3, 1fr);
    color: #000000;
    row-gap: 2px;
}

.quantity-container {
    display: flex;
    align-items: center;
}

.quantity-container button {
    background-color: #5c5959;
    border: 1px solid #ccc;
    color: #fdf2c5;
    cursor: pointer;
    padding: 5px 10px;
    margin: 0 5px;
}

.quantity-container .count {
    font-weight: bold;
    color: #000;
    padding: 6px;
    margin: 0 5px;
}
.close {
 
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
  transition: color 0.3s;
}

.close:hover,
.close:focus {
  color :#85590c;
  text-decoration: none;
  cursor: pointer;
}


.modal-content {

  animation: fadeIn 0.3s;
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.confirm-button {
  background-color: #f3d77a; /* Couleur de fond */
    color: black; /* Couleur du texte */
    width: calc(35% - 12px); /* Largeur des boutons */
    margin-bottom: 20px; /* Marge en bas */
    border-radius: 10px; /* Bord arrondi */
    margin-right: 10px; /* Marge entre les boutons */
    height: 40px; /* Hauteur des boutons */
    line-height: 50px; /* Alignement vertical */
    transition: background-color 0.3s; /* Transition fluide */
    border: none; /* Suppression de la bordure */
    padding: 0 15px; /* Espacement interne */
    font-size: 15px; /* Taille de la police */
}

.confirm-button:last-child {
    margin-right: 0; /* Supprimer la marge à droite du dernier bouton pour éviter un espace vide */
}
.confirm-button:hover {
    background-color: #e7a738; /* Changer la couleur de fond au survol */
    cursor: pointer; /* Modifier le curseur en pointeur au survol */
    color: #ffffff; /* Changer la couleur du texte au survol */
}

.delete-icon {
    order: 4; 
    position: relative;
    cursor: pointer;
   left :35rem;
    top: -50px;
}
#cart-items {
    max-height: 200px; /* Hauteur maximale du panier */
    overflow-y: auto; /* Activation du défilement vertical lorsque le contenu dépasse la hauteur */
    overflow-x: hidden; /* Masquage du défilement horizontal */
}
#cart-items::-webkit-scrollbar {
    width: 10px; /* Largeur de la barre de défilement */
    background-color: transparent; /* Couleur de fond de la barre de défilement */
}

#cart-items::-webkit-scrollbar-thumb {
    background-color:#EEBF6D; /* Couleur du curseur de défilement */
    border-radius: 10px; /* Bordure arrondie du curseur de défilement */
}

#cart-items::-webkit-scrollbar-thumb:hover {
    background-color:#f7ae31; /* Couleur du curseur de défilement au survol */
}


</style>
<body>
    <header class="header" data-header>
      <div class="container">
  
        <nav class="navbar" data-navbar>
  
          <ul class="navbar-list">
            <li class="navbar-item">
              <a href="{{ route('welcome')}}" class="navbar-link hover-underline">
                <div class="separator"></div>
                <span class="span">Accueil</span>
              </a>
            </li>
            <li class="navbar-item">
              <a href="{{ route('MenusClients')}}" class="navbar-link hover-underline active">
                <div class="separator"></div>
  
                <span class="span">Menus</span>
              </a>
            </li>
           
            <li class="navbar-item">
              <a href="#about" class="navbar-link hover-underline">
                <div class="separator"></div>
  
                <span class="span">Apropos de nous</span>
              </a>
            </li>
            <li class="navbar-item">
              <a href="#" class="logo navbar-link">
                <img src="images/logo2.png" width="160" height="50" alt="logo">
              </a>
            </li>
            <li class="navbar-item">
              <a href="{{ route('reservation.create')}}" class="navbar-link hover-underline">
                <div class="separator"></div>
  
                <span class="span">Réservation</span>
              </a>
            </li>
  
            <li class="navbar-item">
              <a href="{{ route('Commentaires.create')}}" class="navbar-link hover-underline">
                <div class="separator"></div>
  
                <span class="span">Contact</span>
              </a>
            </li>
            <li>
          </li>
          <li>
              <!-- Icône de panier avec notification -->
              <i href="#" onclick="toggleCart()" style="position: relative;">
                  <lord-icon
                      src="https://cdn.lordicon.com/pbrgppbb.json"
                      trigger="hover"
                      colors="primary:#EEBF6D;"
                      style="width:35px;height:35px; top: -10px;right: 30px;">
                  </lord-icon>
                  <div id="cart-notification" class="notification-badge">0</div>
              </i>
          </li>
      </ul>
            </ul>
     </nav>
   
      </div>
    </header>
<nav class="sidebar">
    <div class="text">
        <ul>
            @foreach($menus as $menu)
            <li><a href="#biryani" onclick="showPlatsByMenu({{ $menu->id }})">{{ $menu->nom }}</a></li>
            @endforeach
        </ul>
        
    </div>
</nav>
<br>

<div class="containerdev">
  <div class="menu" >
    <h2 class="menu-group-heading"  id="selected-menu-heading">Tous</h2>
   
    <div class="menu-group">
      <?php use App\Models\menus; use App\Models\plats; $menus =menus::all(); ?>
      @foreach($menus as $menu)
      @foreach(plats::where('menu_id', $menu->id)->get() as $plat)
      <div class="menu-item" data-menu-id="{{ $menu->id }}">
       
        <img class="menu-item-image" src="{{ asset('images/' . $plat->image) }}" alt="{{ $plat->nom }}">
        <div class="menu-item-text">
          
          <h3 class="menu-item-heading">
            
            <span class="menu-item-name">{{ $plat->nom }}</span>
            <span class="menu-item-price">{{ $plat->prix }}DH</span>
            <a href="#" class="shopping" onclick="addToCart('{{ $plat->nom }}', {{ $plat->prix }}, '{{ asset('images/' . $plat->image) }}')">
              <i class="fas fa-shopping-cart fa-lg"></i>
          </a>
            </h3>
          
          <p class="menu-item-description">
            {{ $plat->description }}
          </p>
        </div>
      </div>
      @endforeach
      @endforeach
    </div>
  </div>
</div>


<!-- Panier -->
<div id="cart-card" class="modal" style="display: none;">
  <div class="modal-content">
      <span class="close">&times;</span>
      <div>
          <h2> Votre panier</h2>
          <ul id="cart-items"class="cart-items"></ul>
         
      </div>
      <div>
 <p id="total-price"></p>
 <div class="button-container">
  <button class="confirm-button" onclick="confirmOrder()">Commander</button>
  <button class="confirm-button" onclick="clearCart()">Vider</button>
</div>
</div>
 

<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script>
  // ********************************** Afficher les plateaux de chaque menu ****************/
  function showPlatsByMenu(menuId) {
      console.log("Fonction showPlatsByMenu appelée avec l'ID du menu :", menuId);
      // Masquer tous les ensembles de plats
      const platsMenus = document.querySelectorAll('.menu-item');
      platsMenus.forEach(platsMenu => {
          platsMenu.classList.add('hidden'); // Ajouter la classe pour masquer
      });
      // Afficher uniquement les plats correspondant au menu sélectionné
      const platsDuMenu = document.querySelectorAll('.menu-item[data-menu-id="' + menuId + '"]');
      if (platsDuMenu.length > 0) {
          console.log("Affichage des plats pour le menu avec l'ID :", menuId);
          platsDuMenu.forEach(plats => {
              plats.classList.remove('hidden'); // Retirer la classe pour afficher
          });
          const menuName = document.querySelector('li a[href="#biryani"][onclick="showPlatsByMenu(' + menuId + ')"]').innerText;
          console.log("Nom du menu sélectionné :", menuName);
          document.getElementById('selected-menu-heading').innerText = menuName;
      } else {
          console.log("Aucun ensemble de plats trouvé pour l'ID de menu :", menuId);
      }
  }

  // ********************************* Ajouter au panier ************/
  var totalPrice = 0;
var totalItems = 0;

function addToCart(itemName, itemPrice, itemImage) {
    var cartItemsList = document.getElementById('cart-items');
    var itemsInCart = cartItemsList.getElementsByClassName('cart-item');

    for (var i = 0; i < itemsInCart.length; i++) {
        var item = itemsInCart[i];
        var nameElement = item.getElementsByClassName('item-name')[0];
        if (nameElement.textContent === itemName) {
            var quantityElement = item.getElementsByClassName('item-quantity')[0];
            var quantity = parseInt(quantityElement.textContent);
            quantity++;
            quantityElement.textContent = quantity;
            totalPrice += itemPrice; // Ajouter le prix de l'article au prix total
            updateTotalPrice();
            updateNotification();
            return;
        }
    }

    var newItem = document.createElement('li');
    newItem.classList.add('cart-item');
    newItem.dataset.price = itemPrice;

    var itemImageElement = document.createElement('img');
    itemImageElement.src = itemImage;
    itemImageElement.alt = itemName;

    var itemNameElement = document.createElement('span');
    itemNameElement.classList.add('item-name');
    itemNameElement.textContent = itemName;

    var itemPriceElement = document.createElement('span');
    itemPriceElement.classList.add('item-price');
    itemPriceElement.textContent = itemPrice + ' DH';

    var quantityElement = document.createElement('span');
    quantityElement.classList.add('item-quantity');
    quantityElement.textContent = 1;

    var plusButton = document.createElement('button');
    plusButton.textContent = '+';
    plusButton.addEventListener('click', function () {
        var quantity = parseInt(quantityElement.textContent);
        quantity++;
        quantityElement.textContent = quantity;
        totalPrice += itemPrice;
        updateQuantityAndPrice(quantityElement, itemPriceElement, itemPrice);
        updateTotalPrice();
        updateNotification();
    });

    var minusButton = document.createElement('button');
    minusButton.textContent = '-';
    minusButton.addEventListener('click', function () {
        var quantity = parseInt(quantityElement.textContent);
        if (quantity > 1) {
            quantity--;
            quantityElement.textContent = quantity;
            totalPrice -= itemPrice;
            updateQuantityAndPrice(quantityElement, itemPriceElement, itemPrice);
            updateTotalPrice();
            updateNotification();
        }
    });

    var deleteIcon = document.createElement('i');
    deleteIcon.classList.add('fas', 'fa-trash', 'delete-icon');
    deleteIcon.style.color = '#EEBF6D';
    deleteIcon.style.fontSize = '1.4em';
    deleteIcon.addEventListener('click', function () {
        var cartItemsList = document.getElementById('cart-items');
        cartItemsList.removeChild(newItem);
        
        var itemTotalPrice = parseFloat(itemPriceElement.textContent.split(' ')[0]);
        var quantity = parseInt(quantityElement.textContent); 
        totalPrice -= itemTotalPrice * quantity; 
        totalItems -= quantity; 
        
        updateTotalPrice();
        updateNotification();
    });

    var quantityContainer = document.createElement('div');
    quantityContainer.classList.add('quantity-container');
    quantityContainer.appendChild(minusButton);
    quantityContainer.appendChild(quantityElement);
    quantityContainer.appendChild(plusButton);

    newItem.appendChild(itemImageElement);
    newItem.appendChild(itemNameElement);
    newItem.appendChild(itemPriceElement);
    newItem.appendChild(quantityContainer);
    newItem.appendChild(deleteIcon);

    var cartItemsList = document.getElementById('cart-items');
    cartItemsList.appendChild(newItem); 

    totalPrice += itemPrice;
    totalItems++;
    updateTotalPrice();
    updateNotification();
}

function updateQuantityAndPrice(quantityElement, itemPriceElement, itemPrice) {
    var currentQuantity = parseInt(quantityElement.textContent);
    var currentPrice = currentQuantity * itemPrice;
    itemPriceElement.textContent = currentPrice.toFixed(2) + ' DH';
}

function updateTotalPrice() {
    var cartItems = document.querySelectorAll(".cart-item");
    var newTotalPrice = 0;

    cartItems.forEach(function(item) {
        var price = parseFloat(item.dataset.price);
        var quantityElement = item.querySelector(".item-quantity");
        var quantity = parseInt(quantityElement.textContent);
        newTotalPrice += price * quantity;
    });

    var totalPriceElement = document.getElementById("total-price");
    totalPriceElement.textContent = "Total : " + newTotalPrice.toFixed(2) + " DH";
}




function updateNotification() {
    var cartNotification = document.getElementById("cart-notification");
    cartNotification.textContent = totalItems;
}


function confirmOrder() {
    var totalPrice = document.getElementById("total-price").textContent;
    var monplats = '';
    
    // Récupérer le montant total sans le texte "Total : " et " DH"
    totalPrice = totalPrice.replace("Total :", "").trim().replace(" DH", "");

    // Récupérer le nom et la quantité de chaque plat
    var cartItemsList = document.getElementById('cart-items');
    var itemsInCart = cartItemsList.getElementsByClassName('cart-item');
    
    // Vérifier si le panier est vide
    if (itemsInCart.length === 0) {
        alert("Votre panier est vide. Veuillez ajouter des articles avant de passer commande.");
        return; // Arrêter la fonction s'il n'y a pas d'articles dans le panier
    }
    
    for (var i = 0; i < itemsInCart.length; i++) {
        var item = itemsInCart[i];
        var nameElement = item.getElementsByClassName('item-name')[0];
        var quantityElement = item.getElementsByClassName('item-quantity')[0];
        
        var itemName = nameElement.textContent;
        var itemQuantity = quantityElement.textContent;
        
        // Ajouter le nom et la quantité du plat au texte monplats avec la quantité entre parenthèses
        monplats += itemName + ' (' + itemQuantity + '), ';
    }
    
    // Supprimer la virgule et l'espace à la fin de monplats
    monplats = monplats.slice(0, -2);

    // Encodez les valeurs pour éviter tout problème avec les caractères spéciaux
    var encodedMonplats = encodeURIComponent(monplats);
    var encodedMontantTotal = encodeURIComponent(totalPrice);

    // Construisez l'URL avec les paramètres correctement séparés
    var url = "{{ route('confirmation.commande') }}?montant_total=" + encodedMontantTotal + "&plats=" + encodedMonplats;
    window.location.href = url;
}

//3afficher le panier*/
function toggleCart() {
    var cartContainer = document.getElementById("cart-card");
    if (cartContainer.style.display === "none") {
        cartContainer.style.display = "block";
        document.body.style.overflow = "hidden"; // Empêcher le défilement de la page lorsque le panier est ouvert
    } else {
        cartContainer.style.display = "none";
        document.body.style.overflow = "auto"; // Autoriser le défilement lorsque le panier est fermé
    }
}


const closeCartModal = document.querySelector('#cart-card .close');
const cartModal = document.querySelector('#cart-card');

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
function clearCart() {
    var cartItemsList = document.getElementById('cart-items');
    // Supprimer tous les éléments enfants de la liste de panier
    while (cartItemsList.firstChild) {
        cartItemsList.removeChild(cartItemsList.firstChild);
    }
    // Réinitialiser le prix total et le nombre d'articles
    totalPrice = 0;
    totalItems = 0;
    updateTotalPrice(); // Mettre à jour l'affichage du prix total
    updateNotification(); // Mettre à jour l'affichage du nombre d'articles dans la notification
    var emptyCartMessage = document.getElementById('empty-cart-message');
    if (cartItemsList.children.length === 0) {
        emptyCartMessage.style.display = 'block'; // Afficher le message
    } else {
        emptyCartMessage.style.display = 'none'; // Masquer le message s'il y a des éléments dans le panier
    }
}


</script>

</body>
</html>
