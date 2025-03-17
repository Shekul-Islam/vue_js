<script setup>
import { onMounted, ref, watch } from 'vue';
import { useRouter, useRoute } from 'vue-router';
import { useJobPost } from '@/stores/jobpost';

const details = useJobPost();
const router  = useRouter();
const route   = useRoute();

const jobDetails = ref(null);


const getDetails = async ()=>{
 
  try {
    if(!route.params.id){
      console.error("No job ID found");
      return;
    }
    const res = await details.getJobDetails(route?.params?.id);
    
    if ( res?.success){
      jobDetails.value = res?.result;
    }
  }catch(error){
    console.error("API Error:", error);
  }
};


const goToApplyForm = () => {
  router.push({ name: 'career-apply-form', params: { id: route.params.id } });
};


onMounted (()=>{
  getDetails();
})

</script>

<template>
  <div>
    <div class="apply-part">
      <div class="container">
        <div class="row">
          <!-- Left Section (Job Info) -->
          <div class="col-lg-4">
            <div class="job-info-card">
              <h5 class="company-name">{{ jobDetails?.company_name }}</h5>
              <p class="location-text">{{ jobDetails?.address }}</p>
              <div class="info-box">
                <p><strong>Job Ref:</strong> <span>{{ jobDetails?.reference }}</span></p>
                <p><strong>Branch:</strong> <span>{{ jobDetails?.branch }}</span></p>
                <p><strong>Location:</strong> <span>{{ jobDetails?.location }}</span></p>
                <p><strong>Salary/Benefits:</strong> <span>{{ jobDetails?.salary }}/{{ jobDetails?.benefit }}</span></p>
                <p><strong>Contract type:</strong> <span>{{ jobDetails?.contract_type }}</span></p>
                <p><strong>Hours:</strong> <span>{{ jobDetails?.hours }}</span></p>
                <p><strong>Date posted:</strong> <span>{{jobDetails?.created_at}}</span></p>
                <p><strong>Closing date:</strong> <span>{{ jobDetails?.closing_date }}</span></p>
              </div>
            </div>
          </div>

          <!-- Right Section (Job Details) -->
          <div class="col-lg-8">
            <div class="job-image">
              <img :src="jobDetails?.img_path"  alt="Job Image" class="img-fluid rounded">
            </div>

            <div class="job-detail-card">
              <!-- Image -->

              <div class="">
                <!-- Job Title -->
                <div class="job-heading">
                  <h2 class="job-title">{{ jobDetails?.title }}</h2>
                  <p class="company-location">{{ jobDetails?.address }}</p>
                </div>

                <!-- Share Icons -->
                <hr class="divider">
                <div class="job-share">
                  <span>SHARE:</span>
                  <div class="share-icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-solid fa-print"></i>
                  </div>
                  <button @click="goToApplyForm" class="btn apply-btn">Apply for this job</button>
                </div>
                <hr class="divider">

                

                <!-- Job Description -->
                <div v-html="jobDetails?.description" class="job-description">
                 
                 
                </div>
                <div class="job-share">
                    <router-link :to="{name: 'career-management'}" class="back-to"> &lt; Back to Search</router-link>
                    <button @click="goToApplyForm" class="btn apply-btn">Apply for this job</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<style scoped>
.apply-part {
  background: #FAFAFA;
  padding: 30px 0;
}

.job-heading {
  text-align: center;
}

.job-heading h2 {
  color: var(--primary-color);
  font: normal normal 400 40px / 60px Montserrat;
}

.job-heading p {
  font: normal normal 500 14px / 18px Montserrat;
  color: var(--primary-color);
}



/* Left Side (Job Info) */
.job-info-card {
  padding: 20px;
  background: white;
  margin-bottom: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.company-name {
  color: white;
  background: var(--primary-color);
  padding: 10px;
  border-radius: 5px;
  font: normal normal 400 22px / 30px Montserrat;

}

.location-text {
  margin-top: 10px;
  font-size: 14px;
  color: #555;
}

.info-box p {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font: normal normal normal 15px / 36px Poppins;
}

.info-box p strong {
  width: 150px;
  text-align: left;
  font-weight: bold;
  flex-shrink: 0;
}

.info-box p span {
  flex-grow: 1;
  text-align: left;
  word-break: break-word;
  font: normal normal normal 14px / 36px Poppins;
}

/* Left Side (Job Info) */

.job-share {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 10px 0;
}

.back-to{
  text-decoration: none;
}
.back-to:hover{
  text-decoration: underline;
}

.share-icons i {
  font-size: 20px;
  margin: 0 8px;
  cursor: pointer;
  color: #007bff;
  transition: color 0.3s;
}

.share-icons i:hover {
  color: #0056b3;
}

.apply-btn {
  border: 1px solid var(--primary-color);
  background: var(--secondary-color);
  padding: 8px 15px;
  font-size: 14px;
}
.apply-btn:hover {
  background: var(--primary-color);
  color: var(--secondary-color);
  box-shadow: 0px 4px 20px #0000000D;
}


.divider {
  border: 0;
  height: 1px;
  background: #ddd;
  margin: 0px 0;
}

/* Right Side (Job Details) */
.job-detail-card {
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.job-image img {
  height: 400px;
  width: 100%;
  border-radius: 10px;
  margin-bottom: 20px;
  box-shadow: 0px 4px 20px #0000000D;
}



.company-location {
  font-size: 14px;
  color: #555;
}

.share-icons {
  font-size: 20px;
  margin: 10px 0;
}

.job-description {
  margin-top: 20px;
}

.job-description h5 {
  font-family: 'Montserrat', Helvetica, Arial, sans-serif;
  font-size: 1em;
  font-weight: bold;
}

.job-description ul {
  padding-left: 20px;
}

ul {
  list-style: none;
  padding-left: 0;
}

ul li {
  position: relative;
  padding-left: 20px;
}

ul li::before {
  content: "•";
  color: black;
  font-size: 18px;
  position: absolute;
  left: 0;
  top: 0;
}

@media screen and (max-width: 1024px) {
  .job-heading h2 {
  color: var(--primary-color);
  font: normal normal 400 35px / 50px Montserrat;
}
.company-name {
  padding: 10px;
  font: normal normal 400 17px / 26px Montserrat;
}
.info-box p {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font: normal normal normal 14px / 32px Poppins;
}
.info-box p span {
  flex-grow: 1;
  text-align: left;
  word-break: break-word;
  font: normal normal normal 13px / 32px Poppins;
}

}

@media screen and (max-width: 991px) {
  .job-heading h2 {
  color: var(--primary-color);
  font: normal normal 400 35px / 50px Montserrat;
}
}

@media screen and (max-width: 768px) {
  .job-heading h2 {
  color: var(--primary-color);
  font: normal normal 400 32px / 45px Montserrat;
}
}

@media screen and (max-width: 768px) {
  .job-heading h2 {
  color: var(--primary-color);
  font: normal normal 400 28px / 35px Montserrat;
}

.job-heading p {
  font: normal normal 500 13px / 16px Montserrat;
}

.job-share span {
  font: normal normal 500 13px / 18px Montserrat;
  
}
.apply-btn {
  margin-top: 0px;
  padding: 5px 10px;
  font-size: 13px;
}
.company-name {
  color: white;
  background: var(--primary-color);
  padding: 10px;
  border-radius: 5px;
  font: normal normal 400 20px / 28px Montserrat;

}

}
</style>