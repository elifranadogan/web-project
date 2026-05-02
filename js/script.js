function filmAra() {

    let filmAdi = document.getElementById("film").value;

    fetch("https://www.omdbapi.com/?apikey=61a1d220&t=" + filmAdi)
    .then(response => response.json())
    .then(data => {

        if (data.Response == "True") {
            document.getElementById("sonuc").innerHTML = `
                <h3>${data.Title}</h3>
                <img src="${data.Poster}">
                <p>Yıl: ${data.Year}</p>
                <p>Tür: ${data.Genre}</p>
                <p>IMDB: ${data.imdbRating}</p>
            `;
        } else {
            document.getElementById("sonuc").innerHTML = "Film bulunamadı";
        }

    });
}
function kontrolEt() {

    let ad = document.getElementById("ad").value;
    let email = document.getElementById("email").value;
    let telefon = document.getElementById("telefon").value;

    if (ad == "" || email == "" || telefon == "") {
        alert("Boş alanları doldurun!");
        return;
    }

    if (!email.includes("@")) {
        alert("Email hatalı!");
        return;
    }

    if (isNaN(telefon)) {
        alert("Telefon sadece sayı olmalı!");
        return;
    }

    alert("JS kontrol başarılı!");
}