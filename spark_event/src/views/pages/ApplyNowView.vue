<script setup>
import { useJobPost } from '@/stores';
import { useRoute, useRouter } from 'vue-router';
import axiosInstance from '@/services/axiosService';
import { ref, computed, watch, onMounted, reactive } from 'vue';

const route = useRoute();
const router = useRouter();
const jobPost = useJobPost();

const jobTypeId = ref('');
const totalItems = ref(0);


// const props = defineProps(['id', 'title']);


// const post  = useJobPost();

// const formatJobType = (type) => {
//   return type.replace('-', ' ').replace(/\b\w/, (c) => c.toUpperCase());
// };

const postData = ref([]);

const jobPostData = computed(() => postData.value);




const getJobPost = async () => {
  try {
    const res = await jobPost.getJobs({
      job_type_id: Number(jobTypeId.value) || null,
    });


    // Check if response is valid and meta exists
    if (res && res?.result?.data && res?.result?.meta && res?.result?.meta.total !== undefined) {
      postData.value = res?.result?.data;

      totalItems.value = res?.result?.meta?.total;
    } else {
      postData.value = [];
      totalItems.value = 0;
    }
  } catch (error) {
    console.error('Error fetching job posts:', error);
  }
}


const form = ref({
  jobPost: '',
  firstName: '',
  middleName: '',
  lastName: '',
  email: '',
  phoneNumber: '',
  dateOfBirth: '',
  address: '',
  city: '',
  town: '',
  country: '',
  postCode: '',
  niNumber: '',
  passportFile: null,
  visaFile: null,
  ukviFile: null,
  brpFile: null,
  preSettleFile: null,
  proofAddressFile: null,
  cvFile: null,
  referenceFile: null,
  companyName: "",
  employeName: "",
  jobTitle: "",
  Location: "",
  relFirstName: '',
  relMiddleName: '',
  relLastName: '',
  relPhoneNumber: '',
  relLocation: '',
  latestNewsUpdate: 0,
  newJobAlert: 0,
  hearAboutUs: '',
});


// form.value.jobPost = props.title;

// watch(() => props.title, (newTitle) => {
//   form.value.jobPost = newTitle;
// });

const selectedPassport = ref("");
const referenceFile = ref(null);

const selectedUpload = ref("");
const fileError = ref(null);
const currentStep = ref(1);

const availability = ref([
  { day: "monday", early: false, late: false, night: false, unavailable: false },
  { day: "tuesday", early: false, late: false, night: false, unavailable: false },
  { day: "wednesday", early: false, late: false, night: false, unavailable: false },
  { day: "thursday", early: false, late: false, night: false, unavailable: false },
  { day: "friday", early: false, late: false, night: false, unavailable: false },
  { day: "saturday", early: false, late: false, night: false, unavailable: false },
  { day: "sunday", early: false, late: false, night: false, unavailable: false },
]);

const showSingleFileInput = computed(() => ["british", "us", "eu"].includes(selectedPassport.value));
const showMultipleFileInput = computed(() => selectedPassport.value === "other");
const showBrpInputFields = computed(() => form.value.brpFile !== null);
const showReferenceFields = computed(() => referenceFile.value !== null);
const showVisaFields = computed(() => visaFile.value !== null);

const visaFile = ref(null);
const brpNumber = ref("");
const passportType = ref("");
const passportNumber = ref("");
const passportInput = ref(null);

const handlePassportChange = () => {
  passportType.value = selectedPassport.value;
  passportNumber.value = "";
  passportInput.value = null;
  visaFile.value = null;
};


// ফাইল আপলোড হ্যান্ডলার
const handlePassportUpload = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.passportFile = file;
  }
};

const handleVisaUpload = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.visaFile = file;
  }
};

const handleBrpUpload = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.brpFile = file;
  }
};

const handleUkviUpload = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.ukviFile = file;
  }
};
const handlePreSettleUpload = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.preSettleFile = file;
  }
};
const handleProofUpload = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.proofAddressFile = file;
  }
};
const handleRefUpload = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.referenceFile = file;
    referenceFile.value = file;
  }
};
const handleCVUpload = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.value.cvFile = file;
  }
};




// const handleVisaFileUpload = (event) => {
//   const file = event.target.files[0];
//   if (file) {
//     visaInput.value = file;
//   } else {
//     visaInput.value = null;
//   }
// };


// dropdown


const countries = [
  { code: "gb", name: "UK", flag: "https://flagcdn.com/w40/gb.png" },
  { code: "us", name: "US", flag: "https://flagcdn.com/w40/us.png" },
  { code: "bd", name: "BD", flag: "https://flagcdn.com/w40/bd.png" },
];

const getFlag = (code) => {
  const country = countries.find((c) => c.code === code);
  return country ? country.flag : "";
};



// Error Message 
const errors = reactive({
  jobPost: '',
  firstName: '',
  lastName: '',
  email: '',
  phoneNumber: '',
  dateOfBirth: '',
  address: '',
  city: '',
  town: '',
  country: '',
  postCode: '',
  passportFile: null,
  passportNumber: '',
  visaFile: null,
  ukviFile: null,
  brpFile: null,
  preSettleFile: null,
  proofAddressFile: null,
  cvFile: null,
  referenceFile: null,
  companyName: "",
  employeName: "",
  jobTitle: "",
  Location: "",
  latestNewsUpdate: 0,
  newJobAlert: 0,
  hearAboutUs: '',
});

