import { createRouter, createWebHistory } from 'vue-router'
import NProgress from "nprogress";
import {
  HomeView,                     AboutView,                            OperationsManagementView,          BespokeStaffingView,    
  HousekeepingManagementView,   FacilityManagementView,               HumanResourceManagementView,       MaintenanceManagementView, 
  HealthSafetyManagementView,   FoodBevarageManagementView,           ProjectManagementView,             FrontDeskManagementView,
  CleaningManagementView,       ItManagementView,                     LaserSpaManagementView,            HospitalityOperationManagementView,
  MarketingManagementView,      HospitalityInvestmentFeasibilityView, RevenueYieldManagementView,        KitchenManagementView,
  CareerManagementView,         ProjectsView,                         ContactView,                       JobVacancyView,                    
  PrivacyPolicy,                TramsAndConditions,                   ApplyFormView,                     BlogView,
  CareerJobDetailsView,    CareerApplyFormView,

} from "@/views";





const routes = [
  { path: '/',                                  name: 'home',                               component: HomeView,                             },
  { path: '/about-us',                          name: 'about-us',                           component: AboutView,                            },
  { path: '/operations-management',             name: 'operations-management',              component: OperationsManagementView,             },
  { path: '/bespoke-staffing',                  name: 'bespoke-staffing',                   component: BespokeStaffingView,                  },
  { path: '/housekeeping-management',           name: 'housekeeping-management',            component: HousekeepingManagementView,           },
  { path: '/project-management',                name: 'project-management',                 component: ProjectManagementView,                },
  { path: '/projects',                          name: 'projects',                           component: ProjectsView,                         },
  { path: '/contact-us',                        name: 'contact-us',                         component: ContactView,                          },
  { path: '/job-vacancy',                       name: 'job-vacancy',                        component: JobVacancyView,                       },
  { path: '/privacy-policy',                    name: 'privacy-policy',                     component: PrivacyPolicy,                        },
  { path: '/trams-&-conditions',                name: 'trams-&-conditions',                 component: TramsAndConditions,                   },
  { path: '/apply-form',                        name: 'apply-form',                         component: ApplyFormView,                        },
  { path: '/blog',                              name: 'blog',                               component: BlogView,                             },
  
  { path: '/facility-management',               name: 'facility-management',                component: FacilityManagementView,               },
  { path: '/human-resource-management',         name: 'human-resource-management',          component: HumanResourceManagementView,          },
  { path: '/maintenance-management',            name: 'maintenance-management',             component: MaintenanceManagementView,            },
  { path: '/health-safety-management',          name: 'health-safety-management',           component: HealthSafetyManagementView,           },
  { path: '/food-bevarage-management',          name: 'food-bevarage-management',           component: FoodBevarageManagementView,           },
  { path: '/kitchen-management',                name: 'kitchen-management',                 component: KitchenManagementView,                },
  { path: '/front-desk-management',             name: 'front-desk-management',              component: FrontDeskManagementView,              },
  { path: '/cleaning-management',               name: 'cleaning-management',                component: CleaningManagementView,               },
  { path: '/it-management',                     name: 'it-management',                      component: ItManagementView,                     },
  { path: '/laser-spa-management',              name: 'laser-spa-management',               component: LaserSpaManagementView,               },
  { path: '/hospitality-operation-management',  name: 'hospitality-operation-management',   component: HospitalityOperationManagementView,   },
  { path: '/marketing-management',              name: 'marketing-management',               component: MarketingManagementView,              },
  { path: '/hospitality-investment-feasibility',name: 'hospitality-investment-feasibility', component: HospitalityInvestmentFeasibilityView, },
  { path: '/revenue-yield-management',          name: 'revenue-yield-management',           component: RevenueYieldManagementView,           },
  { path: '/career-management',                 name: 'career-management',                  component: CareerManagementView,                 },
  { path: '/career-job-details/:id?',           name: 'career-job-details',                 component: CareerJobDetailsView,            },
  { path: '/career-apply-form/:id?',            name: 'career-apply-form',                  component: CareerApplyFormView, props: true,     },
]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
  scrollBehavior() {
    //   ways scroll to top
    return { top: 0, behavior:"smooth" }
  },
});

router.beforeEach((to, from, next) => {
  NProgress.start();

  next();
});

router.afterEach(()=> {
  NProgress.done();
});

export default router
