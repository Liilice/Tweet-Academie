window.onload = function () {
  let submit = document.querySelector("#submit");
  submit.addEventListener("submit", () => {
    // event.preventDefault();
    let textarea = document.querySelector("#tweet").value;
    if (textarea.length > 130) {
      event.preventDefault();
      document.querySelector("#error_tweet").innerText =
        "Tweet suppérieru à 130 caractères";
      document.querySelector("#error_tweet").style.display = "block";
    } else if (!textarea) {
      event.preventDefault();
      document.querySelector("#error_tweet").innerText = "Tweet vide";
      document.querySelector("#error_tweet").style.display = "block";
    } else {
      document.querySelector("#error_tweet").style.display = "none";
    }
  });
  const url = "../back/fetch_tweet.php";
  async function fetch_data() {
    let response = await fetch(url);
    let data = await response.json();
    console.log(data);
    if (data.length > 0) {
      let container = document.querySelector("#container");
      container.innerHTML = "";
      data.forEach((item) => {
        console.log(item);
        let img = document.createElement("img");
        img.setAttribute("src", "./img/" + item.profile_picture);
        img.className = "h-11 w-11";
        let div = document.createElement("div");
        div.className = "flex flex-col w-full ml-3";
        let div1 = document.createElement("div");
        div1.className = "flex items-start justify-between text-xl";
        let a_div1 = document.createElement("a");
        a_div1.className = "font-normal text-white";
        a_div1.innerHTML =
          item.username +
          "<span class='text-gray-500'>" +
          item.at_user_name +
          "</span>";
        let i_div1 = document.createElement("i");
        i_div1.className =
          "material-icons-outlined text-gray-500 text-3xl font-bold";
        i_div1.innerText = item.at_user_name;
        div1.append(a_div1);
        let div2 = document.createElement("div");
        div2.className = "text-white text-2xl w-full";
        let p = document.createElement("p");
        p.innerText = item.content;
        div2.append(p);
        let div3 = document.createElement("div");
        div3.className = "flex justify-between my-3.5 pr-12";
        let i1 = document.createElement("i");
        i1.className = "material-icons outlined text-gray-500";
        i1.innerHTML =
          "<span class='material-symbols-outlined'>mode_comment</span>";
        let i2 = document.createElement("i");
        i2.className = "material-icons outlined text-gray-500";
        i2.innerHTML = "<span class='material-symbols-outlined'>sync</span>";
        let i3 = document.createElement("i");
        i3.className = "material-icons outlined text-gray-500";
        i3.innerHTML =
          "<span class='material-symbols-outlined'>favorite</span>";
        div3.append(i1, i2, i3);
        div.append(div1, div2, div3);
        container.append(img, div);
        // let div1 = document.createElement("div");
        // div1.className =
        //   "flex w-full min-h-24 px-4 py-3 border-t border-solid border-gray-500";
        // let img = document.createElement("img");
        // img.className = "h-11 w-11";
        // img.setAttribute("src", "./img/" + item.profile_picture);
        // let div_s_img = document.createElement("div");
        // div_s_img.className = "flex flex-col w-full ml-3";
        // let div_div1 = document.querySelector("div");
        // div_div1.className = "flex items-start justify-between text-xl";
        // let a_div1 = document.createElement("a");
        // a_div1.className = "font-normal text-white";
        // a_div1.innerHTML =
        //   item.username +
        //   "<span class='text-gray-500'>" +
        //   item.at_user_name +
        //   "</span>";
        // let i_a = document.createElement("i");
        // i_a.className =
        //   "material-icons-outlined text-gray-500 text-3xl font-bold";
        // i_a.innerText = item.at_user_name;
        // div_div1.append(a_div1, i_a);
        // let div_div2 = document.createElement("div");
        // div_div2.className = "text-white text-2xl w-full";
        // let p = document.createElement("p");
        // p.innerText = item.content;
        // div_div2.append(p);
        // let div_div3 = document.createElement("div");
        // let i1 = document.createElement("i");
        // i1.className = "material-icons outlined text-gray-500";
        // i1.innerHTML =
        //   "<span class='material-symbols-outlined'>mode_comment</span>";
        // let i2 = document.createElement("i");
        // i1.className = "material-icons outlined text-gray-500";
        // i1.innerHTML = "<span class='material-symbols-outlined'>sync</span>";
        // let i3 = document.createElement("i");
        // i1.className = "material-icons outlined text-gray-500";
        // i1.innerHTML =
        //   "<span class='material-symbols-outlined'>favorite</span>";
        // div_div3.append(i1, i2, i3);
        // div_s_img.append(div_div1, div_div2, div_div3);
        // div1.append(img, div_s_img);
        // container.append(div1);
      });
    }
  }
  fetch_data();
};
