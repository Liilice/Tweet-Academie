window.onload = function () {
  let submit = document.querySelector("#submit");
  submit.addEventListener("click", (event) => {
    let email = document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let birthday = document.getElementById("birthday").value;
    let city = document.getElementById("city").value;
    let genre = document.getElementById("genre").value;

    if (!email) {
      event.preventDefault();
      document.getElementById("error_email").innerText =
        "Veuillez remplir le champ";
      document.getElementById("error_email").style.display = "block";
    } else if (!email.includes("@") || !email.includes(".")) {
      event.preventDefault();
      document.getElementById("error_email").innerText = "Manque @ ou .";
      document.getElementById("error_email").style.display = "block";
    } else {
      document.getElementById("error_email").style.display = "none";
    }

    if (!username) {
      event.preventDefault();
      document.getElementById("error_username").innerText =
        "Veuillez remplir le champ";
      document.getElementById("error_username").style.display = "block";
    } else {
      document.getElementById("error_username").style.display = "none";
    }

    if (!password) {
      event.preventDefault();
      document.getElementById("error_password").innerText =
        "Veuillez remplir le champ";
      document.getElementById("error_password").style.display = "block";
    } else if (password.length < 8 || password.length > 20) {
      event.preventDefault();
      document.getElementById("error_password").innerText =
        "Please enter a password between 8 and 20 characters.";
      document.getElementById("error_password").style.display = "block";
    } else if (!password.match(/[a-z]/g)) {
      event.preventDefault();
      document.getElementById("error_password").innerText =
        "Please include at least one lowercase character.";
      document.getElementById("error_password").style.display = "block";
    } else if (!password.match(/[A-Z]/g)) {
      event.preventDefault();
      document.getElementById("error_password").innerText =
        "Please include at least one uppercase character.";
      document.getElementById("error_password").style.display = "block";
    } else if (!password.match(/[0-9]/g)) {
      event.preventDefault();
      document.getElementById("error_password").innerText =
        "Please include at least one number.";
      document.getElementById("error_password").style.display = "block";
    } else if (!password.match(/[^a-zA-Z\d]/g)) {
      event.preventDefault();
      document.getElementById("error_password").innerText =
        "Please include at least one special character.";
      document.getElementById("error_password").style.display = "block";
    } else {
      document.getElementById("error_password").style.display = "none";
    }

    let date_birthday = new Date(birthday);
    let today = new Date();
    let diff_year = today.getFullYear() - date_birthday.getFullYear();
    let diff_month = today.getMonth() - date_birthday.getMonth();
    let diff_day = today.getDay() - date_birthday.getDay();
    if (!birthday) {
      event.preventDefault();
      document.getElementById("error_birthday").innerText =
        "Veuillez remplir le champ";
      document.getElementById("error_birthday").style.display = "block";
    } else if (diff_year < 18) {
      event.preventDefault();
      document.getElementById("error_birthday").innerText =
        "Inscription interdit au moins de 18ans";
      document.getElementById("error_birthday").style.display = "block";
    } else if (diff_year === 18 && diff_month < 0) {
      event.preventDefault();
      document.getElementById("error_birthday").innerText =
        "Inscription interdit au moins de 18ans";
      document.getElementById("error_birthday").style.display = "block";
    } else if (diff_year === 18 && diff_month >= 0 && diff_day < 0) {
      event.preventDefault();
      document.getElementById("error_birthday").innerText =
        "Inscription interdit au moins de 18ans";
      document.getElementById("error_birthday").style.display = "block";
    } else {
      document.getElementById("error_birthday").style.display = "none";
    }

    if (!city) {
      event.preventDefault();
      document.getElementById("error_city").innerText =
        "Veuillez remplir le champ";
      document.getElementById("error_city").style.display = "block";
    } else {
      document.getElementById("error_city").style.display = "none";
    }

    if (genre === "Genre") {
      event.preventDefault();
      document.getElementById("error_genre").innerText =
        "Veuillez choisir un genre";
      document.getElementById("error_genre").style.display = "block";
    } else {
      document.getElementById("error_genre").style.display = "none";
    }
  });
};
