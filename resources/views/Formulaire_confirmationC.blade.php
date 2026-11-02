<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Formulaire de Commande</title>
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
   
    position: relative;
    top: -105px;
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
	color:red;
	display: inline-block;
	margin-bottom: 25px;
}
section.left .contactTitle h2::before{
	content: '';
	position: absolute;
	width: 50%;
	height: 1px;
	background-color: #ffffff;
	top: 120%;
	left: 0;
}
section.left .contactTitle h2::after{
	content: '';
	position: absolute;
	width: 25%;
	height: 3px;
   background-color:red;
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
    position: relative;
    top: -75px;
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
	position: relative;
	top: -230px;
	left: 280px;
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

#loading {
    position: fixed;
    top: 50%;
    left: 42%;
    transform: translate(-50%, -50%);
    z-index: 1000;
}

.loading-spinner {
    border: 4px solid rgba(0, 0, 0, 0.1);
    border-left: 4px solid #333; /* Couleur du cercle */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite; /* Animation de rotation */
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
.frais {
    color: #bd3527;
    position: relative;
    top: 30px; 
    left:0px
}
.confcom{
    position: relative;
    top: -230px;
    left: 40px;
    display: none;
     text-align: center;
     color: #bd3527;
	font-size: 18px;
	font-family: bold ;
	margin-bottom: 25px;
}

    </style>
</head>

<body>
    <img src="/images/logo2.png" width="140" height="140" alt="logo"  >

	<div class="container">
	
   
		<main class="row">
			<section class="col left">
				<div class="contactTitle">
                    <h2>Commandé plats</h2>
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
    <div class="container">
        <h2 style="color: #bd3527; text-align: center;"></h2>
        <form  class="messageForm"  action="{{ route('store.commande') }}" method="POST" enctype="multipart/form-data" id="commandeForm" onsubmit="return validateForm()">
            @csrf
            <div class="inputGroup halfWidth">
                <label style="top: -20px;" for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
                </div>
                <div class="inputGroup halfWidth">
                <label style="top: -20px;" for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
                </div>
                <div class="inputGroup halfWidth">
                <label style="top: -20px;" for="telephone">Téléphone:</label>
                <input type="text" id="telephone" name="telephone">
            </div>

            <div class="inputGroup halfWidth">
                <label style="top: -20px;" for="email">Email:</label>
                <input type="text" id="email" name="email">
                </div>
                <div  class="inputGroup halfWidth">
                <label style="top: -20px;" for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse">
            </div>

            <div  class="inputGroup halfWidth">
                <label style="top: -20px; "  >Type de Livraison:</label>
                <div class="delivery-options">
                    <div>
                        <input style="position: relative; top: 11px; left:80px"  type="radio" id="emporter" name="type_livraison" value="emporter">
                        <label style="top: 40px; left:20px" for="emporter">Emporter</label>
                    </div>
                    <div>
                        <input  style="position: relative; top: 27px; left:80px" type="radio" id="livraison_domicile" name="type_livraison" value="livraison_domicile">
                        <label style="top: 80px; left:20px" for="livraison_domicile">Livraison à Domicile</label>
                    </div>
                </div>
                <div class="frais">
                <span id="livraison_notification" ></span>
            </div>
        </div>

            <div class="form-row">
                <label for="montant_total">Montant Total:</label>
                <input type="text" id="montant_total" name="montant_total" value="yyy" readonly>
            </div>
            <div  class="inputGroup fullWidth">
                <label for="plats" style="top: -20px;">Plats Commandés :</label>
                <textarea  id="plats" name="plats" readonly></textarea>
                
                
               
                
            </div>
            <div class="inputGroup fullWidth">
                <button type="submit" value="Suivant">Commander</button>
    </div>

    
    <div id="loading" style="display: none; text-align: center;">
    <div class="loading-spinner"></div>
    <p>Envoi en cours...</p>
</div>


    <!-- Message de confirmation -->
    <div class="confcom" id="confirmation-message"  onsubmit="return validateForm()" >
        Votre commande a été validée avec succès. Un e-mail de confirmation a été envoyé à votre adresse.<br>
       
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var params = new URLSearchParams(window.location.search);
        var montantTotal = params.get('montant_total');
        document.getElementById('montant_total').value = montantTotal;
        var plats = params.get('plats');
        document.getElementById('plats').value = plats;
        document.querySelectorAll('input[name="mode_paiement"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var modePaiement = this.value;
                var enLigneDetails = document.getElementById('en_ligne_details');

                if (modePaiement === 'en_ligne') {
                    enLigneDetails.style.display = 'block';
                } else {
                    enLigneDetails.style.display = 'none';
                }
            });
        });


        document.querySelectorAll('input[name="type_livraison"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var typeLivraison = this.value;
                var livraisonNotification = document.getElementById('livraison_notification');
                var montantTotalField = document.getElementById('montant_total');
                var enLigneDetails = document.getElementById('en_ligne_details');

                if (typeLivraison === 'livraison_domicile') {
                    if (!livraisonNotification.textContent.includes(
                            'Frais de livraison à domicile (20 DH)')) {
                        livraisonNotification.textContent =
                            'Frais de livraison à domicile (20 DH) seront ajoutés au montant total.';
                        var montantTotal = parseFloat(montantTotalField.value) + 20;
                        montantTotalField.value = montantTotal.toFixed(2);
                    }
                    // Cacher les détails de paiement en ligne
                    enLigneDetails.style.display = 'none';
                } else {
                    if (livraisonNotification.textContent.includes(
                            'Frais de livraison à domicile (20 DH)')) {
                        livraisonNotification.textContent = '';
                        var montantTotal = parseFloat(montantTotalField.value) - 20;
                        montantTotalField.value = montantTotal.toFixed(2);
                    }
                }
            });
        });
    });
   


    function validateForm() {
        var nom = document.getElementById('nom').value;
        var prenom = document.getElementById('prenom').value;
        var telephone = document.getElementById('telephone').value;
        var email = document.getElementById('email').value;
        var adresse = document.getElementById('adresse').value;
        var typeLivraison = document.querySelector('input[name="type_livraison"]:checked');

        if (!nom || !prenom || !telephone || !email || !adresse || !typeLivraison) {
            alert('Veuillez remplir tous les champs du formulaire.');
            return false; // Retourne false pour empêcher l'envoi du formulaire
        }

        return true; // Retourne true si tous les champs sont remplis
    }




    var commandeForm = document.getElementById("commandeForm");

    commandeForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Empêcher la soumission par défaut du formulaire


        if (!validateForm()) {
        return; // Sortie de la fonction si la validation échoue
    }



        // Récupérer les données du formulaire
        var formData = new FormData(this);
        var loadingElement = document.getElementById("loading");
        loadingElement.style.display = "block";

        // Envoyer le formulaire à la route spécifiée
        fetch("{{ route('store.commande') }}", {
            method: 'POST',
            body: formData,
           

        })
        .then(response => {
            if (response.ok) {
                // Si la soumission du formulaire réussit, envoyer l'e-mail au client
                sendConfirmationEmail(formData);
            } else {
                // Gérer les erreurs éventuelles lors de la soumission du formulaire
                console.error('Erreur lors de la soumission du formulaire:', response.status);

                loadingElement.style.display = "none";
            }
        })
        .catch(error => {
            console.error('Erreur lors de la soumission du formulaire:', error);

           
            loadingElement.style.display = "none";


        });
      
        function sendConfirmationEmail(formData) {
             // Construire le contenu de l'e-mail
        var emailContent = "Cher(e) client(e), <br>";
        emailContent += "Nous vous remercions d'avoir choisi Savor Unique pour votre commande.<br>";
        emailContent += "Veuillez trouver ci-dessous un récapitulatif de votre commande :<br>";

        // Organiser les informations de la commande avec des tirets

        var dateCommande = new Date();
        var jour = dateCommande.getDate();
        var mois = dateCommande.getMonth() + 1;
        var annee = dateCommande.getFullYear();
        var heure = dateCommande.getHours();
        var minutes = dateCommande.getMinutes();
        var tempsCommande = jour + "/" + mois + "/" + annee + " à " + heure + "h" + minutes;

        emailContent += "Date de la commande: " + tempsCommande + "<br>";

        emailContent += "- Nom: " + formData.get("nom") + "<br>";
        emailContent += "- Prénom: " + formData.get("prenom") + "<br>";
        emailContent += "- Téléphone: " + formData.get("telephone") + "<br>";
        emailContent += "- Email: " + formData.get("email") + "<br>";
        emailContent += "- Adresse de livraison: " + formData.get("adresse") + "<br>";

        emailContent += "- Type de livraison: " + (formData.get("type_livraison") === "livraison_domicile" ?
            "Livraison à domicile" : "Emporter") + "  <br>";
        emailContent += "- Montant total: " + formData.get("montant_total") + "  <br> <br>";

        emailContent += "Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter.<br>";
        emailContent += "Nous sommes impatients de vous servir à nouveau.<br> <br>";
        emailContent += "Cordialement,<br><br>";
        emailContent += "L'équipe de Savor Unique";
       
        // Envoyer l'e-mail
        Email.send({
            SecureToken: "cca738f4-6b8f-4327-bbed-61c26ec7b51b",
            To: formData.get("email"),
            From: "savourunique465@gmail.com",
            Subject: "Confirmation de commande",
            Body: emailContent
        }).then(
            // Si l'e-mail est envoyé avec succès
            message => {

                loadingElement.style.display = "none";
              // Afficher le message de confirmation à l'utilisateur
                document.getElementById("confirmation-message").style.display = "block";
            }
        );
    }
});
    </script>

</body>

</html>
