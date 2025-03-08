<script setup>
import { ref  } from 'vue';
import { useRoute } from 'vue-router';

const currentStep = ref(1);
const route = useRoute();

const formData = ref({
  email: '',
  uploadedCV: null,
  forename: '',
  surname: '',
  mobile: '',
  postcode: '',
  newsUpdate: false,
  jobAlert: false,
  questions: ''

});


const handleFileUpload = (event)=> {
  const file = event.target.files[0];
  if(file){
    formData.value.uploadedCV = file;
  }
} 


const nextStep = () => {
  if (currentStep.value < 4) {
    currentStep.value++;
  } else {
    submitForm();
  }
};

const prevStep = () => {
  if (currentStep.value > 1) {
    currentStep.value--;
  }
};



const submitForm = () => {
  try {
    const form = new FormData();
    form.append('email', formData.value.email);
    form.append('cv', formData.value.uploadedCV);
    form.append('forename', formData.value.forename);
    form.append('mobile', formData.value.mobile);
    form.append('postcode', formData.value.postcode);
    form.append('news_update', formData.value.newsUpdate);
    form.append('job_alert', formData.value.jobAlerts);
    form.append('questions', formData.value.questions);

    const selectedAnswers = {};
    for(let i = 1; i<= 10; i++){
      const selectedOption = document.querySelector(`input[name="q&{i}"]:checked`);
      if (selectedOption){
        selectedAnswers[`q${i}`] = selectedOption.value;
      }
    }

    formData.value.questions = JSON.stringify(selectedAnswers);
    form.append('questions', formData.value.questions);

    console.log("Final Submitted Data:", formData.value);
    alert("Form Submitted Successfully!");
    
  } catch (error) {
    console.error("Form Submission Error:", error);
  }
};

</script>

