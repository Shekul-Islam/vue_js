import { defineStore } from "pinia";
import axiosInstance from "@/services/axiosService";
import { id } from "intl-tel-input/i18n";

export const useJobPost = defineStore ('jobPost', {

  state: () => ({
    loading  : false,
    questions: [],
    secctors : [],
    jobTyps  : [],
  }), 

  actions: {
    async getJobs(filterData) {
      
      try {
        
        const res = await axiosInstance.get("/job-posts", {
          params : {
            search_key : filterData?.search_key,
            location   : filterData?.location,
            post_code  : filterData?.post_code,
            sector_id  : filterData?.sector_id,
            job_type_id: filterData?.job_type_id,
            hours      : filterData?.hour,
            salary     : Array.isArray(filterData?.price) ? filterData?.price.join(','): ''
            
          }
        });
        
        if(res.data.success){
          
          return res.data
        }
      } catch (error) {
        
      } finally {
        this.loading = false;
      }
    },

    async getSectors() {
      try {
        const res = await axiosInstance.get("/sectors");

        if(res?.data.success){
          this.secctors = res?.data?.result?.data
          return res.data
        }

      } catch (error) {
        console.error("Error fetching data: ", error);  
      }
    },

    async getJobTypes() {
      try {
        const res = await axiosInstance.get("/job-types");

        if(res?.data.success){
          this.jobTyps = res?.data?.result?.data
          return res.data
        }

      } catch (error) {
        console.error("Error fetching data: ", error);  
      }
    },

    subSectors (id){
      return this.secctors.find((i)=> i.id == id);
      
    },
    
    async getJobDetails(id) {
      this.loading = true;
      
      try {
        const res = await axiosInstance.get(`/job-posts/${id}`);
        
        if( res?.data.success){
          return res.data
        }
      } catch (error) {
        console.log("API Error:", error);
      } finally {
        this.loading = false;
      }
    },
    
    async insert(data){
      console.log("Called");
      
      try {
        const res = await axiosInstance.post('/job-applications', data);
        if(res?.data?.success){
          return res?.data;
        }

      } catch (error) {
        if(error?.response?.data){
          return error?.response?.data;
        }
      }
    },

    async getQuestions(){
      try {
        const res = await axiosInstance.get('/questions');

        if(res?.data?.success){
          let items = [];
          res?.data?.result?.data.forEach(el => {
            let item = {
              id    : el?.id,
              name  : el?.name,
              answer: ''
            }

            items.push(item);
          });

          this.questions = items
        }
      } catch (error) {
        console.log(error);
        
      }
    }
  }
})