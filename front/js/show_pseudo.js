window.onload = function () {
  let pseudo_id = new URLSearchParams(window.location.search).get("pseudo_id");
  console.log(pseudo_id);
  const url = "../back/profil_consulter.php?pseudo_id=" + pseudo_id;
  async function fetch_data() {
    let response = await fetch(url);
    let data = await response.json();
    console.log(data);
    if (data.length > 0) {
      let container = document.querySelector("#container");
      container.innerHTML = "";
      data.forEach((item) => {
        console.log(item);
      });
    }
  }
  fetch_data();
};
