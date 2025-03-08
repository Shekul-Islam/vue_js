    <script setup>
    import { onMounted, ref } from 'vue';
    import { useJobPost } from '@/stores/jobpost';


    const post = useJobPost();
    const postData = ref("");

    const getJobPost = async ()=> {
      const res = await post.getJobs();
      
      postData.value = res?.result.data;

    }

    const showFilters = ref(false);
    const filters = ref({
      category: '',
      minPrice: '',
      maxPrice: ''
    });

    onMounted (()=> {
      getJobPost();
    })

</script>


<template>

  <div class="career-part">
    <div class="container">
      <div class="career-section">
        <h2>36 Job found</h2>

        <div class=" search-box">

          <div class="row search-primary align-items-center">
      <!-- Keyword Input -->
      <div class="col-lg-4 col-md-4">
        <label class="form-label">Keyword</label>
        <input type="text" placeholder="e.g. Job Title" class="form-control" />
      </div>

      <!-- Location & Distance -->
      <div class="col-lg-6 col-md-5">
        <label class="form-label">Location</label>
        <div class="d-flex location-input">
          <select class="form-select country-select">
            <option>🇧🇩 BD</option>
            <option>🇺🇸 US</option>
          </select>
          <input type="text" class="form-control location-text" placeholder="e.g. City or Postcode" />
          <select class="form-select miles-select">
            <option>20 miles</option>
            <option>50 miles</option>
            <option>100 miles</option>
          </select>
        </div>
      </div>

      <!-- Search Button -->
      <div class="col-lg-2 col-md-3 text-end">
        <label class="d-block">&nbsp;</label>
        <button class="btn primary-search w-100">Search</button>
      </div>
    </div>


          <div class="">
            <!-- Toggle Button -->
            <button class="btn toggle-btn" @click="showFilters = !showFilters">
              {{ showFilters ? 'Hide Advanced Filters <<' : 'Show Advanced Filters >>' }} </button>

                <!-- Advanced Filters Form (Visible When showFilters is True) -->
                <transition name="fade">
                  <div v-if="showFilters" class="card apply-details  mt-3 p-3">
                    <form @submit.prevent="applyFilters">
                      <div class="row">

                        <div class="col-md-6 mb-3">
                          <label class="form-label">Sector</label>
                          <select v-model="filters.category" class="main-select">
                            <option value="" disabled selected>Sector..</option>
                            <option value="housekeeping">Housekeeping</option>
                            <option value="humanresource">Human Resource</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                          <select v-model="filters.category" class="sub-select">
                            <option value="" disabled selected>Sub sector..</option>
                            <option value="auditing">Auditing</option>
                            <option value="business analyst">Business Analyst</option>
                          </select>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label class="form-label">Job Type</label>
                          <select v-model="filters.category" class="main-select">
                            <option value="" disabled selected>Sector..</option>
                            <option value="permanent">Permanent</option>
                            <option value="Seasonal">Temporary/Seasonal</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                          <select v-model="filters.category" class="sub-select">
                            <option value="" disabled selected>Hours..</option>
                            <option value="full-time">Full Time</option>
                            <option value="part-tim">Part Time</option>
                          </select>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label class="form-label">Salary</label>
                          <select v-model="filters.category" class="main-select">
                            <option value="" disabled selected>Salary From..</option>
                            <option value="30,000 /">30,000 /-</option>
                            <option value="40,000 /">40,000 /-</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                          <select v-model="filters.category" class="sub-select">
                            <option value="" disabled selected>Salary to..</option>
                            <option value="40,000 /-">40,000 /-</option>
                            <option value="50,000 /-">50,000 /-</option>
                          </select>
                        </div>

                      </div>
                      <button type="submit" class="btn advance-search">Search</button>
                    </form>
                  </div>
                </transition>
          </div>

        </div>

        <div v-for="(item, index) in postData" :key="index" class="job-list">
          {{ item }}
          <div class=" job-card">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <img :src="item?.img_path" alt="Housekeeping Job" class="col-lg-6 col-md-6 col-sm-12 job-image" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
              <h3 class="job-title">{{ item?.title }}</h3>
              <p class="job-location">
                <strong>HYATT REGENCY - 2459</strong> <br />
                {{ item.location}} | £13.50 p/h, Recognition, {{ item.benefit }} | {{ item.reference }}
              </p>
              <router-link :to="{ name: 'career-job-details', params: { id: item?.id ?? 0 } }"  class="btn apply-btn">Details / Apply</router-link>
            </div>
          </div>
        </div>



        <!--Bordered Pagination-->
        <div class="b-pagination-outer">

          <ul id="border-pagination">
            <li><a class="" href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</template>



