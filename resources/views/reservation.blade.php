<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contactez-nous</title>

    <style>
     *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body{
	width: 100%;
	min-height: 100vh;
	background-color: transparent;
	color: black;
}
.container{
	position: relative;
	width: 100%;
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 30px 8%;
	
}
.container .row{
	display: flex;
	justify-content: space-between;
	width: 100%;
	max-width: 1100px;
}
.row section.col{
	display: flex;
	flex-direction: column;
}
.row section.left{
	flex-basis: 35%;
	min-width: 320px;
	margin-right: 60px;
}
.row section.right{
	flex-basis: 60%;
}
section.left .contactTitle h2{
	position: relative;
	font-size: 28px;
	color: red;
	display: inline-block;
	margin-bottom: 25px;
}
section.left .contactTitle h2::before{
	content: '';
	position: absolute;
	width: 50%;
	height: 1px;
	
	top: 120%;
	left: 0;
}
section.left .contactTitle h2::after{
	content: '';
	position: absolute;
	width: 25%;
	height: 3px;
	background-color: red;
	top: calc(120% - 1px);
	left: 0;
}
section.left .contactTitle p{
	font-size: 17px;
	color: #0c0c0c;
	letter-spacing: 1px;
	line-height: 1.2;
	padding-bottom: 22px;
}
section.left .contactInfo{
	margin-bottom: 16px;
  
}
.contactInfo .iconGroup{
	display: flex;
	align-items: center;
	margin: 25px 0px;
}
.iconGroup .icon{
	width: 45px;
	height: 45px;
	border: 2px solid #EEBF6D;
	border-radius: 50%;
	margin-right: 20px;
	position: relative;
}
.iconGroup .icon i{
	font-size: 20px;
	color: #040404;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
.iconGroup .details span{
	display: block;
	color: #0a0a0a;
	font-size: 18px;
}
.iconGroup .details span:nth-child(1){
	text-transform: uppercase;
	color: #0f0e0e;
}
section.left .socialMedia{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	flex-wrap: wrap;
	margin: 22px 0px 20px;
}
.socialMedia a{
	width: 35px;
	height: 35px;
	text-decoration: none;
	text-align: center;
	margin-right: 15px;
	border-radius: 5px;
	background-color: #EEBF6D;
	transition: 0.4s;
}
.socialMedia a i{
	color: #000000;
	font-size: 18px;
	line-height: 35px;
	border: 1px solid transparent;
	transition-delay: 0.4s;
}
.socialMedia a:hover{
	transform: translateY(-5px);
	background-color: #ffffff;
	color:#070707;
	border: 1px solid #EEBF6D;
}
.socialMedia a:hover i{
	color:#EEBF6D;
}


.row section.right .messageForm{
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	padding-top: 30px;
}
.row section.right .inputGroup{
	margin: 18px 0px;
	position: relative;
}
.messageForm .halfWidth{
	flex-basis: 48%;
}
.messageForm .fullWidth{
	flex-basis: 100%;
}
.messageForm input, .messageForm textarea{
	width: 100%;
	font-size: 18px;
	padding: 2px 0px;
	background-color: transparent;
	color: black;
	border: none;
	border-bottom: 2px solid #EEBF6D;
	outline: none;
}
.messageForm textarea{
	resize: none;
	height: 220px;
	display: block;
	
}
textarea::-webkit-scrollbar{
	width: 5px;
}
textarea::-webkit-scrollbar-track{
	background-color: #1e1e1e;
	border-radius: 15px;
}
textarea::-webkit-scrollbar-thumb{
	background-color: #EEBF6D;
	border-radius: 15px;
}
.inputGroup label{
	position: absolute;
	left: 0;
	bottom: 4px;
	color: black;
	font-size: 18px;
	transition: 0.4s;
	pointer-events: none;
}
.inputGroup:nth-child(4) label{
	top: 2px;
}
.inputGroup input:focus ~ label, .inputGroup textarea:focus ~ label,
.inputGroup input:valid ~ label, .inputGroup textarea:valid ~ label
{
	transform: translateY(-30px);
	font-size: 16px;
}
.inputGroup button{
  
	padding: 8px 16px;
	font-size: 18px;
	background-color: #EEBF6D;;
	color: #050505;
	border: 1px solid transparent;
	border-radius: 25px;
	outline: none;
	cursor: pointer;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
	transition: 0.4s;
}
.inputGroup button:hover{
   
	background-color:#EEBF6D;
	color:white;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
	border: 1px solid#EEBF6D;
}
@media(max-width: 1100px){
	.messageForm .halfWidth{
		flex-basis: 100%;
	}
}
@media(max-width: 900px){
	.container .row{
		flex-wrap: wrap;
	}
	.row section.left, .row section.right{
		flex-basis: 100%;
		margin: 0px;
	}
}
img{
   
	position:relative;
	top:-2rem;
}


</style>
</head>
<body>

	<img src="/images/logo2.png" width="140" height="140" alt="logo" >

	<div class="container">
	
   
		<main class="row">
            
			<section class="col left">
				<div class="contactTitle">
                    <h2>Montant de reservation : </h2>
                    <h2>200 DH !! </h2>
					</div>
             <div class="contactInfo">
			<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="details">
							<span>Tél:</span>
							<span> 05 71 21 31 41</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="details">
							<span>Email:</span>
							<span>savourunique@gmail.com</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="details">
							<span>Adresse:</span>
							<span>Agadir BAY,Cornich 80000</span>
						</div>
					</div>

				</div>


				<div class="socialMedia">
					<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>

			
			</section>

		

			<section class="col right">
				
				

				<form class="messageForm" action="{{ route('reservation.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="inputGroup halfWidth">
                    <label style="top: -20px;">Nom:</label>
						<input type="text" name="nom" required="required">
						
					</div>
					<div class="inputGroup halfWidth">
                    <label style="top: -20px;">Prénom:</label>
						<input type="text" name="prenom" required="required">
						
					</div>
					<div class="inputGroup halfWidth">
                    <label style="top: -20px;">email:</label>
						<input type="email" name="email" required="required">
						
					</div>
					<div class="inputGroup halfWidth">
                    <label style="top: -20px;">Téléphone:</label>
						<input type="text" name="telephone" required="required">
						
					</div>
                    <div class="inputGroup halfWidth">
                    <label style="top: -20px;">adresse:</label>
						<input type="text" name="adresse" required="required">
						
					</div>
                    <div class="inputGroup halfWidth">
                    <label style="top: -20px;">datereservation:</label>
						<input  type="date" name="datereservation" required="required">
						
					</div>
					<div class="inputGroup halfWidth">
                    <label style="top: -20px;">heurereservation:</label>
						<input type="time" name="heurereservation" required="required">
						
					</div>
                    <div class="inputGroup halfWidth ">
    <label for="nombrepersonnes" style="top: -20px;">Nombre de personne:</label>
    <select style="background-color: #EEBF6D;" id="nombrepersonnes" name="nombrepersonnes">
        <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
    </select>
</div>

           
            <div class="inputGroup fullWidth"  style="display: flex; justify-content: center;">
						<button type="submit" value="Suivant" style="top: -70px;">Envoyer</button>
					</div>
				</form>
                <div id="error-message" class="error-message"></div>
			</section>
           
		

		</main>
	</div>
</body>
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

    // Votre autre script ici...
    const toggleThemeButton = document.getElementById('toggleThemeButton');
    const disableDarkModeButton = document.getElementById('disableDarkModeButton');

    // Ajouter un écouteur d'événement pour le clic sur l'icône du mode sombre
    toggleThemeButton.addEventListener('click', () => {
        // Activer le mode sombre
        document.body.classList.add('dark-mode');

        // Mettre à jour la classe active
        toggleThemeButton.classList.remove('active');
        disableDarkModeButton.classList.add('active');
    });

    // Ajouter un écouteur d'événement pour le clic sur l'icône de désactivation du mode sombre
    disableDarkModeButton.addEventListener('click', () => {
        // Désactiver le mode sombre
        document.body.classList.remove('dark-mode');

        // Mettre à jour la classe active
        toggleThemeButton.classList.add('active');
        disableDarkModeButton.classList.remove('active');
    });

    // Récupérer les données des commandes depuis l'attribut data-commandes
    var commandesDataElement = document.getElementById('commandesData');
    var commandes = JSON.parse(commandesDataElement.getAttribute('data-commandes'));

    // Traiter les données pour le graphique des commandes (par exemple, compter le nombre de commandes par mois)
    var commandesParMois = {};
    commandes.forEach(function(commande) {
        var mois = commande.created_at.substring(0, 7); // Extraire le mois (format YYYY-MM)
        if (!commandesParMois[mois]) {
            commandesParMois[mois] = 0;
        }
        commandesParMois[mois]++;
    });

    // Convertir les données en format utilisable par Chart.js pour les commandes
    var dataCommandes = {
        labels: Object.keys(commandesParMois),
        datasets: [{
            label: 'Nombre de commandes',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            data: Object.values(commandesParMois)
        }]
    };

    // Configuration du graphique pour les commandes
    var optionsCommandes = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    };

    // Dessiner le graphique à barres pour les commandes
    var ctxCommandes = document.getElementById('commandesChart').getContext('2d');
    var commandesChart = new Chart(ctxCommandes, {
        type: 'bar',
        data: dataCommandes,
        options: optionsCommandes
    });

   // Récupérer les données des réservations depuis le contrôleur


// Convertir les données en format utilisable par Chart.js
const data = {
    labels: Object.keys(reservationsByDay),
    datasets: [{
        label: 'Nombre de réservations',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
        data: Object.values(reservationsByDay)
    }]
};

// Configuration du graphique
var ctx = document.getElementById('commandesChart').getContext('2d');
var commandesChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});

// Dessiner le graphique à barres
var ctx2 = document.getElementById('reservationsChart').getContext('2d'); // Changement de la variable ctx à ctx2
var reservationsChart = new Chart(ctx2, {
    type: 'bar',
    data: data, // Utilisation des mêmes données pour le deuxième graphique
    options: options
});

</script>

</html>