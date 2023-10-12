        const paysSelect = document.getElementById('pays');
        const villeSelect = document.getElementById('ville');

        var data = countries;
        var selectedVille=document.getElementById('data-countries').getAttribute('data-ville')
        var selectedPay=document.getElementById('data-countries').getAttribute('data-countrie')
        
        document.addEventListener('DOMContentLoaded', function() {
            data.countries.forEach(pays => {
                const option = document.createElement('option');
                if(pays.name===selectedPay){
                    option.selected='selected'
                }
                option.value = pays.name;
                option.text = pays.name;
                paysSelect.appendChild(option);
            });
            getVilles()
        });

        paysSelect.onchange=()=> getVilles()

        function  getVilles(){
            const selectedPays = data.countries.find(pays => pays.name === paysSelect.value);
            villeSelect.innerHTML=`<option value="">selectionner option</option>`
            if (selectedPays) {
                selectedPays.ville.forEach(ville => {
                const option = document.createElement('option');
                option.value = ville;
                option.text = ville;
                if(ville===selectedVille){
                        option.selected='selected'
                    }
                villeSelect.appendChild(option);
                });
            }
         }
