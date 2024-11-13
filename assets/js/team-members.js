fetch("assets/data/team-members.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (data) {
    let placeholder = document.querySelector("#team-data");
    let out = "";
    for (let member of data) {
      if (member.doYouWantToShow === "yes") {
        out += `
        <div class="col-md-4 col-sm-6">
          <div class="our-team">
            <div class="team_img">
              <img src="${member.image}" alt="Team Image">
              <ul class="social">
                <li><a href="${member.social.facebook}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="${member.social.github}" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="${member.social.linkedin}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="team-content">
              <h3 class="title">${member.name}</h3>
              <span class="post">${member.position}</span>
            </div>
          </div>
        </div>
        `;
      }
    }
    placeholder.innerHTML = out;
  });