// Popup Message
const showPopup = ref(false);
const popupMessage = ref("");

const showErrorPopup = (message) => {
  popupMessage.value = message;
  showPopup.value = true;
  setTimeout(() => {
    showPopup.value = false;
  }, 3000);
};



// Individual Field Validation
const validateFirstName = () => {
  if (!form.value.firstName) {
    errors.firstName = "First Name is required.";
  } else {
    errors.firstName = null;
  }
};

const validateLastName = () => {
  if (!form.value.lastName) {
    errors.lastName = "Last Name is required.";
  } else {
    errors.lastName = null;
  }
};

const validateEmail = () => {
  if (!form.value.email) {
    errors.email = "Email is required.";
  } else if (!/\S+@\S+\.\S+/.test(form.value.email)) {
    errors.email = "Invalid email format.";
  } else {
    errors.email = null;
  }
};

const validatePhoneNumber = () => {
  if (!form.value.phoneNumber) {
    errors.phoneNumber = "Phone Number is required.";
  } else {
    errors.phoneNumber = null;
  }
};

const validateDateOfBirth = () => {
  if (!form.value.dateOfBirth) {
    errors.dateOfBirth = 'Date of Birth is required.';
  } else if (new Date(form.value.dateOfBirth) > new Date()) {
    errors.dateOfBirth = 'Date of Birth cannot be in the future.';
  } else {
    errors.dateOfBirth = null;
  }
};



const validateAddress = () => {
  if (!form.value.address) {
    errors.address = "Address Field is required.";
  } else {
    errors.address = null;
  }
};

const validateCity = () => {
  if (!form.value.city) {
    errors.city = "City Field is required.";
  } else {
    errors.city = null;
  }
};

const validateTown = () => {
  if (!form.value.town) {
    errors.town = "Town Field is required.";
  } else {
    errors.town = null;
  }
};

const validatePostCode = () => {
  if (!form.value.postCode) {
    errors.postCode = "Post Code Field is required.";
  } else {
    errors.postCode = null;
  }
};
const validatePassportNumber = () => {
  if (!form.value.passportNumber) {
    errors.passportNumber = "Passport Number is required.";
  } else {
    errors.passportNumber = null;
  }
};

// Validate-next




// ফর্ম সাবমিট করার সময় পুরো ফর্ম চেক করবে
const validateForm = () => {
  validateFirstName();
  validateLastName();
  validateEmail();
  validatePhoneNumber();
  validateDateOfBirth();
  validateAddress();
  validateCity();
  validateTown();
  validatePostCode();
  validatePassportNumber();

  console.log("Errors Object:", errors); // Debugging

  // Check if any error exists
  if (Object.values(errors).some(error => error !== null)) {
    showErrorPopup("Please fill all required fields.");
  } else {
    showErrorPopup("Form submitted successfully!");
  }
};


const validateFile = (event) => {
  const file = event.target.files[0]; // প্রথম ফাইল নেওয়া
  const allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'pdf'];
  const maxSize = 2 * 1024 * 1024; // 2MB

  if (!file) {
    fileError.value = "Please select a file.";
    return;
  }

  const fileExtension = file.name.split('.').pop().toLowerCase();
  if (!allowedExtensions.includes(fileExtension)) {
    fileError.value = "Invalid file type! Allowed: jpg, jpeg, gif, png, bmp, pdf.";
    return;
  }

  if (file.size > maxSize) {
    fileError.value = "File size must be less than 2MB.";
    return;
  }

  fileError.value = null; // কোনো সমস্যা না থাকলে error মুছে ফেলুন
  passportFile.value = file; // ফাইল সংরক্ষণ করুন
};



// পরবর্তী স্টেপে যাওয়ার ফাংশন
const nextStep = () => {
  console.log("Next Step Button Clicked, Current Step:", currentStep.value);
  if (currentStep.value < 2) {
    currentStep.value++;
  }
};
const prevStep = () => {
  if (currentStep.value > 1) {
    currentStep.value--;
  }
};

