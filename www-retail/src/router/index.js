import { createRouter, createWebHistory } from 'vue-router'
import RegisterView from '../views/RegisterView.vue'

const routes = [
  {
    path: '/',
    name: 'register',
    component: RegisterView
  },
  {
    path: '/recipe',
    name: 'recipe',
    component: function () {
      return import( '../views/RecipeView.vue')
    }
  },
  {
    path: '/add-recipe',
    name: 'add-recipe',
    component: function () {
      return import( '../views/AddRecipe.vue')
    }
  },
  {
    path: '/login',
    name: 'login',
    component: function () {
      return import( '../views/LoginView.vue')
    }
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
