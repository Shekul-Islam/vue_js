<script setup>
import axiosInstance from '@/services/axiosService';
import { useJobPost } from '@/stores';
import { nextTick, ref, computed, watch, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const jobPost = useJobPost();

const currentStep = ref(1);
const emailError = ref('');
const firstNameError = ref('');
const lastNameError = ref('');
const phoneNumberError = ref('');
const postCodeError = ref('');
const selectedCountry = ref("gb");

const countries = [
  { code: "gb", name: "UK", flag: "https://flagcdn.com/w40/gb.png" },
  { code: "us", name: "US", flag: "https://flagcdn.com/w40/us.png" },
  { code: "bd", name: "BD", flag: "https://flagcdn.com/w40/bd.png" },
];

const getFlag = (code) => {
  const country = countries.find((c) => c.code === code);
  return country ? country.flag : "";
};

const form = ref({
  firstName: '',
  lastName: '',
  email: '',
  phoneNumber: '',
  postCode: '',
  status: '',
  latestNewsUpdate: 0,
  newJobAlert: 0,
  attachment: null,
});

const fileInput = ref(null);



const validateEmail = () => {
  if (!form.value.email) {
    emailError.value = "Email is required.";
  } else if (!/\S+@\S+\.\S+/.test(form.value.email)) {
    emailError.value = "Invalid email format.";
  } else {
    emailError.value = null;
  }
};

const validateFirstName = () => {
  if (!form.value.firstName) {
    firstNameError.value = "First Name Field is required.";
  } else {
    firstNameError.value = null;
  }
};

const validateLastName = () => {
  if (!form.value.lastName) {
    lastNameError.value = "Last Name Field is required.";
  } else {
    lastNameError.value = null;
  }
};

const validatePhoneNumber = () => {
  if (!form.value.phoneNumber) {
    phoneNumberError.value = "Phone Number Field is required.";
  } else {
    phoneNumberError.value = null;
  }
};

const validatePostCode = () => {
  if (!form.value.postCode) {
    postCodeError.value = "Post Code Field is required.";
  } else {
    postCodeError.value = null;
  }
};

// ফাইল আপলোড হ্যান্ডলার
const handleFileUpload = (event) => {
  const file = event.target.files[0];

  if (file) {
    form.value.attachment = file;

    nextTick(() => {
      if (fileInput.value) {
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);
        fileInput.value.files = dataTransfer.files;
      }
    });
  }
};

// পরবর্তী স্টেপে যাওয়ার ফাংশন
const nextStep = () => {
  if (emailError.value || !form.value.email) {
    validateEmail();
  } else if (!form.value.firstName && currentStep.value == 3 || !form.value.lastName && currentStep.value == 3 || !form.value.phoneNumber && currentStep.value == 3 || !form.value.postCode && currentStep.value == 3) {
    validateFirstName();
    validateLastName();
    validatePhoneNumber();
    validatePostCode();
  } else {
    if (currentStep.value <= 3) {
      currentStep.value++;
      nextTick(() => {
        if (form.value.attachment) {
          const dataTransfer = new DataTransfer();
          dataTransfer.items.add(form.value.attachment);
          if (fileInput.value) {
            fileInput.value.files = dataTransfer.files;
          }
        }
      });
    } else {
      submitForm();
    }
  }

};
const prevStep = () => {
  if (currentStep.value > 1) {
    currentStep.value--;
  }
};

const submitForm = async () => {
  const formData = new FormData();
  formData.append('first_name', form.value.firstName);
  formData.append('last_name', form.value.lastName);
  formData.append('email', form.value.email);
  formData.append('phone_number', form.value.phoneNumber);
  formData.append('post_code', form.value.postCode);
  formData.append('status', 'active');
  formData.append('latest_news_and_update', form.value.latestNewsUpdate == true ? 1 : 0);
  formData.append('new_job_alert', form.value.newJobAlert == true ? 1 : 0);

  if (form.value.attachment) {
    formData.append('attachment', form.value.attachment);
  }

  let i = 0;
  for (let question of jobPost?.questions) {
    formData.append(`question_answers[${i}][question_id]`, question?.id);
    formData.append(`question_answers[${i}][answer]`, question?.answer == 'Yes' ? 1 : 0);
  }


  try {
    const res = await jobPost.insert(formData);
    if (res?.success) {
      form.value = {
        firstName: '',
        lastName: '',
        email: '',
        phoneNumber: '',
        postCode: '',
        status: '',
        latestNewsUpdate: 0,
        newJobAlert: 0,
        attachment: null
      };

      sessionStorage.clear();
      localStorage.removeItem('formData');

      currentStep.value = 5;
    }
  } catch (error) {
    console.error("Error submitting form:", error);
  }


};



