<script setup></script>

<template>
  <div class="card">
    <div class="person-img cover-photo">
      <img src="@/assets/img/sakul_main.jpg" class="profile" />
    </div>

    <h3 class="profile-name">Md. Sakul Islam</h3>
    <p class="about">Full Stack Web Developer</p>

    <div class="social-buttons">
      <a href="#" class="social-button social-button--linkedin" aria-label="LinkedIn">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a href="#" class="social-button social-button--youtube" aria-label="youtube">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="#" class="social-button social-button--github" aria-label="GitHub">
        <i class="fab fa-github"></i>
      </a>
    </div>

    <div>
      <a class="download-button" href="/docs/cv-sakul.pdf" target="_blank">Download CV</a>
    </div>

    <div class="copyrights">© 2025 All rights reserved to Sakul</div>
  </div>
</template>

<style scoped lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap');

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background: #222;
  height: 100vh;
  display: grid;
  place-items: center;
  font-family: Montserrat;
  color: #b3afbf;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 15px;
  width: 350px;
  background: #222;
  border-radius: 5px;
  text-align: center;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.7);
  user-select: none;
}

.cover-photo {
  position: relative;
  background: url(https://i.imgur.com/jxyuizJ.jpeg);
  background-size: cover;
  height: 180px;
  border-radius: 5px 5px 0 0;
}

.profile {
  position: absolute;
  width: 155px;
  bottom: -88px;
  left: 0px;
  border-radius: 50%;
  border: 2px solid #222;
  background: #222;
  padding: 5px;
}

.profile-name {
  font-size: 20px;
  margin: 0px 0 0 140px;
  color: #fff;
}

.about {
  color: #04b4e0;
  line-height: 1.6;
}

.social-buttons {
}

.download-button {
  background: transparent;
  text-decoration: none;
  padding: 15px 15px;
  border-radius: 25px;
  border: 1px solid #04b4e0;
  font-weight: bold;
  font-family: Montserrat;
  cursor: pointer;
  transition: 0.2s;
  color: #04b4e0;
  border-color: #04b4e0;
  max-width: 146px;
}

.download-button:hover {
  background-color: #1a819b44;
  border-color: #04b4e0;
  color: #fff;
}

.copyrights {
  color: #04b4e0;
}
</style>
