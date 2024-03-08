window.onload = function () {
  let submit = document.querySelector("#submit");
  submit.addEventListener("submit", () => {
    // event.preventDefault();
    let textarea = document.querySelector("#tweet").value;
    if (textarea.length > 140) {
      event.preventDefault();
      document.querySelector("#error_tweet").innerText =
        "Tweet suppérieur à 140 caractères";
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
    if (data.length > 0) {
      let container = document.querySelector("#container");
      container.innerHTML = "";
      data.forEach((item) => {
        let div_container = document.createElement("div");
        div_container.className =
          "flex w-full px-4 py-3 border-t border-solid border-gray-500";
        let img = document.createElement("img");
        img.setAttribute("src", "./img/" + item.profile_picture);
        img.className = "h-11 w-11";
        let div = document.createElement("div");
        div.className = "flex flex-col w-full ml-3 ";
        let div1 = document.createElement("div");
        div1.className = "flex items-start justify-between text-xl";
        let a_div1 = document.createElement("a");
        a_div1.className = "font-normal text-white";
        a_div1.innerHTML =
          item.username +
          "<span class='text-gray-500 ml-5'>" +
          item.at_user_name +
          " · " +
          item.time +
          " " +
          "</span>";

        let i_div1 = document.createElement("i");
        i_div1.className =
          "material-icons-outlined text-gray-500 text-3xl font-bold";
        i_div1.innerText = item.at_user_name;
        div1.append(a_div1);
        let div2 = document.createElement("div");
        div2.className = "text-white text-2xl";
        let p = document.createElement("p");
        p.style.wordWrap = "break-word";
        if (item.content.includes("Retweet")) {
          let new_content = item.content.replaceAll("Retweet", "");
          if (item.content.match(/#(\w+)/)) {
            p.innerHTML =
              new_content.replace(
                /#(\w[\w-]*)/g,
                '<a href="./hashtags_page.php?hashtag=$1">#$1</a>'
              ) + "</br><span class='text-gray-500 text-sm'>Retweet</span>";
          } else {
            p.innerHTML =
              new_content +
              "</br><span class='text-gray-500 text-sm'>Retweet</span>";
          }
        } else if (item.content.match(/#(\w+)/)) {
          p.innerHTML = item.content.replace(
            /#(\w[\w-]*)/g,
            '<a href="./hashtags_page.php?hashtag=$1">#$1</a>'
          );
        } else {
          p.innerHTML = item.content;
        }
        div2.append(p);
        let div3 = document.createElement("div");
        div3.className = "flex justify-between my-3.5 pr-12";
        let a1 = document.createElement("a");
        a1.className = "text-gray-500 cursor-pointer";
        a1.setAttribute("href", "./comment?tweet_id=" + item.id);
        a1.innerHTML = "<i class='fa-regular fa-comment'></i>";
        let a2 = document.createElement("a");
        a2.className = "text-gray-500";
        a2.setAttribute("href", "../back/retweet.php?retweet_id=" + item.id);
        a2.innerHTML = "<i class='fa-solid fa-retweet '></i>";
        let i3 = document.createElement("i");
        i3.className = "material-icons outlined text-gray-500";
        i3.innerHTML =
          "<span class='material-symbols-outlined'>favorite</span>";
        div3.append(a1, a2, i3);
        div.append(div1, div2, div3);
        div_container.append(img, div);
        container.append(div_container);
      });
    }
  }
  fetch_data();

  let submit_search = document.querySelector("#submit_search");
  submit_search.addEventListener("submit", () => {
    event.preventDefault();
    let input = document.querySelector("#search_hashtag").value;
    if (input) {
      window.location.href = "./hashtags_page.php?hashtag=" + input;
    }
  });
};
