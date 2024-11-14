fetch("assets/data/event-details.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (data) {
    let placeholder = document.querySelector("#event-data");
    let out = "";
    for (let member of data) {
      if (member.doYouWantToShow === "yes") {
        out += `
        <div class="news-card">
          <a href="${member.link.banner}" class="news-card__card-link"></a>
          <img src="${member.image}" alt="AI Crusade" class="news-card__image">
          <div class="news-card__text-wrapper">
            <h2 class="news-card__title">${member.title}</h2>
            <div class="news-card__post-date">${member.post_date}</div>
            <div class="news-card__details-wrapper">
              <p class="news-card__excerpt">${member.description}&hellip;</p>
              <a href="${member.link.button}" class="news-card__read-more">${member.button_name} <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        `;
      }
    }
    placeholder.innerHTML = out;
  });