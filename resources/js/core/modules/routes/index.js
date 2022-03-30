import { createWebHistory, createRouter } from "vue-router";

const routers =[
    {
        path:'/admin/Abastecimentos',
        component: require('./../abastecimentos.vue').default
    },
    {
        path:'/admin/Abastecimentos/novo-abastecimento',
        component: require('./../new_abastecimento.vue').default,
        name: 'Novo_abastecimento',
        meta: {
            title: 'novo_abastecimento'
        }
    },
    {
        path:'/bombas',
        component: () => import('./../bombas.vue')
    },
    {
        path:'/viaturas',
        component: () => import('./../viaturas.vue')
    },
    {
        path:'/nova/bomba',
        component: () => import('./../new_bomba.vue')
    },
]
const router = createRouter({
    history: createWebHistory(),
    routes: routers,
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active",
});
export default router;
