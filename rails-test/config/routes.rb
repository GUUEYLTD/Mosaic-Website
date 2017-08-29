Rails.application.routes.draw do

  get 'data_security_and_privacy/index'

  get 'home/show'
  get 'home' => 'home#show'

  root 'home#show'

  get 'support/index'
  get 'support' => 'support#index'

  get 'about/index'
  get 'about' => 'about#index'

  get 'pricing/index'
  get 'pricing' => 'pricing#index'

  get 'benefits/index'
  get 'benefits' => 'benefits#index'

  get 'care_plan_module/index'
  get 'care_plan_module' => 'care_plan_module#index'

  get 'administrator_module/index'
  get 'administrator_module' => 'administrator_module#index'

  get 'advanced_care_module/index'
  get 'advanced_care_module' => 'advanced_care_module#index'

  get 'analytics_module/index'
  get 'analytics_module' => 'analytics_module#index'

  get 'communication_module/index'
  get 'communication_module' => 'communication_module#index'

  get 'health_and_safety_module/index'
  get 'health_and_safety_module' => 'health_and_safety_module#index'

  get 'meal_planning_module/index'
  get 'meal_planning_module' => 'meal_planning_module#index'

  get 'medication_module/index'
  get 'medication_module' => 'medication_module#index'

  get 'policies_and_procedures_module/index'
  get 'policies_and_procedures_module' => 'policies_and_procedures_module#index'

  get 'reporting_module/index'
  get 'reporting_module' => 'reporting_module#index'

  get 'staff_manager_module/index'
  get 'staff_manager_module' => 'staff_manager_module#index'

  get 'training_module/index'
  get 'training_module' => 'training_module#index'



  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
