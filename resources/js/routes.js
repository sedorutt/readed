import Vue from 'vue';
import Login from './components/Login.vue';
import NotFound from './components/NotFound.vue';
import Home from './components/Home.vue';
import Register from './components/Register.vue';
import Create from './components/Create.vue';
import Author from './components/Author.vue';
import Title from './components/Title.vue';
import Detail from './components/Detail.vue';



export default {
  mode: 'history',
  linkActiveClass: 'font-semibold',
  routes: [
    {
      path: '*',
      component:NotFound
    },
    {
      path: '/login',
      name: 'Login',
      component:Login
    },
    {
      path: '/',
      name: 'Home',
      component: Home,
      props: true,
      // beforeEnter: (to, form, next) =>{
      //   axios.get('/api/athenticated').then(()=>{
      //       next()
      //   }).catch(()=>{
      //       return next({ name: 'Login'})
      //   })
      // }
    },
    {
      path: '/register',
      name: 'Register',
      component:Register
    },
    {
      path: '/books/create',
      name: 'Create',
      component: Create,
      props: true
    },
    {
      path: '/books/author',
      name: 'Author',
      component: Author,
    },
    {
      path: '/books/title',
      name: 'Title',
      component:Title,
    },
    {
      path: '/books/:bookId?/detail',
      name: 'Detail',
      component:Detail,
      props: true
    },
  ]
}