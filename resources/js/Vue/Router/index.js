import VueRouter from "vue-router";
import Home from '../Home'
import About from "../About";
import ShowRow from "../ShowRow";
const routes = [
    {
        path: '/',
        name: 'index',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/show/:id',
        name: 'show-row',
        component: ShowRow
    }
]

const Router = new VueRouter({
    routes
})

export default Router;