<template>
  <div class="wrapper">
    <div class="container">
      <div class="step-items">
        <h3><span>Application for</span> Room Attendant</h3>

        <div>
          <div class="arrow-steps clearfix">
            <div class="step current" data-step="1" :class="{ current: currentStep >= 1 }">
              <span class="step-text">Enter your email</span>
            </div>
            <div class="step" data-step="2" :class="{ current: currentStep >= 2 }">
              <span class="step-text">Upload CV</span>
            </div>
            <div class="step" data-step="3" :class="{ current: currentStep >= 3 }">
              <span class="step-text">Your details</span>
            </div>
            <div class="step step-end" data-step="4" :class="{ current: currentStep >= 4 }">
              <span class="step-text">Questions</span>
            </div>
          </div>
        </div>


        <!----- Step One ----->
        <div class="input-email" v-if="currentStep === 1">
          <div class="text-wrapper">
            <label for="email">
              <span class="required-star">*</span>
              <span>Enter your email address</span>
            </label>
            <input v-model="formData.email" type="email" id="email" class="step-input" placeholder="Please enter your email address..." required>
            <small>haven't got an email address? <router-link class="text-primary">click here</router-link></small>
          </div>
        </div>

        <!----- Step Two ----->
        <div class="input-file" v-if="currentStep === 2">
          <div class="text-wrapper">
            <p>You can apply using any of the methods below. We'll pre-fill the form. You decide what to send.
              Please remove personal details such as date of birth or NI number before uploading your CV.</p>

            <div class="apply-buttons">
              <small class="mt-0">Supported file types: doc, docx, pdf & rtf.</small>
              <button class="btn custom-btn btn-outline-primary">
                <div class="custom-file-upload">
                  <label for="cv" class="btn custom-btn btn-outline-primary">
                    <i class="fas fa-file-alt"></i>
                    <span class="divider"></span>
                    Apply using CV
                  </label>
                  <input id="cv" type="file" @change="handleFileUpload" style="display: none;" />
                </div>
              </button>
              <p class="or-text">Or</p>
              <button @click="nextStep" class="btn custom-btn btn-dark">
                <i class="fas fa-keyboard"></i>
                <span class="divider"></span>
                Fill Manually
              </button>
            </div>
          </div>
        </div>




        <!----- Step Three ----->
        <div class="test-container" v-if="currentStep === 3">
          <div class="row">
            <div class="col-md-6">
              <input v-model="formData.forename" type="text" class="form-control" placeholder="Forename" required />
            </div>
            <div class="col-md-6">
              <input v-model="formData.surname" type="text" class="form-control" placeholder="Surname" required />
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-12">
              <input v-model="formData.email" type="email" class="form-control email-input" disabled />
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-6 d-flex align-items-center">
              <select class="form-select" style="max-width: 100px; font-size: 14px;">
                <option selected><img src="https://flagcdn.com/w40/gb.png" class="flag-icon" alt="UK Flag" style="width: 24px;" /> UK</option>
                <option><img src="https://flagcdn.com/w40/us.png" class="flag-icon" alt="US Flag" style="width: 24px;" /> US</option>
                <option><img src="https://flagcdn.com/w40/bd.png" class="flag-icon" alt="BD Flag" style="width: 24px;" /> BD</option>
              </select>
              <input v-model="formData.phone" class="form-control ms-2" style="flex-grow: 1;" type="number" placeholder="Mobile*" />
            </div>
            <div class="col-md-6">
              <input v-model="formData.postcode" type="number" class="form-control" placeholder="Postcode" required />
            </div>
          </div>
          <hr class="mt-4">

          <div class="row cv-section mt-4">
            <h6 class="col-md-6">YOUR CV <span class="text-muted">(optional)</span></h6>
            <div class="col-md-6 cv-file">
              <input type="file" class="form-control-file cv-upload" @change="handleFileUpload"/>
              <p class="file-types">.doc, .docx, .pdf or .rtf</p>
              <p v-if="formData.uploadedCV" >Selected File: {{ formData.uploadedCV.name }}</p>

            </div>
          </div>
          <hr class="mt-4">

          <div class="options-section mt-4">
            <h6>OPTIONS</h6>
            <div>
              <div class="form-check">
                <input v-model="formData.newsUpdate" type="checkbox" class="form-check-input" id="news-updates" />
                <label class="form-check-label" for="news-updates">
                  I wish to receive Latest news and updates.
                </label>
                <p class="option-desc">You will receive occasional emails about latest news and updates. You can cancel alerts at any time.</p>
              </div>

              <div class="form-check">
                <input v-model="formData.jobAlert" type="checkbox" class="form-check-input" id="job-alerts" />
                <label class="form-check-label" for="job-alerts">
                  I wish to receive Jobs By Email alerts.
                </label>
                <p class="option-desc">You will only receive emails when relevant jobs become available. You can cancel alerts at any time.</p>
              </div>
            </div>
          </div>
          <hr class="mt-4">

          <p class="privacy-text">
            By continuing you agree to our <a href="#">Privacy Policy</a>, <a href="#">Terms of Use</a> and <a href="#">use of cookies</a>.
          </p>
        </div>

        <!----- Step Four ----->
        <div class="test-container" v-if="currentStep === 4">
          <p>Please answer all the following questions</p>
          <form class="test-items">
            <div class="mb-3">
              <label class="form-label">1. What does HTML stand for?</label>
              <div>
                <input type="radio" id="q1a" name="q1" value="a">
                <label for="q1a">HyperText Markup Language</label>
              </div>
              <div>
                <input type="radio" id="q1b" name="q1" value="b">
                <label for="q1b">HyperText Machine Language</label>
              </div>
              <div>
                <input type="radio" id="q1c" name="q1" value="c">
                <label for="q1c">Hyper Transfer Markup Language</label>
              </div>
              <div>
                <input type="radio" id="q1d" name="q1" value="d">
                <label for="q1d">None of the above</label>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">2. Which of the following is used to style a web page?</label>
              <div>
                <input type="radio" id="q2a" name="q2" value="a">
                <label for="q2a">HTML</label>
              </div>
              <div>
                <input type="radio" id="q2b" name="q2" value="b">
                <label for="q2b">CSS</label>
              </div>
              <div>
                <input type="radio" id="q2c" name="q2" value="c">
                <label for="q2c">JavaScript</label>
              </div>
              <div>
                <input type="radio" id="q2d" name="q2" value="d">
                <label for="q2d">All of the above</label>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">3. What is the correct HTML element for inserting a line break?</label>
              <div>
                <input type="radio" id="q3a" name="q3" value="a">
                <label for="q3a">&lt;br&gt;</label>
              </div>
              <div>
                <input type="radio" id="q3b" name="q3" value="b">
                <label for="q3b">&lt;break&gt;</label>
              </div>
              <div>
                <input type="radio" id="q3c" name="q3" value="c">
                <label for="q3c">&lt;lb&gt;</label>
              </div>
              <div>
                <input type="radio" id="q3d" name="q3" value="d">
                <label for="q3d">&lt;linebreak&gt;</label>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">4. Which of the following is used to make a website mobile-friendly?</label>
              <div>
                <input type="radio" id="q4a" name="q4" value="a">
                <label for="q4a">CSS Flexbox</label>
              </div>
              <div>
                <input type="radio" id="q4b" name="q4" value="b">
                <label for="q4b">CSS Grid</label>
              </div>
              <div>
                <input type="radio" id="q4c" name="q4" value="c">
                <label for="q4c">Media Queries</label>
              </div>
              <div>
                <input type="radio" id="q4d" name="q4" value="d">
                <label for="q4d">All of the above</label>
              </div>
            </div>

          </form>

          <form class="test-items" action="">
            <div class="mb-3">
              <label class="form-label">1. What does HTML stand for?</label>
              <input type="text" class="form-control" name="q1" placeholder="Your answer here">
            </div>

            <div class="mb-3">
              <label class="form-label">2. What is the purpose of CSS in web development?</label>
              <input type="text" class="form-control" name="q2" placeholder="Your answer here">
            </div>

            <div class="mb-3">
              <label class="form-label">3. Which programming language is mainly used to add interactivity to a webpage?</label>
              <input type="text" class="form-control" name="q3" placeholder="Your answer here">
            </div>

            <div class="mb-3">
              <label class="form-label">4. What is the difference between an ID and a class in CSS?</label>
              <input type="text" class="form-control" name="q4" placeholder="Your answer here">
            </div>

            <div class="mb-3">
              <label class="form-label">5. What is the function of the `
                <meta>` tag in HTML?
              </label>
              <input type="text" class="form-control" name="q5" placeholder="Your answer here">
            </div>

          </form>

        </div>


        <div class="nav">
          <router-link v-if="currentStep === 1" :to="{ name: 'career-job-details', params: { id: route.params.id } }" class="prev">Back</router-link>
          <button v-else @click="prevStep" class="prev">
            {{ currentStep > 1 ? "Previous" : "Back" }}
          </button>
          <button @click="nextStep" class="next">
            {{ currentStep < 4 ? "Next" : "Submit" }} </button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.step-items h3 {
  text-align: center;
}

