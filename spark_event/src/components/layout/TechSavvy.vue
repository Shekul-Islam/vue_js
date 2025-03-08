<script setup>
</script>

<template>
  <div class="tech-savvy">
        <div class="items">
          <div class="tech-savvy-text">
            <h2 class="title">WE ARE TECH SAVVY</h2>
            <p class="description">
              Our staff login portal simplifies employee management, allowing our team to easily track their working hours, check-in/out times, and monthly payments—all in one place. With real-time updates on attendance, work shifts, and performance, we ensure seamless communication between staff and management, keeping everything transparent and efficient.
            </p>
          </div>
          <div class="image-wrapper">
            <img src="@/assets/image/home/tech-savvy/Tech-Savvy-Desktop.png" alt="Tech Savvy Image" />
          </div>
        </div>
        
  </div>
</template>

<style scoped>

.tech-savvy{
  width: 100%;
  height: 350px;
  background-color: #464646;
}


.items {
  display: grid;
  justify-content: center;
}

.tech-savvy-text {
  display: flex;
  flex-direction: column;
  text-align: left;
  align-items: start;
  transform: translate(-17%, 32.2%);
}


.title {
  color: var(--primary-color);
  text-transform: uppercase;
  font: normal normal bold 32px/24px Montserrat;
}

.description {
    max-width: 508px;
    height: 198px;
    color: var(--secondary-color);
    font: normal normal normal 16px/24px Poppins;
   
}

.image-wrapper {
    display: flex;
    justify-content: right;
    overflow: visible; 
    transform: translate(27%, -64.0%);
}

.image-wrapper img {
  max-width: 800px;
  height: 750px;
  transition: transform 0.3s ease-in-out;
}


@media screen and (max-width: 1024px) {

.tech-savvy-text {
  transform: translate(-21%, 34.2%);
}


.title {
  color: var(--primary-color);
  text-transform: uppercase;
  font: normal normal bold 27px/22px Montserrat;
}

.description {
    max-width: 400px;
    height: 190px;
    color: var(--secondary-color);
    font: normal normal normal 15px/24px Poppins;
   
}

.image-wrapper {
    transform: translate(27%, -61%);

}

.image-wrapper img {
  max-width: 650px;
  height: 600px;
  transition: transform 0.3s ease-in-out;
}

}


@media screen and (max-width: 912px) {

.tech-savvy{
height: 254px;
}

.tech-savvy-text {
  transform: translate(-38%, 3.2%);
}


.title {
color: var(--primary-color);
text-transform: uppercase;
font: normal normal bold 22px/38px Montserrat;
}

.description {
  max-width: 325px;
  height: 189px;
  color: var(--secondary-color);
  font: normal normal normal 15px/21px Poppins;
 
}

.image-wrapper {
transform: translate(35%, -81%);

}

.image-wrapper img {
max-width: 436px;
height: 394px;
transition: transform 0.3s ease-in-out;
}

}



@media screen and (max-width: 820px) {

.tech-savvy{
height: 254px;
}

.tech-savvy-text {
transform: translate(-32%, 3.2%);
}


.title {
color: var(--primary-color);
text-transform: uppercase;
font: normal normal bold 21px/36px Montserrat;
}

.description {
  max-width: 325px;
  height: 189px;
  color: var(--secondary-color);
  font: normal normal normal 15px/21px Poppins;
 
}

.image-wrapper {
transform: translate(35%, -81%);

}

.image-wrapper img {
max-width: 436px;
height: 394px;
transition: transform 0.3s ease-in-out;
}

}


@media screen and (max-width: 768px) {

  .tech-savvy{
  height: 254px;
}

.tech-savvy-text {
  transform: translate(-32%, 3.2%);
}


.title {
  color: var(--primary-color);
  text-transform: uppercase;
  font: normal normal bold 20px/36px Montserrat;
}

.description {
    max-width: 325px;
    height: 189px;
    color: var(--secondary-color);
    font: normal normal normal 15px/21px Poppins;
   
}

.image-wrapper {
  transform: translate(35%, -81%);

}

.image-wrapper img {
  max-width: 436px;
  height: 394px;
  transition: transform 0.3s ease-in-out;
}

}


@media screen and (max-width: 540px) {

.tech-savvy{
height: 389px;
}

.items {
  display: grid;
}

.tech-savvy-text {
  transform: translate(4%, 69.2%);
}


.title {
color: var(--primary-color);
text-transform: uppercase;
font: normal normal bold 18px/32px Montserrat;
}

.description {
  max-width: 375px;
  height: 170px;
  color: var(--secondary-color);
  font: normal normal normal 14px/21px Poppins;
 
}

.image-wrapper {
  transform: translate(0%, -108%);
}

.image-wrapper img {
max-width: 395px;
height: 350px;
transition: transform 0.3s ease-in-out;
}

}

@media screen and (max-width: 430px) {

.tech-savvy{
height: 389px;
}

.items {
  display: grid;
}

.tech-savvy-text {
  transform: translate(4%, 69.2%);
}


.title {
color: var(--primary-color);
text-transform: uppercase;
font: normal normal bold 18px/32px Montserrat;
}

.description {
  max-width: 355px;
  height: 167px;
  color: var(--secondary-color);
  font: normal normal normal 14px/21px Poppins;
 
}

.image-wrapper {
  transform: translate(0%, -108%);
}

.image-wrapper img {
max-width: 395px;
height: 350px;
transition: transform 0.3s ease-in-out;
}

}

@media screen and (max-width: 425px) {

.tech-savvy{
height: 389px;
}

.items {
  display: grid;
}

.tech-savvy-text {
  transform: translate(4%, 69.2%);
}


.title {
color: var(--primary-color);
text-transform: uppercase;
font: normal normal bold 18px/32px Montserrat;
}

.description {
  max-width: 355px;
  height: 167px;
  color: var(--secondary-color);
  font: normal normal normal 14px/21px Poppins;
 
}

.image-wrapper {
  transform: translate(0%, -108%);
}

.image-wrapper img {
max-width: 395px;
height: 350px;
transition: transform 0.3s ease-in-out;
}

}


@media screen and (max-width: 344px) {

.tech-savvy{
height: 389px;
}

.items {
  display: grid;
}

.tech-savvy-text {
  transform: translate(7%, 75.2%);
  margin-right: 22px;
}


.title {
color: var(--primary-color);
text-transform: uppercase;
font: normal normal bold 17px/30px Montserrat;
}

.description {
  max-width: 295px;
  height: 155px;
  color: var(--secondary-color);
  font: normal normal normal 13px/19px Poppins;
 
}

.image-wrapper {
  transform: translate(0%, -105%);
}

.image-wrapper img {
max-width: 365px;
height: 320px;
transition: transform 0.3s ease-in-out;
}

}


@media screen and (max-width: 320px) {

.tech-savvy{
height: 389px;
}

.items {
  display: grid;
}

.tech-savvy-text {
  transform: translate(7%, 75.2%);
  margin-right: 22px;
}


.title {
color: var(--primary-color);
text-transform: uppercase;
font: normal normal bold 17px/30px Montserrat;
}

.description {
  max-width: 295px;
  height: 155px;
  color: var(--secondary-color);
  font: normal normal normal 13px/19px Poppins;
 
}

.image-wrapper {
  transform: translate(0%, -105%);
}

.image-wrapper img {
max-width: 365px;
height: 320px;
transition: transform 0.3s ease-in-out;
}

}

</style>