onMounted(() => {
  jobPost.getQuestions();
})

watch(() => form.value.email, validateEmail);
watch(() => form.value.firstName, validateFirstName);
watch(() => form.value.lastName, validateLastName);
watch(() => form.value.postCode, validatePostCode);
watch(() => form.value.phoneNumber, validatePhoneNumber);

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
            <input v-model="form.email" @blur="validateEmail" type="email" id="email" class="step-input form-control" :class="{ 'is-invalid': emailError }"
              placeholder="Please enter your email address..." required>
            <div><span v-if="emailError" class="text-danger">{{ emailError }}</span></div>
            <small>haven't got an email address? <router-link class="text-primary">click here</router-link></small>
          </div>
        </div>

        <!----- Step Two ----->
        <div class="input-file" v-if="currentStep === 2">
          <div class="text-wrapper">
            <p>You can apply using any of the methods below. We'll pre-fill the form. You decide what to send.
              Please remove personal details such as date of birth or NI number before uploading your CV.</p>

            <div class="apply-buttons">
              <small class="m-2">Supported file types: doc, docx, pdf & rtf.</small>
              <button class="btn cv-btn">
                <div class="custom-file-upload">
                  <label for="cv" class="btn cv-btn ">
                    <i class="fas fa-file-alt"></i>
                    <span class="divider"></span>
                    Apply using CV
                  </label>
                  <input id="cv" type="file" @change="handleFileUpload" style="display: none;" />
                </div>
              </button>
              <p class="or-text">Or</p>
              <button @click="nextStep" class="btn btn-manual btn-dark">
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
              <input v-model="form.firstName" @blur="validateFirstName" type="text" class="form-control" :class="{ 'is-invalid': firstNameError }" placeholder="First Name" required />
              <span class="text-danger" v-if="firstNameError">{{ firstNameError }}</span>
            </div>
            <div class="col-md-6">
              <input v-model="form.lastName" @blur="validateLastName" type="text" class="form-control" :class="{ 'is-invalid': lastNameError }" placeholder="Last Name" required />
              <span class="text-danger" v-if="lastNameError">{{ lastNameError }}</span>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-12">
              <input v-model="form.email" type="email" class="form-control email-input" disabled />
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 d-flex align-items-center">

              <select class="form-select flag-select" v-model="selectedCountry">
                <option v-for="country in countries" :key="country.code" :value="country.code">
                  {{ country.name }}
                </option>
              </select>
              <span class="flag-icon">
                <img :src="getFlag(selectedCountry)" class="flag-img" alt="Selected Flag" />
              </span>

            </div>
            <div class="col-md-3">
              <input v-model="form.phoneNumber" @blur="validatePhoneNumber" type="text" class="form-control" :class="{ 'is-invalid': phoneNumberError }" placeholder="Phone Number" required />
              <span class="text-danger" v-if="phoneNumberError">{{ phoneNumberError }}</span>
            </div>

            <div class="col-md-6">
              <input v-model="form.postCode" @blur="validatePostCode" type="text" class="form-control" :class="{ 'is-invalid': postCodeError }" placeholder="Post Code" required />
              <span class="text-danger" v-if="postCodeError">{{ postCodeError }}</span>
            </div>
          </div>

          <hr class="mt-4">

          <div class="row cv-section mt-4">
            <h6 for="cv" class="col-md-6">YOUR CV <span class="text-muted">(optional)</span></h6>
            <div class="col-md-6 cv-file">
              <input type="file" ref="file" id="cv" class="form-control-file cv-upload" @change="handleFileUpload" />
              <p class="file-types">.doc, .docx, .pdf or .rtf</p>

              <p v-if="form.attachment">
                <strong>Uploaded CV:</strong> {{ form.attachment.name }}
              </p>
            </div>
          </div>
          <hr class="mt-4">

          <div class="options-section mt-4">
            <h6>OPTIONS</h6>
            <div>
              <div class="form-check">
                <input v-model="form.latestNewsUpdate" type="checkbox" class="form-check-input" id="news-updates" />
                <label class="form-check-label" for="news-updates">
                  I wish to receive Latest news and updates.
                </label>
                <p class="option-desc">You will receive occasional emails about latest news and updates. You can cancel alerts at any time.</p>
              </div>

              <div class="form-check">
                <input v-model="form.newJobAlert" type="checkbox" class="form-check-input" id="job-alerts" />
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
            <div class="mb-3" v-for="(question, index) in jobPost.questions" :key="index">
              <label class="form-label">{{ index + 1 }}. {{ question.name }}</label>
              <div>
                <input type="radio" :id="'q' + (index + 1) + 'yes'" :name="'q' + (index + 1)" value="Yes" v-model="question.answer">
                <label class="ps-2" :for="'q' + (index + 1) + 'yes'"> Yes</label>
              </div>
              <div>
                <input type="radio" :id="'q' + (index + 1) + 'no'" :name="'q' + (index + 1)" value="No" v-model="question.answer">
                <label class="ps-2" :for="'q' + (index + 1) + 'no'"> No</label>
              </div>
            </div>
          </form>

        </div>

        <div v-if="currentStep === 5" class=" d-flex justify-content-center align-items-center">
          <div class="card custom-card col-md-4 bg-white shadow-md p-2 ">
            <div class="mb-4 text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16" style="color: #A57B5D;">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
              </svg>
            </div>
            <div class="text-center">
              <h1>Thank You !</h1>
              <h6>Your submission has received and we will contact you soon </h6>

            </div>
          </div>
        </div>

        <div class="nav">
          <button v-if="currentStep === 1" @click="router.push({ name: 'career-job-details', params: { id: route.params.id } })" class="prev">Back</button>
          <button v-else @click="prevStep" class="prev">
            {{ currentStep > 1 ? "Previous" : "Back" }}
          </button>
          <button v-if="currentStep <= 4" @click="nextStep" class="next">
            {{ currentStep === 4 ? "Submit" : "Next" }}
          </button>
          <button v-else @click="router.push({ name: 'career-management' })" class="next">
            Back to Post </button>
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