const submitForm = async () => {
  const formData = new FormData();

  console.log("Submitting Form...");
  formData.append('job_post', form.value.jobPost);
  formData.append('first_name', form.value.firstName);
  formData.append('middle_name', form.value.middleName);
  formData.append('last_name', form.value.lastName);
  formData.append('email', form.value.email);
  formData.append('phone_number', form.value.phoneNumber);
  formData.append('address', form.value.address);
  formData.append('city', form.value.city);
  formData.append('town', form.value.town);
  formData.append('country', form.value.country);
  formData.append('post_code', form.value.postCode);
  formData.append('ni_number', form.value.niNumber);
  formData.append('passport_type', passportType.value);
  formData.append('passport_number', passportNumber.value);
  formData.append('company_name', form.value.companyName);
  formData.append('employee_name', form.value.employeName);
  formData.append('job_title', form.value.jobTitle);
  formData.append('location', form.value.Location);
  formData.append('rel_first_name', form.value.relFirstName);
  formData.append('rel_middle_name', form.value.relMiddleName);
  formData.append('rel_last_name', form.value.relLastName);
  formData.append('rel_phone', form.value.relPhoneNumber);
  formData.append('rel_location', form.value.relLocation);
  formData.append('status', 'active');
  formData.append('latest_news_and_update', form.value.latestNewsUpdate == true ? 1 : 0);
  formData.append('new_job_alert', form.value.newJobAlert == true ? 1 : 0);
  formData.append('hear_about_us', form.value.hearAboutUs);

  if (form.value.dateOfBirth) {
    const formattedDate = new Date(form.value.dateOfBirth).toISOString().split('T')[0];
    formData.append('date_of_birth', formattedDate);
  } else {
    formData.append('date_of_birth', '');
  }


  if (form.value.passportFile) {
    formData.append('passport_file_path', form.value.passportFile);
  }
  if (form.value.visaFile) {
    formData.append('e_visa_file_path', form.value.visaFile);
  }
  if (form.value.brpFile) {
    formData.append('brp_file_path', form.value.brpFile);
  }
  if (form.value.preSettleFile) {
    formData.append('eu_pre_settlement_file_path', form.value.preSettleFile);
  }
  if (form.value.ukviFile) {
    formData.append('ukvi_share_code_file_path', form.value.ukviFile);
  }
  if (form.value.cvFile) {
    formData.append('attachment', form.value.cvFile);
  }
  if (form.value.proofAddressFile) {
    formData.append('proof_of_address_file_path', form.value.proofAddressFile);
  }
  if (form.value.referenceFile) {
    formData.append('employee_file_path', form.value.referenceFile);
  }

  let i = 0;
  for (const data of availability.value) {
    formData.append(`availabilities[${i}][day]`, data?.day);
    formData.append(`availabilities[${i}][early]`, data?.early ? 1 : 0);
    formData.append(`availabilities[${i}][late]`, data?.late ? 1 : 0);
    formData.append(`availabilities[${i}][night]`, data?.night ? 1 : 0);
    formData.append(`availabilities[${i}][unavailable]`, data?.unavailable ? 1 : 0);

    i++;
  }


  // for (let pair of formData.entries()) {
  //   console.log(pair[0] + ': ' + pair[1]);
  // }

  try {
    const res = await jobPost.insert(formData);
    if (res?.success) {
      form.value = {
        firstName: '',
        middleName: '',
        lastName: '',
        email: '',
        phoneNumber: '',
        dateOfBirth: '',
        country: '',
        address: '',
        city: '',
        town: '',
        postCode: '',
        niNumber: '',
        passportFile: null,
        visaFile: null,
        ukviFile: null,
        brpFile: null,
        preSettleFile: null,
        proofAddressFile: null,
        referenceFile: null,
        cvFile: null,
        relFirstName: '',
        relMiddleName: '',
        relLastName: '',
        relPhoneNumber: '',
        relLocation: '',
        latestNewsUpdate: 0,
        newJobAlert: 0,
        hearAboutUs: ''
      };

      sessionStorage.clear();
      localStorage.removeItem('formData');

      currentStep.value = 2;
      console.log("Form Submitted Successfully, Moving to Step:", currentStep.value);
    }
  } catch (error) {
    console.error("Error submitting form:", error);
  }
};

onMounted(() => {
  getJobPost();
  jobPost.getJobTypes();

})

</script>

