
<?php
include "../modele/Personne.class.PHP";
include "../modele/Etudiant.class.php";
include "../modele/Employer.class.php";
include "../modele/Professeur.class.php";


// 	Deux étudiants.
$etud1= new Etudiant(14589, "LAMRI", "KAOUTHAR");
$etud2= new Etudiant (1490,"DUPONT","Laurence");
// 	Deux employés.
$emp1= new Employe("MAJD","Nadine", 3500);
$emp2= new Employe("CHANG","Lee",2500);
// 	Deux professeurs.
$prof1= new Professeur("BENALI","Rande", 3550, "FRONT-END");
$prof2= new Professeur("GOMEZ","JOSE", 3600, "BACK-END");
// 	Afficher les informations de chaque personne. 

$institue = array($emp1,$emp2,$prof1,$prof2, $etud1, $etud2);

echo $emp1;

// foreach ($institue as $key => $objet) {
//     echo $objet;
// }
?>
