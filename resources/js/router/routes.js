const routes = [
    {
        path: '/',
        component: () => import('../components/pages/Home.vue'),
        name: 'home'
    },
    {
        path: '/about',
        component: () => import('../components/pages/About.vue'),
        name: 'about'
    }
]

export default routes;