<template>
  <div class="wrapper">
    <div class="container">
      <div class="step-items">
        <form @submit.prevent="validateForm">

          <div v-if="currentStep === 1" class="apply-form-page">
            <div>
              <div class="application-form">
                <div class="form-title">
                  <h2>Application for {{ form.jobPost }}</h2>
                  <hr>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="arrow-steps clearfix">
                      <div class="step current">
                        <span class="step-text">Choose Your Job Title</span>
                      </div>
                      <div class="step step-end"></div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <select v-model="form.jobPost" id="job-select" class="custom-select">
                        <option value="" selected disabled>Select Job Title</option>
                        <option v-for="(data, index) in jobPostData" :key="index" :value="data?.title">{{ data?.title }}</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <div class="availability-table">
                      <div class="arrow-steps clearfix">
                        <div class="step current">
                          <span class="step-text">Availability</span>
                        </div>
                        <div class="step step-end">
                        </div>
                      </div>
                      <div class="table-responsive-wrapper">
                        <table class="data-table">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Early</th>
                            <th>Late</th>
                            <th>Night</th>
                            <th>Unavailable</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="(data, i) in availability" :key="i">
                            <td>{{ data?.day }}</td>
                            <td><input v-model="data.early" type="checkbox"></td>
                            <td><input v-model="data.late" type="checkbox"></td>
                            <td><input v-model="data.night" type="checkbox"></td>
                            <td><input v-model="data.unavailable" type="checkbox"></td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>

                  <!-- PERSONAL DETAILS Code Here -->
                  <div class="col-md-12">
                    <div class="personal-details-title">
                      <div class="arrow-steps clearfix">
                        <div class="step current">
                          <span class="step-text">PERSONAL DETAILS</span>
                        </div>
                        <div class="step step-end">
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group-field">
                      <label for="">First Name</label>
                      <input v-model="form.firstName" @blur="validateFirstName" type="text" class="form-control" :class="{ 'is-invalid': errors.firstName }" placeholder="First Name" required />
                      <span class="text-danger" v-if="errors.firstName">{{ errors.firstName }}</span>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group-field">
                      <label for="">Middle Name</label>
                      <input v-model="form.middleName" type="text" placeholder="Your Middle Name">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group-field">
                      <label for="">Last Name</label>
                      <input v-model="form.lastName" @blur="validateLastName" type="text" class="form-control" :class="{ 'is-invalid': errors.lastName }" placeholder="Last Name" required />
                      <span class="text-danger" v-if="errors.lastName">{{ errors.lastName }}</span>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group-field">
                      <label for="">Email</label>
                      <input v-model="form.email" @blur="validateEmail" type="email" id="email" :class="{ 'is-invalid': errors.value?.email }" placeholder="Please enter your email address..."
                        required>
                      <div><span v-if="errors.email" class="text-danger">{{ errors.email }}</span></div>
                    </div>
                  </div>

                  <div class="col-lg- col-md-6">
                    <div class="form-group-field">
                      <label for="">Phone Number</label>
                      <input v-model="form.phoneNumber" @blur="validatePhoneNumber" :class="{ 'is-invalid': errors.phoneNumber }" type="text" placeholder="example (+44)0111-2222222" required>
                      <span v-if="errors.phoneNumber" class="text-danger">{{ errors.phoneNumber }}</span>
                    </div>
                  </div>

                  <div class="col-md-12"></div>


                  <div class="col-lg-4 col-md-4">
                    <div class="form-group-field">
                      <label for="">Date of Birth</label>
                      <input v-model="form.dateOfBirth" @blur="validateDob" :class="{ 'is-invalid': errors.dateOfBirth }" type="date" placeholder="Your Phone">
                      <span v-if="errors.dateOfBirth" class="text-danger">{{ errors.dateOfBirth }}</span>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group-field">
                      <label for="">Address</label>
                      <input v-model="form.address" @blur="validateAddress" :class="{ 'is-invalid': errors.address }" class="form-control" type="text" placeholder="Type Your Address" required>
                      <span v-if="errors.address" class="text-danger">{{ errors.address }}</span>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group-field">
                      <label for="">City</label>
                      <input v-model="form.city" @blur="validateCity" :class="{ 'is-invalid': errors.city }" type="text" placeholder="Your City">
                      <span v-if="errors.city" class="text-danger">{{ errors.city }}</span>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group-field">
                      <label for="">Town</label>
                      <input v-model="form.town" @blur="validateTown" :class="{ 'is-invalid': errors.town }" type="text" placeholder="Your Town">
                      <span v-if="errors.town" class="text-danger">{{ errors.town }}</span>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group-field">
                      <label for="">Postal Code</label>
                      <input v-model="form.postCode" @blur="validatePostCode" :class="{ 'is-invalid': errors.postCode }" type="text" placeholder="Postal Code Here">
                      <span v-if="errors.postCode" class="text-danger">{{ errors.postCode }}</span>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group-field">
                      <label for="">Country</label>
                      <select v-model="form.country" name="" id="" class="custom-select">
                        <option disabled value="">Select Country</option>
                        <option value="uk">United Kingdoom</option>
                      </select>
                    </div>
                  </div>

                  <!-- OTHERS INFORMATION Code Here -->
                  <div class="col-md-12">
                    <div class="personal-details-title">
                      <div class="arrow-steps clearfix">
                        <div class="step current">
                          <span class="step-text">OTHERS INFORMATION</span>
                        </div>
                        <div class="step step-end">
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group-field">
                      <label for="">N.I Number</label>
                      <input v-model="form.niNumber" type="text" placeholder="Insurance Number">
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <div class="form-group-field">
                      <div class="main-container">
                        <div class="form-field input-field-custom-control">
                          <label for="passport-type">Passport Type *:</label>
                          <select v-model="selectedPassport" @change="handlePassportChange">
                            <option value="">--Select Type--</option>
                            <option value="british">British Passport</option>
                            <option value="eu">EU Passport</option>
                            <option value="us">US Passport</option>
                            <option value="other">Other Passport</option>
                          </select>
                        </div>

                        <!-- File Input Fields -->
                        <div v-if="showSingleFileInput" class="form-field">
                          <div class="d-flex">
                            <div class="col-md-3 form-group-field">
                              <label for="">Upload Passport *</label>
                              <div class="files-upload-field">
                                <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                                <input @change="handlePassportUpload" type="file">
                              </div>
                              <span><small>Images (jpg, jpeg, gif, png, bmp) or pdf</small></span>
                            </div>
                            <div class="col-md-9 pt-5">
                              <p v-if="form.passportFile">
                                <strong>Uploaded Passport:</strong> {{ form.passportFile.name }}
                              </p>
                            </div>
                          </div>

                          <div class="additional-fields">
                            <div class="form-field">
                              <label for="col-md-6 custom-input1">Passport Number *</label>
                              <input type="text" v-model="passportNumber" @blur="validatePassportNumber" :class="{ 'is-invalid': errors.passportNumber }" placeholder="Enter Passport Number" />
                            </div>
                          </div>
                        </div>

                        <div>
                          <div v-if="showMultipleFileInput" class="file-inputs">
                            <!-- Passport Upload -->
                            <div class="d-flex">
                              <div class="col-md-3 form-group-field">
                                <label>Upload Passport *</label>
                                <div class="files-upload-field">
                                  <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                                  <input type="file" @change="handlePassportUpload" />
                                </div>
                              </div>
                              <div class="col-md-9 pt-5">
                                <p v-if="form.passportFile">
                                  <strong>Uploaded Passport:</strong> {{ form.passportFile.name }}
                                </p>
                              </div>
                            </div>
                            <div class="col-md-6 additional-fields">
                              <div class="form-field">
                                <label for="custom-input1">Passport Number *</label>
                                <input type="text" v-model="passportNumber" @blur="validatePassportNumber" :class="{ 'is-invalid': errors.passportNumber }" placeholder="Enter Passport Number" />
                              </div>
                            </div>


                            <!-- Dropdown for Selecting Upload -->
                            <div>
                              <label for="">Upload one is required</label>
                              <select v-model="selectedUpload">
                                <option value="">Select an Option</option>
                                <option value="visa">E-Visa</option>
                                <option value="brp">BRP Upload</option>
                                <option value="preSettlement">EU Pre-Settlement</option>
                              </select>
                            </div>

                            <!-- e-Visa Upload -->
                            <div v-if="selectedUpload === 'visa'">
                              <div class="d-flex">
                                <div class="col-md-3 form-group-field">
                                  <label>Upload E-Visa </label>
                                  <div class="files-upload-field">
                                    <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                                    <input type="file" @change="handleVisaUpload" />
                                  </div>
                                </div>
                                <div class="col-md-9 pt-5">
                                  <p v-if="form.visaFile">
                                    <strong>Uploaded Pre-Settlement:</strong> {{ form.visaFile.name }}
                                  </p>
                                </div>
                              </div>

                            </div>

                            <!-- BRP Upload -->
                            <div v-if="selectedUpload === 'brp'">
                              <div class="d-flex">
                                <div class="col-md-3 form-group-field">
                                  <label>Upload BRP</label>
                                  <div class="files-upload-field">
                                    <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                                    <input type="file" @change="handleBrpUpload" />
                                  </div>
                                </div>
                                <div class="col-md-9 pt-5">
                                  <p v-if="form.brpFile">
                                    <strong>Uploaded Pre-Settlement:</strong> {{ form.brpFile.name }}
                                  </p>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div v-if="showBrpInputFields" class="additional-fields">
                                  <div class="form-field">
                                    <label for="brp-number">BRP Number</label>
                                    <input v-model="brpNumber" type="text" id="brp-number" placeholder="Enter BRP Number" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Upload Pre-Settlement -->
                            <div class="d-flex">
                              <div v-if="selectedUpload === 'preSettlement'" class="col-md-3">
                                <div class="form-group-field">
                                  <label for="">Upload EU Pre-Settlement <br>(if you are EU Settler)</label>
                                  <div class="files-upload-field">
                                    <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                                    <input @change="handlePreSettleUpload" type="file">
                                  </div>
                                  <span>Only Word or PDF</span>
                                </div>
                              </div>
                              <div class="col-md-9 pt-5">
                                <p v-if="form.preSettleFile">
                                  <strong>Uploaded Pre-Settlement:</strong> {{ form.preSettleFile.name }}
                                </p>
                              </div>
                            </div>

                          </div>

                        </div>

                        <div class="d-flex">
                          <div class="col-md-3 form-group-field">
                            <label>Upload your UKVI share code *</label>
                            <div class="files-upload-field">
                              <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                              <input type="file" @change="handleUkviUpload" />
                            </div>
                          </div>
                          <div class="col-md-9 pt-5">
                            <p v-if="form.ukviFile">
                              <strong>Uploaded Employee Reference:</strong> {{ form.ukviFile.name }}
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>



                  <!-- Upload CV -->
                  <div class="col-md-3">
                    <div class="form-group-field">
                      <label for="">Upload CV *</label>
                      <div class="files-upload-field">
                        <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                        <input @change="handleCVUpload" type="file">
                      </div>
                      <span>Only Word or PDF</span>
                    </div>
                  </div>
                  <div class="col-md-9 pt-5">
                    <p v-if="form.cvFile">
                      <strong>Uploaded CV:</strong> {{ form.cvFile.name }}
                    </p>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group-field">
                      <label for="">Upload Proof of Address *</label>
                      <div class="files-upload-field">
                        <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                        <input @change="handleProofUpload" type="file">
                      </div>
                      <span>Only Word or PDF</span>
                    </div>
                  </div>
                  <div class="col-md-9 pt-5">
                    <p v-if="form.proofAddressFile">
                      <strong>Uploaded Proof of Address:</strong> {{ form.proofAddressFile.name }}
                    </p>
                  </div>


                  <div class="col-md-12">
                    <div class="personal-details-title">
                      <div class="arrow-steps clearfix">
                        <div class="step current">
                          <span class="step-text">Previous Employee Reference</span>
                        </div>
                        <div class="step step-end">
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group-field">
                      <label for="">Upload Employee Reference</label>
                      <div class="files-upload-field">
                        <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                        <input @change="handleRefUpload" type="file">
                      </div>
                      <span>Only Word or PDF</span>
                    </div>
                  </div>
                  <div class="col-md-9 pt-5">
                    <p v-if="form.referenceFile">
                      <strong>Uploaded Employee Reference:</strong> {{ form.referenceFile.name }}
                    </p>
                  </div>

                  <div v-if="showReferenceFields">
                    <div class="form-group-field">
                      <div class="row">
                        <div class="col-md-6">
                          <div class=" form-field">
                            <label for="brp-number">Company Name</label>
                            <input type="text" id="brp-number" v-model="form.companyName" placeholder="Company Name" />
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class=" form-field">
                            <label for="brp-number">Employee Name</label>
                            <input type="text" id="brp-number" v-model="form.employeName" placeholder="Employee Name" />
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-field">
                            <label for="brp-number">Job Title</label>
                            <input type="text" id="brp-number" v-model="form.jobTitle" placeholder="Job Title" />
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-field">
                            <label for="brp-number">Location</label>
                            <input type="text" id="brp-number" v-model="form.Location" placeholder="Location" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <!-- NEXT OF KIN Code Here -->
                  <div class="col-md-12">
                    <div class="personal-details-title">
                      <div class="arrow-steps clearfix">
                        <div class="step current">
                          <span class="step-text">NEXT OF KIN</span>
                        </div>
                        <div class="step step-end">
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="form-group-field">
                      <label for="">First Name</label>
                      <input v-model="form.relFirstName" type="text" placeholder="Your First Name">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group-field">
                      <label for="">Middle Name</label>
                      <input v-model="form.relMiddleName" type="text" placeholder="Your Middle Name">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group-field">
                      <label for="">Last Name</label>
                      <input v-model="form.relLastName" type="text" placeholder="Your Last Name">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group-field">
                      <label for="">Phone Number</label>
                      <input v-model="form.relPhoneNumber" type="text" placeholder="Your Phone">
                      <span class="phone-example">example (+44)0111-2222222</span>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group-field">
                      <label for="">Location</label>
                      <input v-model="form.relLocation" type="text" placeholder="please provide the reference Name ( person /company)">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="personal-details-title">
                      <div class="arrow-steps clearfix">
                        <div class="step current">
                          <span class="step-text">Notification Allow</span>
                        </div>
                        <div class="step step-end">
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>


                  <div class="col-lg-12">
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

                    <div class="hear-about">
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group-field">
                          <label for="">Where did you hear about us?</label>
                          <input v-model="form.hearAboutUs" type="text" placeholder="please provide the reference Name ( person /company)">
                        </div>
                      </div>
                    </div>

                    <hr>

                    <p class="privacy-text">
                      By continuing you agree to our <a href="#">Privacy Policy</a>, <a href="#">Terms of Use</a> and <a href="#">use of cookies</a>.
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>


          <div v-if="currentStep === 2" class=" d-flex justify-content-center align-items-center">
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
              Previous
            </button>
            <button v-if="currentStep === 1" @click="submitForm" class="next">
              Submit
            </button>
            <button v-if="currentStep === 2" @click="router.push({ name: 'career-management' })" class="next">
              Back to Post
            </button>
          </div>


          <!-- Popup Message -->
          <div v-if="showPopup" class="popup">
            {{ popupMessage }}
          </div>
        </form>

      </div>
    </div>
  </div>
