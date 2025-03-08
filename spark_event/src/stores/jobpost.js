import { defineStore } from "pinia";
import axiosInstance from "@/services/axiosService";

export const useJobPost = defineStore ('jobPost', {

  state: () => ({
    loading: false,
  }), 

  actions: {
    async getJobs() {
      try {
        const res = await axiosInstance.get("/job-posts");
        
        if(res.data.success){
          
          return res.data
        }
      } catch (error) {
        
      } finally {
        this.loading = false;
      }
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
  }
})