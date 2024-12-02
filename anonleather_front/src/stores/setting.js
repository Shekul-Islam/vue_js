import { defineStore } from "pinia";
import axiosInstance from "@/services/axiosService.js";

export const useSetting = defineStore("setting", {
    state: () =>({
        settings : {},
        loading : false,
        isActive : false,
    }),

        actions: {
            async getData(key = "setting_category_id", data = 4){
                try {
                    const response = await axiosInstance.get('/settings', {
                      params: {
                        [key]:data
                      }
                    });
                    this.settings = response.data.result
                    return response.data.result;
                  } catch (error) {
                    console.log(error);
                  }
            }
        }
})