    <script setup>
    import { onMounted, ref, computed } from 'vue';
    import { useJobPost } from '@/stores/jobpost';
    import { useRoute } from 'vue-router';

    const post  = useJobPost();
    const route = useRoute();


    const postData   = ref([]);
    const subSectors = ref("");

    const searchKey   = ref('');
    const location    = ref('');
    const postCode    = ref('');
    const sectorId    = ref('');
    const subSectorId = ref('');
    const jobTypeId   = ref('');
    const hour        = ref('');
    const price       = ref([null, null]);


    const currentPage = ref(1);
    const perPage     = 5;
    const totalItems  = ref(0);
    const totalPages  = computed(() => Math.ceil(totalItems.value / perPage));

    // Pagination Data ফিল্টার করা
    const paginatedData = computed(() => {
      const start = (currentPage.value - 1) * perPage;
      const end   = start + perPage;
      return postData.value.slice(start, end);
    });


    const changePage = (page) => {
      if (page >= 1 && page <= totalPages.value) {
        currentPage.value = page;
      }
    };


    const handleSubSectors = (id) => {
      subSectors.value = post.subSectors(id)
    }

    const formatJobType = (type) => {
      return type.replace('-', ' ').replace(/\b\w/, (c) => c.toUpperCase());
    };


    const getJobPost = async () => {
  try {
    const res = await post.getJobs({
      search_key   : searchKey.value,
      location     : location.value,
      post_code    : postCode.value,
      sector_id    : Number(sectorId.value) || null,
      sub_sector_id: Number(subSectorId.value) || null,
      job_type_id  : Number(jobTypeId.value) || null,
      hour         : hour.value,
      price        : price.value.filter(val => val !== null),
      per_page     : perPage
    });

    
    // Check if response is valid and meta exists
    if (res && res?.result?.meta && res?.result?.meta.total !== undefined) {
      postData.value = res?.result.data;
      totalItems.value = res?.result?.meta?.total;
    } else {
      postData.value = [];
      totalItems.value = 0;
    }
  } catch (error) {
    console.error('Error fetching job posts:', error);
  }
}


    const showFilters = ref(false);
    const filters     = ref({
     
    });

    onMounted(() => {
      getJobPost();
      post.getSectors();
      post.getJobTypes();

    })

</script>


<template>

  <div class="career-part">
    <div class="container">
      <div class="career-section">
        <h2 class="jobs-count">{{ postData.length }} Jobs Found</h2>

        <div class=" search-box">

          <form @submit.prevent="getJobPost" class="row search-primary align-items-center">
            <!-- Keyword Input -->
            <div class="col-lg-6 col-md-6 title">
              <label class="form-label">Keyword</label>
              <input v-model="searchKey" type="text" placeholder=" Job Title" class="form-control" />
            </div>
            <!-- Location & Distance -->
            <div class="col-lg-4 col-md-4">
              <label class="form-label">Location</label>
              <div class="d-flex location-input">
                <select  v-model="location" class="form-select country-select">
                  <option v-for="(locatonData, i) in postData" :key="i" value=""  selected>{{ locatonData?.location }}</option>
                </select>
                <div class="postcode">
                  <input v-model="postCode" type="text" class="form-control " placeholder="City or Postcode" />
                </div>
              </div>
            </div>

            <!-- Search Button -->
            <div class="col-lg-2 col-md-2 text-end">
              <label class="d-block">&nbsp;</label>
              <button class="btn primary-search" @submit="getJobPost.prevent">Search</button>
            </div>
          </form>


          <div class="">
            <!-- Toggle Button -->
            <button class="btn toggle-btn" @click="showFilters = !showFilters">
              {{ showFilters ? 'Hide Advanced Filters <<' : 'Show Advanced Filters >>' }} </button>

                <!-- Advanced Filters Form (Visible When showFilters is True) -->
                <transition name="fade">
                  <div v-if="showFilters" class="card apply-details  mt-3 p-3">
                    <form @submit.prevent="getJobPost">
                      <div class="row">

                        <div class="col-md-6 mb-3">
                          <label class="form-label">Sector</label>
                          <select v-model="sectorId" @change="handleSubSectors(sectorId)" class="main-select">
                            <option value="" disabled selected>Select Sector</option>
                            <option :value="data.id" v-for="(data, i) in post.secctors" :key="i">{{ data.name }}</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                          <select v-model="subSectorId" class="sub-select">
                            <option value="">Select Sub sector..</option>
                            <option :value="data.id" v-for="(data, i) in subSectors?.sub_sectors" :key="i">{{ data.name }}</option>

                          </select>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label class="form-label">Job Type</label>
                          <select v-model="jobTypeId" class="main-select">
                            <option value="" disabled selected>Job Type..</option>
                            <option :value="data.id" v-for="(data, i) in post.jobTyps" :key="i">{{ data.name }}</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                          <select v-model="hour" class="sub-select">
                            <option value="" disabled selected>Hours</option>
                            <option value="full-time">Full Time</option>
                            <option value="part-time">Part Time</option>
                          </select>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label class="form-label">Salary Range</label>
                          <input v-model="price[0]" type="text" class="main-select" placeholder="Min..  in £">

                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                          <input v-model="price[1]" type="text" class="sub-select" placeholder="Max..  in £">
                        </div>

                      </div>
                      <button @submit="getJobPost.prevent" type="submit" class="btn advance-search">Search</button>
                    </form>
                  </div>
                </transition>
          </div>
        </div>


        <div v-for="(item, index) in paginatedData" :key="index" class="job-list">
          <div class="job-card">
            <div class="job-image-container col-lg-6 col-md-6 col-sm-12">
              <img :src="item?.img_path" alt="Housekeeping Job" class="col-lg-6 col-md-6 col-sm-12 job-image" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
              <h3 class="job-title">{{ item?.title }}</h3>
              <p class="job-location">
                <strong>{{ item?.company_name }}</strong> <br />

                {{ item?.location }} | {{ item?.sector?.name }} | {{ item?.sub_sector?.name }} | {{ item.branch }} | {{ item?.post_code }}
              </p>
              <p> Job Type: {{ item?.job_type.name }} | {{ item?.contract_type }} ( {{ formatJobType(item?.hours) }}) | Salary: {{ item?.salary }}, | Benifit: {{ item?.benefit }}</p>
              <p> Reference : {{ item?.reference }}</p>
              <p>Job status: {{ item?.status }}</p>
              <p>Last Apply Data: {{ item?.closing_date }}</p>
              <router-link :to="{ name: 'career-job-details', params: { id: item?.id ?? 0 } }" class="btn apply-btn">Details / Apply</router-link>
            </div>
          </div>
        </div>

        <!--Bordered Pagination-->
        <div class="b-pagination-outer">
          <ul id="border-pagination">
            <li>
              <a href="#" @click.prevent="changePage(currentPage - 1)" :class="{ disabled: currentPage === 1 }">«</a>
            </li>

            <li v-for="page in totalPages" :key="page">
              <a href="#" @click.prevent="changePage(page)" :class="{ active: page === currentPage }">{{ page }}</a>
            </li>

            <li>
              <a href="#" @click.prevent="changePage(currentPage + 1)" :class="{ disabled: currentPage === totalPages }">»</a>
            </li>
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

