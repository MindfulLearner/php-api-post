const element = document.getElementById("button");
element.addEventListener("click", clickBottone);


function clickBottone() {
    const dati = [];

    const nome = document.getElementById("nome");
    const cognome = document.getElementById("cognome");

    dati.push({nome: nome.value,cognome: cognome.value});

    console.table(dati);

    const payload = JSON.stringify(dati);

    console.log("poison");
    axios
        .post('http://192.168.1.101:8080/api.php', payload, {
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then((response) => console.log(response))
        .catch((error) => console.error(error));
}

