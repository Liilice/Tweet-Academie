window.onload = function () {
  let form = document.querySelector("#search_member");
  form.addEventListener("submit", (event) => {
    event.preventDefault();

    let search = document.querySelector("#member").value.trim();
    if (!search) {
      return;
    }
    const url = "../back/search_member.php?member=" + search;
    async function fetch_data() {
      let response = await fetch(url);
      let data = await response.json();
      if (data.length > 0) {
        let container = document.querySelector(".container");
        container.innerHTML = "";
        data.forEach((item) => {
          let ul = document.createElement("ul");
          let li1 = document.createElement("li");
          let img = document.createElement("img");
          img.className = "image_search";
          img.setAttribute("src", "./img/" + item.profile_picture);
          li1.append(img);

          let li2 = document.createElement("li");
          li2.innerHTML = item.username + "</br>" + item.at_user_name;

          let li3 = document.createElement("li");
          let button_follow = document.createElement("button");
          button_follow.className = "follow";
          button_follow.innerText = "Suivre";
          li3.append(button_follow);
          button_follow.addEventListener("click", () => {
            console.log("click follow");
          });

          let li4 = document.createElement("li");
          let button_show = document.createElement("button");
          button_show.className = "show";
          button_show.innerText = "Afficher";
          li4.append(button_show);
          button_show.addEventListener("click", () => {
            console.log("click show");
          });

          ul.append(li1, li2, li3, li4);
          container.append(ul);
        });
      }
    }
    fetch_data();
  });
};