.title {
  padding-left: 0px;
}

.location-input {
  display: flex;
  justify-content: space-around;
  gap: 8px;
}

.form-control,
.form-select {
  height: 40px;
}

.text-end {
  padding: 0 0;
}

.form-control:focus,
.form-select:focus {
  border-color: rgb(179, 179, 179) !important;
  box-shadow: 0 0 1px rgba(119, 119, 119, 0.979) !important;
  outline: none !important;
}

/* Width Adjustments */
.country-select {
  width: 25%;
  min-width: 60px;
}

.postcode {
  width: 75%;
}

.location-text {
  flex: 1;
}

.miles-select {
  width: 20%;
  min-width: 80px;
}

.apply-btn {
  border: 1px solid var(--primary-color);
  color: var(--primary-color);
}

.apply-btn:hover {
  background: var(--primary-color);
  border: 1px solid var(--secondary-color);
  color: var(--secondary-color);
}





.apply-details {
  display: flex;
}

.primary-search {
  margin-top: 6px;
}

.primary-search,
.apply-details .advance-search {
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

.primary-search:hover {
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

.main-select:focus,
.sub-select:focus {
  border-color: rgb(179, 179, 179) !important;
  box-shadow: 0 0 1px rgba(119, 119, 119, 0.979) !important;
  outline: none !important;
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
  display: grid;
  grid-template-columns: 1fr 1fr; /* Image 1 অংশ নেবে, details 2 অংশ নেবে */
  gap: 20px; /* Image এবং details-এর মধ্যে gap থাকবে */
  background: white;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 15px;
  box-shadow: 0px 4px 20px #0000000D;
  align-items: center; /* Content center-aligned থাকবে */
  padding: 15px;
}

/* Image container */
.job-image-container {
  width: 100%;
}

/* Image style */
.job-image {
  width: 100%;
  max-height: 382px;
  object-fit: cover;
  border-radius: 8px;
}

/* Responsive design (Mobile view) */
@media (max-width: 768px) {
  .job-card {
    grid-template-columns: 1fr; /* মোবাইলে ১ কলাম হবে */
  }
}





/* .job-card {
  display: grid;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 15px;
  box-shadow: 0px 4px 20px #0000000D;

}

.job-image {
  width: 100%;
  max-height: 334px;
  object-fit: cover;
} */

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