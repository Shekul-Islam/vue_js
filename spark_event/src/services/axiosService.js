// All Import File  Code Is Here......................................................................................................
import axios from "axios";



// All Variable  Code Is Here.....................................................................................................


// API Calling Code Is Here.....................................................................................................

const axiosInstance = axios.create({
  baseURL: import.meta.env.VITE_API_URL + "/api",
});
// All Function  Code Is Here.....................................................................................................


axiosInstance.interceptors.response.use(
  (response) => {
    return response;
  },
  (error) => {
    console.log(error);
    if (error.response && error.response.status === 401) {
      const authInfo = useAuth();
      authInfo.user = {};
    }
    return Promise.reject(error);
  }
);

export default axiosInstance;