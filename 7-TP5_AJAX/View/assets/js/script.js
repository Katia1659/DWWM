
// Fonction qui permet de mettre a jour les stagiaires grace a un call ajax via jquery
function updateStag(action, id, nom , prenom) {
    $(document).ready(function() {
        let data = {
            action: action,
            id: $(id).val(),
            nom: $(nom).val(),
            prenom: $(prenom).val(),
        };

        //ajax request
        $.ajax({
            type: "POST",
            url: "../Controller/execUpdate.php",
            data: data,
            dataType: "json",
            success: function(response) {
                if (response === 0){
                    alert('Mise a jour fait');
                }else if (response === 0){
                    alert('Erreur');
                }
            }
        });
    })
}
// Fonction qui permet de supprimer les stagiaires
function deleteStag(id) {
    $(document).ready(function() {
        let data = {
            action: "delete",
            id: id
        };

        //ajax request
        $.ajax({
            type: "POST",
            url: "../Controller/execDelete.php",
            data: data,
            dataType: "json",
            success: function(response) {
                if (response === 0){
                    document.getElementById(id).style.display = 'none';
                }else if (response === 0){
                    alert(response);
                }
            }
        });
    })

}
// Fonction qui permet d'afficher les stagières.
function selectStag(action) {
    $(document).ready(function() {
        let data = {
            action: action,
        };

        //ajax request
        $.ajax({
            type: "POST",
            url: "../Controller/execSelect.php",
            data: data,
            dataType: "json",
            success: function(response) {
                if (response === 0){
                    console.log("success");
                }else if (response === 0){
                    console.log("error");
                }
            }
        });
    })

}