<style scoped>

.search-primary {
  background: white;
  padding: 12px 15px;
  border-radius: 8px;
}

.location-input {
  display: flex;
  gap: 8px;
}

.form-control,
.form-select {
  height: 40px;
}

/* Width Adjustments */
.country-select {
  width: 15%;
  min-width: 60px;
}

.location-text {
  flex: 1;
}

.miles-select {
  width: 20%;
  min-width: 80px;
}


.apply-btn{
  border: 1px solid var(--primary-color);
  color: var(--primary-color);
}

.apply-btn:hover{
  background: var(--primary-color);
  border: 1px solid var(--secondary-color);
  color: var(--secondary-color);
}





.apply-details {
  display: flex;
}

.primary-search, .apply-details .advance-search {
  width: 100%;
  background: var(--secondary-color);
  color: var(--primary-color);
  border: 1px solid var(--primary-color);
}

.apply-details .advance-search:hover {
  background: var(--primary-color);
  color: var(--secondary-color);
  box-shadow: 0px 4px 20px #0000000D;
}

.primary-search:hover{
  background: var(--primary-color);
  color: var(--secondary-color);
  box-shadow: 0px 4px 20px #0000000D;
}

.toggle-btn {
  padding-top: 10px;
  display: flex;
}

.main-select,
.sub-select {

  padding: .375rem 2.25rem .375rem .75rem;
  border: var(--bs-border-width) solid var(--bs-border-color);
  border-radius: var(--bs-border-radius);
}

.sub-select {
  margin-top: 32px;
}

.career-part {
  justify-content: center;
  padding: 30px 0;
  background-color: #FAFAFA;
  box-shadow: 0px 4px 20px #0000000D;
}

.career-part h2 {
  text-align: center;
  padding: 35px 0;
  color: var(--tertiary-color);
}

.search-box {
  display: grid;
  align-items: center;
  background: white;
  padding: 15px;
  border-radius: 10px;
  margin: 0 0;
}



.location-btn {
  flex: 1;
  text-align: left;
}

.job-list {
  margin-top: 20px;
}

.job-card {
  display: flex;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 15px;
  box-shadow: 0px 4px 20px #0000000D;

}

.job-image {
  object-fit: cover;
  width: 100%;
}

.job-info {
  padding: 15px;
}


/* Smooth Transition */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease-in-out;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}





.search-box .col-md-4,
.search-box .col-md-6,
.search-box .col-md-2 {
  display: flex;
  flex-direction: column;
  justify-content: center;
}


/* border-pagination */
.b-pagination-outer {
  width: 100%;
  margin: 0 auto;
  text-align: center;
  overflow: hidden;
  display: flex;
}

#border-pagination {
  margin: 0 auto;
  padding: 0;
  text-align: center;
}

#border-pagination li {
  display: inline;
}

#border-pagination li a {
  display: block;
  text-decoration: none;
  color: #000;
  padding: 5px 10px;
  border: 1px solid #ddd;
  float: left;
}

#border-pagination li a {
  -webkit-transition: background-color 0.4s;
  transition: background-color 0.4s;
}

#border-pagination li a.active {
  background-color: var(--primary-color);
  color: #fff;
}

#border-pagination li a:hover:not(.active) {
  background: #ddd;
}



@media (max-width: 768px) {
  .search-box {
    flex-direction: column;
    gap: 10px;
  }
}
</style>