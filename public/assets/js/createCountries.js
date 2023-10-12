const paysSelect = document.getElementById('pays');
const villeSelect = document.getElementById('ville');

var data = countries;

document.addEventListener('DOMContentLoaded', function() {
    paysSelect.innerHTML = '<option value="">Sélectionnez une pays</option>';

    data.countries.forEach(pays => {
        const option = document.createElement('option');
        option.value = pays.name;
        option.text = pays.name;
        if(pays.name=='Morocco'){
            option.selected='selected'
        }
        paysSelect.appendChild(option);
    });
    const selectedPays = data.countries.find(pays => pays.name === paysSelect.value);           
    villeSelect.innerHTML = '<option value="">Sélectionnez une ville</option>';
    
if (selectedPays) {
    selectedPays.ville.forEach(ville => {
    const option = document.createElement('option');
    option.value = ville;
    option.text = ville;
    villeSelect.appendChild(option);
    });
}
});

paysSelect.onchange= () => {
    const selectedPays = data.countries.find(pays => pays.name === paysSelect.value);           
    villeSelect.innerHTML = '<option value="">Sélectionnez une ville</option>';
    
if (selectedPays) {
    selectedPays.ville.forEach(ville => {
    const option = document.createElement('option');
    option.value = ville;
    option.text = ville;
    villeSelect.appendChild(option);
    });
}
}