</template>

<style scoped>
.epmloye-details {
  display: flex;
}

/* Passport */
.main-container {
  width: 100%;
  margin: 0 auto;
  padding: 0rem 0;
}

label,
select,
input {
  display: block;
  padding: 5px;

}

select,
input {
  max-width: 100%;
  padding: 9px;
  border: 1px solid #ccc;
  border-radius: 8px;
  outline: none;
  margin-bottom: 10px;
}

/* Passport */


.step-items h3 {
  margin-bottom: 1.75rem;
  text-align: center;
}


.form-title {
  margin-bottom: 70px;
}

.form-title h2 {
  display: flex;
  justify-content: center;
  font: normal normal 600 40px/60px Montserrat;
  color: #464646;
  text-transform: uppercase;
  padding-bottom: 16px;
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

.text-wrapper {
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


/***** Application-Form *****/
/***** Application-Form *****/


.apply-form-page {
  /* padding: 13px 0; */
  background: #FAFAFA 0% 0% no-repeat padding-box;
  box-shadow: 0px 4px 20px #0000000D;

}

.application-form {
  border: 1px solid #D5D5D5;
  background: #FFFFFF 0% 0% no-repeat padding-box;
  padding: 45px 22px;

}

.form-group label {
  font: normal normal normal 24px/36px Poppins;
  color: #363636;
  margin-bottom: 10px;
}

.form-group .custom-select,
.form-group-field .custom-select {
  width: 100%;
  padding: 8px 16px;
  font-size: 16px;
  color: #666;
  border: 1px solid #D5D5D5;
  border-radius: 8px;
  background-color: #fff;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4 5"><path fill="%23666" d="M2 5L4 3H0z"/></svg>');
  background-repeat: no-repeat;
  background-position: right 16px center;
  background-position-y: calc(50% - 5px);
  background-size: 15px;
}

.custom-select:focus {
  border-color: var(--primary-color);
  outline: none;
}

.data-table{
  max-width: 100%;
}

.availability-table {
  font-family: Arial, sans-serif;
  margin: 0 auto;
  border-collapse: collapse;
  margin-top: 70px;
}

.availability-table h2 {
  font: normal normal medium 24px/36px Poppins;
  color: #363636;
}

.availability-table table {
  width: 100%;
  border-spacing: 0;
}

.availability-table thead th {
  background-color: #EEEEEE;
  text-align: center;
  padding: 10px;
  font-weight: bold;
}

.availability-table tbody td {
  text-align: center;
  padding: 10px;
}

.availability-table tbody td:first-child {
  text-align: left;
  font-weight: normal;
}

.availability-table tbody tr:nth-child(even) {
  background-color: #f4f4f4;
}

.availability-table tbody tr:nth-child(odd) {
  background-color: #ffffff;
}


.availability-table input[type="checkbox"] {
  transform: scale(1.2);
  cursor: pointer;
  margin-left: 110px;
  /* চেকবক্সকে ডান পাশে সরাবে */
}

.personal-details-title {
  margin-top: 50px;
}

.personal-details-title h2 {
  font: normal normal 600 28px/42px Montserrat;
  color: #464646;
  text-transform: uppercase;
}

.form-group-field label {
  font: normal normal normal 16px/24px Poppins;
  padding: 5px 6px;
  color: #363636;
}

.form-group-field input {
  border: 1px solid #D5D5D5;
  border-radius: 8px;
  width: 100%;
  padding: 8px 15px;
  margin-bottom: 20px;
  outline: none;
  color: var(--primary-color);
}

.form-group-field input[type="date"] {
  color: #D5D5D5;
}

.form-group-field input:focus {
  border-color: var(--primary-color);
}

.form-group-field input::placeholder {
  font: normal normal normal 14px/21px Poppins;
  color: #D5D5D5;
}

.files-upload-field {
  width: 170px;
  background: #FFFFFF 0% 0% no-repeat padding-box;
  border: 1px solid #D5D5D5;
  border-radius: 8px;
  padding: 12px 18px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
}

.files-upload-field span {
  font: normal normal normal 16px/21px Poppins;
  color: #A57B5D;
}

.files-upload-field i {
  color: #A57B5D;
  font-size: 17px;
}

.files-upload-field input {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  opacity: 0;
  cursor: pointer;
}

.form-group-field>span {
  text-align: left;
  font: italic normal 300 14px/21px Poppins;
  color: #464646;
  padding-left: 8px;
}

.primary-button1 {
  padding: 10px 64px;
  margin-top: 20px;
}

.form-group-field {
  position: relative;
  padding-bottom: 15px;
}

.phone-example {
  position: absolute;
  right: 0;
  bottom: -3px;
}

.hear-about {
  display: flex;
  justify-content: start;
  margin-left: 120px;
}


.table-responsive-wrapper {
  width: 100%;
  overflow-x: auto;
}

.data-table {
  width: 100%;
  min-width: 600px; /* Optional: prevent too narrow table */
  border-collapse: collapse;
}

.data-table th,
.data-table td {
  padding: 10px;
  text-align: center;
  border: 1px solid #ddd;
}




/* ** Arrow Steps ** */

.arrow-steps {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  max-width: 32%;
  margin-bottom: 10px;
}

.arrow-steps .step-end {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  max-width: 5%;
}



.step:first-child {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}

.arrow-steps .step {
  flex-grow: 1;
  font-size: 24px;
  text-align: center;
  color: var(--secondary-color);
  cursor: default;
  border-right-style: double;
  padding: 10px 0px 10px 0px;
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
  top: 5px;
  width: 0;
  height: 0;
  border-top: 23px solid transparent;
  border-bottom: 25px solid transparent;
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
  max-width: 5px;
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

/* Notification */
.options-section {
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 50px;
}

.options-section h6 {
  font-weight: bold;
}

.form-check {
  margin-bottom: 10px;
}

.form-check input {
  margin-top: 6px;
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
  color: #A57B5D;
  text-decoration: none;
}


/* Notification */


.popup {
  position: fixed;
  top: 20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 10px;
  border-radius: 5px;
  z-index: 9999;
}

/* Mobile View: Convert text to numbers */
@media (max-width: 1024px) {

  .form-title h2 {
    font: normal normal 500 22px / 36px Montserrat;
    text-align: center;
  }

  .form-group label {
    font: normal normal normal 20px / 25px Poppins;
    margin-bottom: 10px;
  }

  .application-form {
    padding: 30px 12px;
  }

  .arrow-steps .step {
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
  }

  .arrow-steps {
    flex-wrap: wrap;
    max-width: 40%;
  }

  .arrow-steps .step-end {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    max-width: 5%;
  }

  .step-text {
    font-size: 16px;
  }

  .arrow-steps .step:after,
  .arrow-steps .step:before {
    right: -16px;
    top: 4px;
    border-top: 25px solid transparent;
    border-bottom: 24px solid transparent;
    border-left: 17px solid var(--tertiary-color);
  }

  .arrow-steps .step:before {
    right: auto;
    left: 0;
    border-left: 19px solid #fff;
    z-index: 0;
  }

  .arrow-steps .step {
    padding: 18px 0px 15px 0px;
    transition: background-color 0.2s ease, min-width 0.2s ease;
  }
}


@media screen and (max-width: 991px) {
  .availability-table {
    margin-top: 50px;
  }
}



/* Mobile View: Convert text to numbers */
@media (max-width: 768px) {

  .form-title h2 {
    font: normal normal 500 22px / 36px Montserrat;
    text-align: center;
  }

  .form-group label {
    font: normal normal normal 20px / 25px Poppins;
    margin-bottom: 10px;
  }

  .application-form {
    padding: 30px 12px;
  }

  .arrow-steps .step {
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
  }

  .arrow-steps {
    flex-wrap: wrap;
    max-width: 50%;
  }

  .arrow-steps .step-end {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    max-width: 5%;
  }

  .step-text {
    font-size: 16px;
  }

  .arrow-steps .step:after,
  .arrow-steps .step:before {
    right: -16px;
    top: 4px;
    border-top: 25px solid transparent;
    border-bottom: 24px solid transparent;
    border-left: 17px solid var(--tertiary-color);
  }

  .arrow-steps .step:before {
    right: auto;
    left: 0;
    border-left: 19px solid #fff;
    z-index: 0;
  }

  .arrow-steps .step {
    padding: 18px 0px 15px 0px;
    transition: background-color 0.2s ease, min-width 0.2s ease;
  }

  .data-table th,
  .data-table td {
    padding: 8px;
    font-size: 14px;
  }



}


@media screen and (max-width: 575px) {

  .availability-table thead th,
  .availability-table tbody td {
    font: normal normal 600 13px/21px Poppins;
    padding-left: 2px;
    padding-right: 2px;
  }

  .data-table{
  max-width: 100%;
}

}

/* Mobile View: Convert text to numbers */
@media (max-width: 425px) {

  .form-title h2 {
    font: normal normal 500 22px / 36px Montserrat;
    text-align: center;
  }

  .form-group label {
    font: normal normal normal 20px / 25px Poppins;
    margin-bottom: 10px;
  }

  .application-form {
    padding: 30px 12px;
  }

  .arrow-steps .step {
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
  }

  .arrow-steps {
    flex-wrap: wrap;
    max-width: 100%;
  }

  .arrow-steps .step-end {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    max-width: 5%;
  }

  .step-text {
    font-size: 16px;
  }

  .arrow-steps .step:after,
  .arrow-steps .step:before {
    right: -16px;
    top: 4px;
    border-top: 25px solid transparent;
    border-bottom: 24px solid transparent;
    border-left: 17px solid var(--tertiary-color);
  }

  .arrow-steps .step:before {
    right: auto;
    left: 0;
    border-left: 19px solid #fff;
    z-index: 0;
  }

  .arrow-steps .step {
    padding: 18px 0px 15px 0px;
    transition: background-color 0.2s ease, min-width 0.2s ease;
  }

  .data-table{
  max-width: 100%;
}
}

/* Mobile View: Convert text to numbers */
@media (max-width: 390px) {

  .form-title h2 {
    font: normal normal 500 22px / 36px Montserrat;
    text-align: center;
  }

  .form-group label {
    font: normal normal normal 20px / 25px Poppins;
    margin-bottom: 10px;
  }

  .application-form {
    padding: 30px 12px;
  }

  .arrow-steps .step {
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
  }

  .arrow-steps {
    flex-wrap: wrap;
    max-width: 100%;
  }

  .arrow-steps .step-end {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    max-width: 5%;
  }

  .step-text {
    font-size: 16px;
  }

  .arrow-steps .step:after,
  .arrow-steps .step:before {
    right: -16px;
    top: 4px;
    border-top: 25px solid transparent;
    border-bottom: 24px solid transparent;
    border-left: 17px solid var(--tertiary-color);
  }

  .arrow-steps .step:before {
    right: auto;
    left: 0;
    border-left: 19px solid #fff;
    z-index: 0;
  }

  .arrow-steps .step {
    padding: 18px 0px 15px 0px;
    transition: background-color 0.2s ease, min-width 0.2s ease;
  }
  
  .data-table{
  max-width: 100%;
}

}


@media (max-width: 320px) {
  .data-table{
  max-width: 100%;
}

}


</style>
