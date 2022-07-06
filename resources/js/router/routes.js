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
    },
    {
        path: '/order',
        component: () => import('../components/pages/Orders.vue'),
        name: 'order'
    },
    {
        path: '/message',
        component: () => import('../components/pages/Messages.vue'),
        name: 'message'
    }
]

export default routes;