.next:hover {
  background-color: var(--tertiary-color);
  color: var(--secondary-color);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.input-email {
  display: flex;
  margin-top: 75px;
  padding: 30px 0;
  justify-content: center;
  width: 100%;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.wrapper {
  margin: 40px 0;
  vertical-align: middle;
}

.text-wrapper  {
  text-align: center;
  
}

.step-input {
  width: 100%;
  margin: 10px 0;
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
  margin: 2rem;
}



.apply-buttons {
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 5px;
}

.apply-buttons p {
  margin: 0px;
}

.cv-btn {
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
  border: none;
  color: var(--secondary-color);
  background: var(--primary-color);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.cv-btn:hover {
  color: var(--tertiary-color);
  background: var(--secondary-color);
  border: 1px solid var(--tertiary-color);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.btn-manual {
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
  border: none;
  color: var(--secondary-color);
  background: var(--tertiary-color);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);

}

.btn-manual:hover {
  color: var(--tertiary-color);
  background: var(--secondary-color);
  border: 1px solid var(--primary-color);
  box-shadow: 0px 2px 5px rgba(255, 162, 68, 0.1);
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



.flag-select {
  max-width: 100px;
  font-size: 14px;
  padding-right: 40px;
  background-image: none;
}

.flag-icon {
  margin-left: 10px;
}

.flag-img {
  width: 24px;
  height: auto;
}




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
  color: var(--secondary-color);
  cursor: default;
  padding: 10px 10px 10px 30px;
  float: left;
  position: relative;
  background-color: var(--tertiary-color);
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
  border-left: 17px solid var(--tertiary-color);
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
  background-color: var(--primary-color);
}

.arrow-steps .step.current:after {
  border-left: 17px solid var(--primary-color);
}


/* Mobile View: Convert text to numbers */
@media (max-width: 390px) {

  .arrow-steps .step {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    font-size: 18px;
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



.custom-card {
  border: 1px solid var(--primary-color);
  margin-top: 40px;
  justify-content: center;
  width: 600px;
  height: 300px;
  padding: 30px;
}

.custom-btn {
  color: #A57B5D;
  border: 1px solid #A57B5D;
  background-color: transparent;
  transition: all 0.3s ease-in-out;
}

.custom-btn:hover {
  background-color: #A57B5D;
  color: white;
}
</style>