/* Adjusted Navigation Styling */
.nav {
  display: flex;
  justify-content: space-between;
  margin-top: 40px;
}

a,
a:active {
  color: #333;
  text-decoration: none;
}

a:hover {
  color: #999;
}

.prev,
.next {
  padding: 5px 20px;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.prev:hover,
.next:hover {
  background-color: var(--primary-color);
  color: var(--secondary-color);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.input-email {
  display: flex;
  margin-top: 20px;
  justify-content: center;
  width: 100%;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.wrapper {
  margin: 40px 0;
  vertical-align: middle;
}

.text-wrapper {
  text-align: left;
  width: 70%;
}

.step-input {
  width: 100%;
  border: 1px solid rgb(170, 168, 168);
  padding: 3px 20px;
  border-radius: 5px;
}

.required-star {
  color: red;
  font-size: 16px;
  font-weight: bold;
  margin-left: 3px;
}

/* Step Two */

.input-file {
  display: flex;
  justify-content: center;
  width: 100%;
}

.input-file p {
  margin: 1rem;
}



.apply-buttons {
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 5px;
}

.apply-buttons p {
  margin-bottom: 0px;
}

.custom-btn {
  width: 185px;
  height: 38px;
  font-size: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  border-radius: 5px;
  font-weight: 500;
  position: relative;
}

.divider {
  width: 1px;
  height: 20px;
  background-color: currentColor;
  opacity: 0.5;
}

.or-text {
  font-weight: bold;
  font-size: 16px;
  margin-bottom: 0px;
}


/***** Step Three *****/

.form-container {
  width: 100%;
  margin-bottom: 20px;
  background: white;
  padding: 20px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.form-label {
  font-weight: bold;
  font-size: 14px;
}

.email-input {
  background-color: #e9ecef;
  cursor: not-allowed;
}

.flag-icon {
  width: 25px;
  height: auto;
}

.cv-section {
  display: flex;
  text-align: center;
  align-items: center;
}

.cv-section p {
  display: flex;
  text-align: center;
}

.form-control-file {
  display: flex;
  flex-direction: column;
  align-items: start;
  justify-content: start;
  padding-left: 0px;
}



.file-types {
  font-size: 12px;
  color: gray;
}

.options-section {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 50px;
}

.options-section h6 {
  font-weight: bold;
}

.form-check {
  margin-bottom: 10px;
}

.option-desc {
  font-size: 12px;
  color: gray;
}

.privacy-text {
  font-size: 12px;
  text-align: center;
  margin-top: 15px;
}

.privacy-text a {
  color: #007bff;
  text-decoration: none;
}

/***** Step Four *****/


.test-container {
  width: 100%;
  background: white;
  padding: 20px;
  margin-top: 15px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.test-container p {
  text-align: center;
}

.test-items {
  margin: 0 0 20px 20px;
}



/* ** Arrow Steps ** */

.arrow-steps {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}


.step:first-child {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}

.arrow-steps .step {
  flex-grow: 1;
  font-size: 14px;
  text-align: center;
  color: #666;
  cursor: default;
  padding: 10px 10px 10px 30px;
  float: left;
  position: relative;
  background-color: #d9e3f7;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  transition: background-color 0.2s ease;
  min-width: 50px;
  max-width: auto;
  transition: background-color 0.2s ease, min-width 0.2s ease;
}

.arrow-steps .step:after,
.arrow-steps .step:before {
  content: " ";
  position: absolute;
  top: 0;
  right: -16px;
  top: 3px;
  width: 0;
  height: 0;
  border-top: 19px solid transparent;
  border-bottom: 17px solid transparent;
  border-left: 17px solid #d9e3f7;
  z-index: 2;
  transition: border-color 0.2s ease;
}

.arrow-steps .step:before {
  right: auto;
  left: 0;
  border-left: 19px solid #fff;
  z-index: 0;
}

.arrow-steps .step-end:after {
  content: none;
  display: none;
}

.arrow-steps .step:first-child:before {
  border: none;
}

.arrow-steps .step.current {
  color: #fff;
  background-color: #0871b7;
}

.arrow-steps .step.current:after {
  border-left: 17px solid #0871b7;
}


/* Mobile View: Convert text to numbers */
@media (max-width: 390px) {

  .arrow-steps .step {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    font-size: 18px;
    /* মোবাইলের জন্য ফন্ট বড় করা হলো */
    font-weight: bold;
  }



  .step-text {
    display: none;
  }

  .step:nth-child(1)::before {
    content: "1";
  }

  .step:nth-child(2)::before {
    content: "2";
  }

  .step:nth-child(3)::before {
    content: "3";
  }

  .step:nth-child(4)::before {
    content: "4";
  }

  .arrow-steps .step {
    padding: 37px 10px 10px 30px;
    transition: background-color 0.2s ease, min-width 0.2s ease;
  }
}


@media screen and (max-width: 390px) {
  .arrow-steps .step {
    padding: 37px 10px 10px 30px;
    transition: background-color 0.2s ease, min-width 0.2s ease;
  }

  .input-file p {
    font: normal normal normal 15px / 21px Poppins;
  }

}
</style>
